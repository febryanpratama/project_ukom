<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Assesment;
use App\Models\BankAssesment;
use App\Models\DetailUser;
use App\Models\Dokumen;
use App\Models\JawabanSoal;
use App\Models\Notification;
use App\Models\ParsingAssignment;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Sertifikasi;
use App\Models\SertifikasiPeserta;
use App\Models\User;
use App\Services\User\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

    protected $penggunaService;

    public function __construct(UserServices $penggunaService)
    {
        $this->penggunaService = $penggunaService;
    }

    public function indexPortfolio()
    {
        $title = 'Data Portfolio';

        $response = $this->penggunaService->getDataPortofolio();
        // dd($response);

        return view('pages.user.portfolio.index', [
            'title' => $title,
            'data' => $response['data']
        ]);
    }

    public function postPortfolio(Request $request)
    {
        // dd($request->all());
        $response = $this->penggunaService->postPortfolio($request->all());
        // dd($response);

        if ($response['status'] == false) {
            return redirect()->back()->withErrors($response['message']);
        }

        return back()->withSuccess($response['message']);
    }

    public function detailPortfolio($portofolio_id)
    {
        $title = 'Detail Portfolio';

        $response = $this->penggunaService->detailPortfolio($portofolio_id);
        // dd($portofolio_id);
        // dd($response);
        return view('pages.user.portfolio.detail', [
            'title' => $title,
            'dokumen_id' => $portofolio_id,
            'data' => $response['data']
        ]);
    }

    public function postKomentar(Request $request)
    {
        $response = $this->penggunaService->postKomentar($request->all());
        // dd($response);

        if ($response['status'] == false) {
            return redirect()->back()->withErrors($response['message']);
        }

        return back()->withSuccess($response['message']);
    }



    public function indexAssesment()
    {
        $title = 'Assesment';

        $data = Assesment::where('user_id', Auth::user()->id)->get();
        return view('pages.user.assesment.index', [
            'title' => $title,
            'data' => $data
        ]);
    }

    public function requestAssesment()
    {

        $check = Assesment::where('user_id', Auth::user()->id)->where('status_assesment', 'Belum')->first();

        if ($check) {
            return back()->withErrors('Request Assesment sudah dilakukan, silahkan mulai terlebih dahulu');
        }

        $bank_soal = BankAssesment::get();

        $arr = [];
        foreach ($bank_soal as $bs) {
            $arr[] = $bs->id;
        }

        // dd($arr[array_rand($arr)]);
        $data = Assesment::create([
            'bank_soal_id' => $arr[array_rand($arr)],
            'user_id' => Auth::user()->id,
        ]);

        return back()->withSuccess('Berhasil Melakukan Request Ujian');
        // $rand = Rand(0, ($bank_soal->count() - 1));

        // dd($rand);
    }
    public function detailAssesment($assesment_id)
    {
        $title = 'List Data Assesment';

        // dd($assesment_id);
        $assesment = Assesment::where('id', decrypt($assesment_id))->where('user_id', Auth::user()->id)->first();

        if (!$assesment) {
            return back()->withErrors('Data Assesment Tidak Ditemukan');
        }

        // dd($assesment);
        $data = BankAssesment::with('soal')->where('id', $assesment->bank_soal_id)->first();

        $count = $data->soal()->count();
        // dd($count);
        // dd($data->soal);
        // dd($assesment);
        return view('pages.user.assesment.start', [
            'title' => $title,
            'assesment_id' => $assesment_id,
            'data' => $data,
            'count' => $count
        ]);
    }

    public function postAssesment(Request $request)
    {
        // $data = $request->all();
        // dd($request->all());

        DB::beginTransaction();

        try {
            //code...
            $arr = [];
            foreach ($request['soal'] as $key => $val) {
                // dd($val);

                $detail = JawabanSoal::where('soal_id', $key)->where('id', $val)->first();

                // $x = [];
                if ($detail->is_jawaban == '1') {
                    $arr[] = '1';
                }
                // dd($detail);
            }

            // dd(count($arr));

            $assesment = Assesment::where('id', decrypt($request['assesment_id']))->where('user_id', Auth::user()->id)->first();

            // dd($assesment);

            $bank = BankAssesment::with('soal')->where('id', $assesment->bank_soal_id)->first();

            $count = $bank->soal()->count();

            $nilai = (count($arr) / $count) * 100;

            $assesment->update([
                'nilai_assesment' => ceil($nilai),
                'status_assesment' => 'Sudah'
            ]);

            // dd(ceil($nilai));

            DB::commit();

            return redirect('user/assesment')->withSuccess('Berhasil Melakukan Assesment, Jawaban Benar : ' . count($arr) . ' dari ' . $count . ' Soal');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();

            return back()->withErrors($th->getMessage());
        }

        // dd($count);



        // dd($arr);

        // dd(count($data));
        // dd($request->all());
    }

    public function parsingAssesment($assesment_id)
    {
        // dd(decrypt($assesment_id));

        $checkuser = ParsingAssignment::where('user_id', Auth::user()->id)->whereIn('status', ['Diproses'])->get();

        if ($checkuser->isNotEmpty()) {
            return back()->withErrors('Anda Sudah Melaporkan Nilai Anda Sebelumnya. Silahkan Tunggu Konfirmasi Dari Admin');
        }

        ParsingAssignment::create([
            'assesment_id' => decrypt($assesment_id),
            'user_id' => Auth::user()->id,
        ]);

        return back()->withSuccess('Berhasil Melakukan Parsing Assesment');
    }

    public function indexProfil()
    {
        $user = User::with('detail', 'pendidikan', 'pekerjaan')->where('id', Auth::user()->id)->first();

        if (!$user) {
            return back()->withErrors("Data TIdak Ditemukan");
        }

        $datasatwil = DB::table('satwils')->where('role_level', 'input')->select('id', 'name')->get();
        $dokumen = Dokumen::where('tipe_dokumen', Auth::user()->detail->tipe)->get();


        return view('pages.user.profil.index', [
            'title' => 'Profil',
            'data' => $user,
            'datasatwil' => $datasatwil,
            'dokumen' => $dokumen
        ]);
    }

    public function ubahProfil(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:users,id',
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:6',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nrp' => 'required',
            'pangkat' => 'required',
            'satwil' => 'required|numeric',
            'satker' => 'required|numeric',
            'foto_kta' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $user = User::where('id', $request['id'])->first();

            $user->update([
                'name' => $request['nama_lengkap'],
                'email' => $request['email'],
            ]);

            if ($request['password'] != null) {
                $user->update([
                    'password' => Hash::make($request['password']),
                ]);
            }

            $detail = DetailUser::where('user_id', $request['id'])->first();

            if (array_key_exists($request['foto_kta'], $request->all())) {
                $file = $request->file('foto_kta');
                $nama_file = time() . "_" . $file->getClientOriginalName();
                $tujuan_upload = 'foto_kta';
                $file->move($tujuan_upload, $nama_file);
                $detail->update([
                    'foto_kta' => $nama_file,
                ]);
            }

            $detail->update([
                'nama_lengkap' => $request['nama_lengkap'],
                'tempat_lahir' => $request['tempat_lahir'],
                'tanggal_lahir' => $request['tanggal_lahir'],
                'jenis_kelamin' => $request['jenis_kelamin'],
                'nrp' => $request['nrp'],
                'pangkat' => $request['pangkat'],
                'satwil_id' => $request['satwil'],
                'satker_id' => $request['satker'],
            ]);

            DB::commit();

            return back()->withSuccess('Berhasil Mengubah Profil');
        } catch (\Throwable $th) {
            //throw $th;

            dd($th->getMessage());
            DB::rollback();
            return back()->withErrors($th->getMessage());
        }
    }

    public function postPendidikan(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_universitas' => 'required',
            'nama_jurusan' => 'required',
            'tanggal_kelulusan' => 'required|date',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first());
        }

        Pendidikan::create([
            'user_id' => Auth::user()->id,
            'nama_universitas' => $request['nama_universitas'],
            'nama_jurusan' => $request['nama_jurusan'],
            'tanggal_kelulusan' => $request['tanggal_kelulusan'],
        ]);

        return back()->withSuccess('Berhasil Menambahkan Data Pendidikan');
    }

    public function deletePendidikan($pendidikan_id)
    {
        $pendidikan = Pendidikan::where('id', $pendidikan_id)->where('user_id', Auth::user()->id)->first();

        if (!$pendidikan) {
            return back()->withErrors('Data Tidak Ditemukan');
        }

        $pendidikan->delete();

        return back()->withSuccess('Berhasil Menghapus Data Pendidikan');
    }
    public function deletePekerjaan($pekerjaan_id)
    {
        $pekerjaan = Pekerjaan::where('id', $pekerjaan_id)->where('user_id', Auth::user()->id)->first();

        if (!$pekerjaan) {
            return back()->withErrors('Data Tidak Ditemukan');
        }

        $pekerjaan->delete();

        return back()->withSuccess('Berhasil Menghapus Data Pekerjaan');
    }

    public function postPekerjaan(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama_jabatan' => 'required',
            'masa_jabatan' => 'required|numeric',
            'nomor_sk' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first());
        }

        Pekerjaan::create([
            'user_id' => Auth::user()->id,
            'nama_jabatan' => $request['nama_jabatan'],
            'masa_jabatan' => $request['masa_jabatan'],
            'nomor_sk' => $request['nomor_sk'],
        ]);

        return back()->withSuccess('Berhasil Menambahkan Data Pekerjaan');
    }

    public function postFoto(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'foto_profil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first());
        }

        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'foto_profil';
            $file->move($tujuan_upload, $nama_file);
        }

        $detail = DetailUser::where('user_id', Auth::user()->id)->first();

        if (!$detail) {
            return back()->withErrors('Data Tidak Ditemukan');
        }
        $detail->update([
            'foto_profil' => $nama_file,
        ]);

        return back()->withSuccess('Berhasil Mengubah Foto Profil');
    }

    public function indexSertifikasi()
    {
        $title = 'Sertifikasi';

        $sertifikasi = Sertifikasi::get();
        $data = SertifikasiPeserta::with('sertifikasi')->where('user_id', Auth::user()->id)->whereRelation('sertifikasi', 'deleted_at', null)->get();

        return view('pages.user.sertifikasi.index', [
            'title' => $title,
            'sertifikasi' => $sertifikasi,
            'data' => $data,
        ]);
    }

    public function postSertifikasi(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'sertifikasi_id' => 'required|numeric|exists:sertifikasis,id',
            'nomor_sertifikat' => 'required',
            'file_sertifikat' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first());
        }

        if ($request->hasFile('file_sertifikat')) {
            $file = $request->file('file_sertifikat');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'file_sertifikat';
            $file->move($tujuan_upload, $nama_file);
        }


        SertifikasiPeserta::create([
            'user_id' => Auth::user()->id,
            'sertifikasi_id' => $request['sertifikasi_id'],
            'nomor_sertifikat' => $request['nomor_sertifikat'],
            'file_sertifikat' => $nama_file ?? null,
            'status' => 'Belum Terverifikasi'
        ]);

        Notification::create([
            'to_user_id' => 1,
            'deskripsi' => 'Pengguna ' . Auth::user()->name . ' Melakukan Upload Data Sertifikasi, Silahkan Cek Data Sertifikasi Pengguna',
            'categories' => 'sertifikasi'
        ]);

        return back()->withSuccess('Berhasil Menambahkan Data Sertifikasi');
    }
    public function updateSertifikasi(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'sertifikasi_id' => 'required|numeric|exists:sertifikasis,id',
            'sertifikasipeserta_id' => 'required|numeric|exists:sertifikasi_pesertas,id',
            'nomor_sertifikat' => 'required',
            'file_sertifikat' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors()->first());
        }

        // dd($request->all());

        $check = SertifikasiPeserta::where('id', $request['sertifikasipeserta_id'])->where('user_id', Auth::user()->id)->first();

        if (!$check) {
            return back()->withErrors('Data Tidak Ditemukan');
        }

        if ($request->hasFile('file_sertifikat')) {
            $file = $request->file('file_sertifikat');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $tujuan_upload = 'file_sertifikat';
            $file->move($tujuan_upload, $nama_file);
        }

        $check->update([
            // 'user_id' => Auth::user()->id,
            'sertifikasi_id' => $request['sertifikasi_id'],
            'nomor_sertifikat' => $request['nomor_sertifikat'],
            'file_sertifikat' => $nama_file ?? null,
            'status' => 'Belum Terverifikasi'
        ]);

        return back()->withSuccess('Berhasil Mengubah Data Sertifikasi');
    }
}
