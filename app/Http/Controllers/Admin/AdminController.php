<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assesment;
use App\Models\BankAssesment;
use App\Models\DetailUser;
use App\Models\Dokumen;
use App\Models\Notification;
use App\Models\ParsingAssignment;
use App\Models\Periode;
use App\Models\Portofolio;
use App\Models\Sertifikasi;
use App\Models\SertifikasiPeserta;
use App\Models\User;
use App\Services\Admin\BankSoalService;
use App\Services\Admin\DokumenService;
use App\Services\Admin\PenggunaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    protected $penggunaService;
    protected $dokumenService;
    protected $bankAssesmentService;

    public function __construct(PenggunaService $penggunaService, DokumenService $dokumenService, BankSoalService $bankAssesmentService)
    {
        $this->penggunaService = $penggunaService;
        $this->dokumenService = $dokumenService;
        $this->bankAssesmentService = $bankAssesmentService;
    }

    public function dashboard()
    {
        $role = Auth::user()->roles->pluck('name')[0];

        if ($role == 'User') {
            # code...
            $dokumen = Dokumen::where('tipe_dokumen', Auth::user()->detail->tipe)->get();

            $assesment = Assesment::where('user_id', Auth::user()->id)->get();

            return view('pages.dashboard', [
                'dokumen' => $dokumen,
                'assesment' => $assesment
            ]);
        } else {
            //
            $data = $this->penggunaService->getData();

            $ppk = User::with('detail')->role('User')->whereRelation('detail', 'tipe', 'PPK')->get();

            $pokja = User::with('detail')->role('User')->whereRelation('detail', 'tipe', 'POKJA')->get();
            // dd($data);
            $user = DetailUser::get();

            return view('pages.dashboard', [
                'pengguna' => $data->count(),
                'ppk' => $ppk->count(),
                'pokja' => $pokja->count(),
                'user' => $user
            ]);
        }
    }

    public function indexUser()
    {
        $title = 'List Data User';

        $response = $this->penggunaService->getData();

        // dd($response);
        return view('pages.admin.user.index', [
            'title' => $title,
            'data' => $response

        ]);
    }

    public function detailUser($user_id)
    {
        $title = 'Detail Data User';

        $data = $this->penggunaService->detailData($user_id);

        $dokumen = Dokumen::where('tipe_dokumen', $data->detail->tipe)->get();


        // dd($dokumen);
        $datasatwil = DB::table('satwils')->where('role_level', 'input')->select('id', 'name')->get();

        return view('pages.admin.user.detail', [
            'title' => $title,
            'data' => $data,
            'datasatwil' => $datasatwil,
            'dokumen' => $dokumen
        ]);
    }

    public function setujuUser($user_id)
    {
        $detail = User::where('id', $user_id)->first();

        if (!$detail) {
            return back()->withErrors('Data tidak ditemukan');
        }

        $detail->update([
            'is_active' => "1"
        ]);

        return back()->withSuccess('Data berhasil disetujui');
    }

    public function batalUser($user_id)
    {
        $detail = User::where('id', $user_id)->first();

        if (!$detail) {
            return back()->withErrors('Data tidak ditemukan');
        }

        $detail->update([
            'is_active' => "0"
        ]);

        return back()->withSuccess('Data berhasil Diubah');
    }

    public function indexPortfolio()
    {
        $title = 'List Data Portfolio';

        $user = DetailUser::get();
        // $response = Portofolio::get();

        // dd($user);

        return view('pages.admin.portfolio.index', [
            'title' => $title,
            'user' => $user
        ]);
    }

    public function detailDokumen($detail_user_id)
    {
        $title = 'List Data Portfolio User';

        $detailUser = DetailUser::where('id', $detail_user_id)->first();

        if (!$detailUser) {
            return back()->withErrors('Data Tidak Ditemukan');
        }

        $dokumen = Dokumen::where('tipe_dokumen', $detailUser->tipe)->get();

        return view('pages.admin.portfolio.detail', [
            'title' => $title,
            'user_id' => $detailUser->user_id,
            'data' => $dokumen
        ]);
    }

    public function komentarDokumen($detail_user_id, $portofolio_id)
    {
        $title = 'Detail Data Dokumen User';

        $detailUser = DetailUser::where('user_id', $detail_user_id)->first();

        if (!$detailUser) {
            return back()->withErrors('Data Tidak Ditemukan');
        }

        $portfolio = Portofolio::where('id', $portofolio_id)->first();

        if (!$portfolio) {
            return back()->withErrors('Data Tidak Ditemukan');
        }

        return view('pages.admin.portfolio.comment', [
            'title' => $title,
            'user_id' => $detailUser->user_id,
            'data' => $portfolio
        ]);
    }

    public function postKomentar(Request $request)
    {
        // dd($request->all());

        $response = $this->penggunaService->postKomentar($request->all());

        // dd($response);
        if ($response['status']) {
            return back()->withSuccess($response['message']);
        } else {
            return back()->withErrors($response['message']);
        }
    }

    public function disetujui($portofolio_id)
    {
        // dd($portofolio_id);
        $portofolio = Portofolio::where('id', $portofolio_id)->first();

        if (!$portofolio) {
            return back()->withErrors('Data Tidak Ditemukan');
        }

        $portofolio->update([
            'status' => "Disetujui"
        ]);

        return back()->withSuccess('Data berhasil disetujui');
    }
    public function ditolak($portofolio_id)
    {
        // dd($portofolio_id);
        $portofolio = Portofolio::where('id', $portofolio_id)->first();

        if (!$portofolio) {
            return back()->withErrors('Data Tidak Ditemukan');
        }

        $portofolio->update([
            'status' => "Ditolak"
        ]);

        return back()->withSuccess('Data berhasil disetujui');
    }
    public function direvisi($portofolio_id)
    {
        // dd($portofolio_id);
        $portofolio = Portofolio::where('id', $portofolio_id)->first();

        if (!$portofolio) {
            return back()->withErrors('Data Tidak Ditemukan');
        }

        $portofolio->update([
            'status' => "Revisi"
        ]);

        return back()->withSuccess('Data berhasil disetujui');
    }
    public function direview($portofolio_id)
    {
        // dd($portofolio_id);
        $portofolio = Portofolio::where('id', $portofolio_id)->first();

        if (!$portofolio) {
            return back()->withErrors('Data Tidak Ditemukan');
        }

        $portofolio->update([
            'status' => "Direview"
        ]);

        return back()->withSuccess('Data berhasil direview');
    }

    public function detailDokumenUser()
    {
        $title = 'Detail Data Dokumen User';

        return view('pages.admin.portfolio.comment', [
            'title' => $title
        ]);
    }

    public function indexDokumen()
    {
        $title = 'List Data Dokumen';

        $response = $this->dokumenService->getData();

        return view('pages.admin.dokumen.index', [
            'title' => $title,
            'data' => $response
        ]);
    }

    public function storeDokumen(Request $request)
    {
        // dd($request->all());
        $response = $this->dokumenService->storeData($request->all());

        if ($response['status']) {
            return back()->withSuccess($response['message']);
        } else {
            return back()->withErrors($response['message']);
        }
    }

    public function updateDokumen(Request $request)
    {
        // dd($request->all());
        $response = $this->dokumenService->updateData($request->all());

        if ($response['status']) {
            return back()->withSuccess($response['message']);
        } else {
            return back()->withErrors($response['message']);
        }
    }

    public function hapusDokumen($dokumen_id)
    {
        $dokumen = Dokumen::where('id', $dokumen_id)->first();

        if (!$dokumen) {
            return back()->withErrors('Dokumen tidak ditemukan');
        }
        $dokumen->delete();

        return back()->withSuccess('Dokumen berhasil dihapus');
    }

    public function indexBankAssesment()
    {
        $title = 'List Data Bank Soal';

        $response = $this->bankAssesmentService->getData();

        return view('pages.admin.soal.bank', [
            'title' => $title,
            'data' => $response
        ]);
    }

    public function storeBankAssesment(Request $request)
    {
        $response = $this->bankAssesmentService->storeData($request->all());

        if ($response['status']) {
            return back()->withSuccess($response['message']);
        } else {
            return back()->withErrors($response['message']);
        }
    }

    public function indexSoal($bank_id)
    {
        $title = 'List Data Soal';

        $response = $this->bankAssesmentService->getDataSoal($bank_id);

        if (!$response['status']) {
            return back()->withErrors($response['message']);
        }

        return view('pages.admin.soal.index', [
            'title' => $title,
            'bank_id' => $bank_id,
            'data' => $response['data']
        ]);
    }
    public function postSoal(Request $request)
    {
        // dd($request->all());
        $response = $this->bankAssesmentService->storeSoal($request->all());

        if ($response['status']) {
            return back()->withSuccess($response['message']);
        } else {
            return back()->withErrors($response['message']);
        }

        // return view('pages.admin.soal.index', [
        //     'title' => $title,
        //     'bank_id' => $bank_id
        // ]);
    }

    public function detailSoal($bank_id, $soal_id)
    {
        $title = 'Detail Data Soal';

        $response = $this->bankAssesmentService->detailSoal($bank_id, $soal_id);

        // dd($bank)

        if ($response['status'] == false) {
            return back()->withErrors($response['message']);
        }

        // dd($response['data']);

        return view('pages.admin.soal.detail', [
            'title' => $title,
            'bank_id' => $bank_id,
            'soal_id' => $soal_id,
            'data' => $response['data'],
            'data_jawaban' => $response['jawaban']
        ]);
    }

    public function postJawaban(Request $request)
    {
        // dd($request->all());

        $response = $this->bankAssesmentService->storeJawaban($request->all());

        if ($response['status']) {
            return back()->withSuccess($response['message']);
        } else {
            return back()->withErrors($response['message']);
        }
    }

    public function setJawaban($jawaban_id, $soal_id)
    {
        // dd($jawaban_id, $soal_id);

        $response = $this->bankAssesmentService->setJawaban($jawaban_id, $soal_id);

        if ($response['status']) {
            return back()->withSuccess($response['message']);
        } else {
            return back()->withErrors($response['message']);
        }
    }

    public function indexAssesment()
    {
        $title = 'List Data Assesment';

        $data = ParsingAssignment::with('assesment', 'user')->get();
        // dd($data);
        $periode = Periode::get();
        return view('pages.admin.assesment.index', [
            'title' => $title,
            'data' => $data,
            'periode' => $periode
        ]);
    }

    public function parsePeriode(Request $request)
    {
        $periode = Periode::where('id', $request->periode_id)->first();

        if (!$periode) {
            return back()->withErrors('Periode tidak ditemukan');
        }
        $parsing = ParsingAssignment::where('id', $request->parsing_id)->first();

        if (!$parsing) {
            return back()->withErrors('Data parsing tidak ditemukan');
        }

        $parsing->update([
            'periode_id' => $periode->id,
            'status' => 'Diterima',
        ]);


        // dd($data);
        return back()->withSuccess('Periode berhasil diupdate');
    }

    public function indexPeriode()
    {
        $title = 'List Data Periode';

        $data = Periode::get();


        return view('pages.admin.periode.index', [
            'title' => $title,
            'data' => $data
        ]);
    }

    public function postPeriode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_periode' => 'required',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first());
        }

        Periode::create([
            'nama_periode' => $request->nama_periode,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
        ]);

        return back()->withSuccess('Data berhasil ditambahkan');
    }

    public function ubahPassword(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first());
        }

        $user = User::where('id', $request->id)->first();

        if (!$user) {
            return back()->withErrors('User Tidak Ditemukan');
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->withSuccess("Berhasil Mengubah Data Password");
    }

    public function ubahVerif(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|in:0,1',
            'id' => 'required|exists:users,id'

        ]);

        // dd($request->all());
        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first());
        }

        $user = User::where('id', $request->id)->update([
            'is_active' => $request->status
        ]);

        return back()->withSuccess("Berhasil Mengubah Data Verifikasi");
    }

    public function indexSertifikasi()
    {
        $title = 'List Data Sertifikasi';

        $data = Sertifikasi::get();

        return view('pages.admin.sertifikasi.index', [
            'title' => $title,
            'data' => $data
        ]);
    }

    public function postSertifikasi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_sertifikasi' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first());
        }

        Sertifikasi::create([
            'nama_sertifikasi' => $request->nama_sertifikasi,
        ]);

        return back()->withSuccess('Data Sertifikasi berhasil ditambahkan');
    }

    public function updateSertifikasi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_sertifikasi' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first());
        }

        $check = Sertifikasi::where('id', $request->id)->first();

        if (!$check) {
            return back()->withErrors('Data Sertifikasi tidak ditemukan');
        }

        $check->update([
            'nama_sertifikasi' => $request->nama_sertifikasi,
        ]);

        return back()->withSuccess('Data Sertifikasi berhasil diupdate');
    }

    public function deleteSertifikasi($sertifikasi_id)
    {
        $check = Sertifikasi::where('id', $sertifikasi_id)->first();

        if (!$check) {
            return back()->withErrors('Data Sertifikasi tidak ditemukan');
        }

        $check->delete();

        return back()->withSuccess('Data Sertifikasi berhasil dihapus');
    }

    public function indexListSertifikasi()
    {
        $title = 'List Data Sertifikasi';

        $data = Sertifikasi::get();

        return view('pages.admin.list-sertifikasi.index', [
            'title' => $title,
            'data' => $data
        ]);
    }

    public function detailListSertifikasi($sertifikasi_id)
    {
        $title = 'List Data Sertifikasi';

        $check = Sertifikasi::where('id', $sertifikasi_id)->first();

        if (!$check) {
            return back()->withErrors('Data Sertifikasi tidak ditemukan');
        }

        $data = SertifikasiPeserta::with('sertifikasi', 'user')->where('sertifikasi_id', $sertifikasi_id)->get();


        return view('pages.admin.list-sertifikasi.detail', [
            'title' => $title,
            'data' => $data
        ]);
    }

    public function setujuSertifikasi($sertifikasiPeserta_id)
    {
        $check = SertifikasiPeserta::where('id', $sertifikasiPeserta_id)->first();

        if (!$check) {
            return back()->withErrors('Data Sertifikasi tidak ditemukan');
        }

        $check->update([
            'status' => 'Terverifikasi'
        ]);

        Notification::create([
            'to_user_id' => $check->user_id,
            'deskripsi' => 'Sertifikasi anda telah divalidasi oleh admin',
            'categories' => 'sertifikasi'
        ]);

        return back()->withSuccess('Data Sertifikasi berhasil diupdate');
    }
    public function tolakSertifikasi($sertifikasiPeserta_id)
    {
        $check = SertifikasiPeserta::where('id', $sertifikasiPeserta_id)->first();

        if (!$check) {
            return back()->withErrors('Data Sertifikasi tidak di Setujui');
        }

        $check->update([
            'status' => 'Ditolak'
        ]);

        return back()->withSuccess('Data Sertifikasi berhasil diTolak');
    }
}
