<?php

namespace App\Services\Admin;

use App\Models\BankAssesment;
use App\Models\JawabanSoal;
use App\Models\SoalAssesment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BankSoalService
{
    static function getData()
    {
        $data = BankAssesment::orderBy('id', 'DESC')->get();

        return $data;
    }

    static function storeData($data)
    {
        // 
        DB::beginTransaction();

        try {
            BankAssesment::create([
                'nama_bank_soal' => $data['nama_bank_soal'],
            ]);

            DB::commit();

            return [
                'status' => true,
                'message' => 'Data Bank Soal berhasil disimpan'
            ];
        } catch (\Exception $e) {
            DB::rollBack();
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    static function getDataSoal($bank_id)
    {

        $bank = BankAssesment::where('id', $bank_id)->first();
        if (!$bank) {
            return [
                'status' => false,
                'message' => 'Bank Soal tidak ditemukan'
            ];
        }
        $data = SoalAssesment::where('bank_soal_id', $bank_id)->orderBy('id', 'DESC')->get();

        // dd($data);
        return [
            'status' => true,
            'message' => 'Data Soal berhasil ditemukan',
            'data' => $data,
        ];
    }

    static function storeSoal($data)
    {
        $validator = Validator::make($data, [
            'bank_id' => 'required|numeric|exists:bank_assesments,id',
            'soal' => 'required',
        ]);

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first()
            ];
        }

        DB::beginTransaction();

        try {
            SoalAssesment::create([
                'bank_soal_id' => $data['bank_id'],
                'soal' => $data['soal'],
            ]);

            DB::commit();

            return [
                'status' => true,
                'message' => 'Data Soal berhasil disimpan'
            ];
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return [
                'status' => false,
                'message' => $th->getMessage()
            ];
        }
    }

    static function detailSoal($bank_id, $soal_id)
    {
        $bank = BankAssesment::where('id', $bank_id)->first();
        if (!$bank) {
            return [
                'status' => false,
                'message' => 'Bank Soal tidak ditemukan'
            ];
        }

        $soal = SoalAssesment::where('id', $soal_id)->first();
        if (!$soal) {
            return [
                'status' => false,
                'message' => 'Soal tidak ditemukan'
            ];
        }

        $jawaban = JawabanSoal::where('soal_id', $soal_id)->get();

        return [
            'status' => true,
            'message' => 'Data Soal berhasil ditemukan',
            'data' => $soal,
            'jawaban' => $jawaban,
        ];
    }

    static function storeJawaban($data)
    {
        $validator = Validator::make($data, [
            'soal_id' => 'required|numeric|exists:soal_assesments,id',
            'jawaban' => 'required',
        ]);

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first()
            ];
        }

        DB::beginTransaction();

        try {
            JawabanSoal::create([
                'soal_id' => $data['soal_id'],
                'jawaban' => $data['jawaban'],
            ]);

            DB::commit();

            return [
                'status' => true,
                'message' => 'Data Jawaban berhasil disimpan'
            ];
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return [
                'status' => false,
                'message' => $th->getMessage()
            ];
        }
    }

    static function setJawaban($jawaban_id, $soal_id)
    {
        $soal = SoalAssesment::where('id', $soal_id)->first();
        if (!$soal) {
            return [
                'status' => false,
                'message' => 'Soal tidak ditemukan'
            ];
        }

        $jawaban = JawabanSoal::where('id', $jawaban_id)->first();
        if (!$jawaban) {
            return [
                'status' => false,
                'message' => 'Jawaban tidak ditemukan'
            ];
        }

        DB::beginTransaction();

        try {
            $set_false = JawabanSoal::where('soal_id', $soal_id)->update([
                'is_jawaban' => 0
            ]);

            JawabanSoal::where('id', $jawaban_id)->update([
                'is_jawaban' => 1
            ]);
            //code...
            DB::commit();

            return [
                'status' => true,
                'message' => 'Data Jawaban berhasil disimpan'
            ];
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return [
                'status' => false,
                'message' => $th->getMessage()
            ];
        }
    }
}
