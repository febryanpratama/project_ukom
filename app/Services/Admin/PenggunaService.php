<?php

namespace App\Services\Admin;

use App\Models\KomentarPortofolio;
use App\Models\Portofolio;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PenggunaService
{
    static function getData()
    {
        $data = User::with('detail')->role('User')->get();

        return $data;
    }

    static function detailData($user_id)
    {
        $data = User::with('detail', 'pekerjaan', 'pendidikan')->role('User')->where('id', $user_id)->first();

        return $data;
    }

    static function postKomentar($data)
    {
        $validator = Validator::make($data, [
            'komentar' => 'required',
            'portofolio_id' => 'required|exists:portofolios,id'
        ]);

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first()
            ];
        }

        $portfolio = Portofolio::where('id', $data['portofolio_id'])->first();
        // dd($portfolio);

        $data = KomentarPortofolio::create([
            'komentar' => $data['komentar'],
            'portofolio_id' => $data['portofolio_id'],
            'sender_id' => Auth::user()->id,
            'receiver_id' => $portfolio->user_id
        ]);

        return [
            'status' => true,
            'message' => 'Berhasil mengirim komentar',
        ];
    }
}
