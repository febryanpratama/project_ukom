<?php

namespace App\Helpers;

use App\Models\Assesment;
use App\Models\Dokumen;
use App\Models\JawabanSoal;
use App\Models\KomentarPortofolio;
use App\Models\Notification;
use App\Models\Portofolio;
use App\Models\SoalAssesment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Format
{
    static function messages($string)
    {
        $str1 = str_replace('[["', '', $string);
        $str2 = str_replace('"]]', '', $str1);

        return $str2;
    }

    static function satwil($satwil_id)
    {
        $data = DB::table('satwils')->where('role_level', 'input')->select('id', 'name')->where('id', $satwil_id)->first();

        // dd($data);
        return $data->name;
    }

    static function satker($satker_id)
    {
        $data = DB::table('satkers')->where('id', $satker_id)->first();

        return $data->name;
    }

    static function getKomentar($portofolio_id)
    {
        $datakomentar = KomentarPortofolio::where('portofolio_id', $portofolio_id)->get();

        if ($datakomentar->isEmpty()) {
            return null;
        }
        // dd($datakomentar);
        return $datakomentar;
    }

    static function getDataDokumen($user_id)
    {
        $data = Portofolio::where('user_id', $user_id)->get();

        if ($data->isEmpty()) {
            return "Belum Upload Dokumen";
        } else {
            return "Sudah Upload Dokumen";
        }
    }

    static function getStatusDokumen($dokumen_id, $user_id)
    {
        // dd($user_id);

        $data = Portofolio::where('user_id', $user_id)->where('dokumen_id', $dokumen_id)->first();


        if (!$data) {
            return "Belum Upload Dokumen";
        } else {
            return "Sudah Upload Dokumen";
        }
        // dd($data);
    }
    static function getIsStatus($dokumen_id, $user_id)
    {
        // dd($user_id);

        $data = Portofolio::where('user_id', $user_id)->where('dokumen_id', $dokumen_id)->first();


        if (!$data) {
            // dd($data);
        } else {
            return $data->status;
        }
        // dd($data);
    }

    static function getPortofolioId($dokumen_id, $user_id)
    {
        // dd($user_id);

        $data = Portofolio::where('user_id', $user_id)->where('dokumen_id', $dokumen_id)->first();


        if (!$data) {
            return null;
        } else {
            return $data->id;
        }
        // dd($data);
    }

    static function getJawaban($soal_id)
    {

        $soal = JawabanSoal::where('soal_id', $soal_id)->get();

        // dd($soal);
        return $soal;
    }

    static function checkProposal($dokumen_id)
    {
        $data = Portofolio::where('dokumen_id', $dokumen_id)->where('user_id', Auth::user()->id)->first();

        // dd($data);
        if (!$data) {
            return false;
        } else {
            return true;
        }
    }

    static function sumNilai()
    {
        $data = Assesment::get();

        $sum = $data->sum('nilai_assesment');

        // dd($sum);

        $total = $data->count();

        $hasil = $sum / $total;

        if ($hasil != null) {
            return floor($hasil);
        } else {
            return '0';
        }
    }

    static function getFileCount()
    {
        $data = Portofolio::where('user_id', Auth::user()->id)->get();

        if ($data->isEmpty()) {
            return '0';
        } else {
            return $data->count();
        }
    }

    static function getDokumenCount()
    {
        $data = Dokumen::where('tipe_dokumen', Auth::user()->detail->tipe)->get();

        if ($data->isEmpty()) {
            return null;
        } else {
            return $data->count();
        }
    }

    static function getNotifikasi()
    {

        $data = Notification::where('to_user_id', Auth::user()->id)->get();

        // dd($data);
        return $data;
    }

    static function getCountAssesment()
    {
        $data = Assesment::where('user_id', Auth::user()->id)->where('status_assesment', 'Sudah')->get();

        return $data->count();
    }
    static function getMaxAssesment()
    {
        $data = Assesment::where('user_id', Auth::user()->id)->max('nilai_assesment');

        // dd($data);
        if ($data == null) {
            return '0';
        }
        return $data;
    }

    static function getMeanAssesment()
    {
        $data = Assesment::where('user_id', Auth::user()->id)->get();

        $sum = $data->sum('nilai_assesment');

        // dd($sum);

        if ($sum == 0) {
            return '0';
        }

        $total = $data->count();

        $hasil = $sum / $total;

        if ($hasil != null) {
            return floor($hasil);
        } else {
            return '0';
        }
    }
}
