<?php

namespace App\Services\User;

use App\Models\Dokumen;
use App\Models\KomentarPortofolio;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserServices
{
    static function getDataPortofolio()
    {
        // 


        // dd(Auth::user()->detail->tipe);

        $dokumen = Dokumen::where('tipe_dokumen', Session::get('tipe'))->get();

        // dd($dokumen);
        return [
            'status' => true,
            'data' => $dokumen
        ];
    }

    static function detailPortfolio($portofolio_id)
    {
        $detail = Dokumen::where('id', $portofolio_id)->first();

        // dd($portofolio_id);

        if (!$detail) {
            return [
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ];
        }

        $portofolio = Portofolio::where('dokumen_id', $detail->id)->where('user_id', Auth::user()->id)->first();

        // dd($portofolio);
        return [
            'status' => true,
            'data' => $portofolio
        ];
    }

    static function postPortfolio($data)
    {

        // dd($data);

        $validator = Validator::make($data, [
            'dokumen_id' => 'required|exists:dokumens,id',
            'bukti_dukung_portofolio' => 'required',
            'kep_penugasan' => 'required',
            'keterangan' => 'nullable',
            'path_portofolio' => 'required|file|mimes:pdf',
        ]);

        if ($validator->fails()) {

            // dd($validator->errors()->first());
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
            ];
        }


        // dd(Auth::user()->id);
        $check = Portofolio::where('dokumen_id', $data['dokumen_id'])->where('user_id', Auth::user()->id)->first();


        // dd($check);
        if ($data['path_portofolio']) {
            $file = $data['path_portofolio'];
            $filename = time() . '.' . $file->getClientOriginalName();
            // dd($filename);
            $file->move(public_path('portofolio'), $filename);
            $data['path_portofolio'] = $filename;
        }

        if ($check) {
            $check->update([
                // 'user_id' => Auth::user()->id,
                'dokumen_id' => $data['dokumen_id'],
                'bukti_dukung_portofolio' => $data['bukti_dukung_portofolio'],
                'kep_penugasan' => $data['kep_penugasan'],
                'keterangan' => $data['keterangan'] ?? null,
                'path_portofolio' => $data['path_portofolio'],
            ]);
            return [
                'status' => true,
                'message' => 'Data berhasil diubah',
                'data' => $check
            ];
        } else {
            $portofolio = Portofolio::create([
                'user_id' => Auth::user()->id,
                'dokumen_id' => $data['dokumen_id'],
                'bukti_dukung_portofolio' => $data['bukti_dukung_portofolio'],
                'kep_penugasan' => $data['kep_penugasan'],
                'keterangan' => $data['keterangan'] ?? null,
                'path_portofolio' => $data['path_portofolio'],
            ]);
            return [
                'status' => true,
                'message' => 'Data berhasil ditambahkan',
                'data' => $portofolio
            ];
        }
    }

    static function postKomentar($data)
    {
        // dd($data);
        $validator = Validator::make($data, [
            'portofolio_id' => 'required|exists:portofolios,id',
            'komentar' => 'required',
        ]);

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first(),
            ];
        }

        $portofolio = Portofolio::where('id', $data['portofolio_id'])->first();


        $komentar = KomentarPortofolio::create([
            'portofolio_id' => $data['portofolio_id'],
            'sender_id' => Auth::user()->id,
            'receiver_id' => $portofolio['user_id'],
            'komentar' => $data['komentar'],
        ]);

        return [
            'status' => true,
            'message' => 'Berhasil Menyimpan Komentar'
        ];
    }
}
