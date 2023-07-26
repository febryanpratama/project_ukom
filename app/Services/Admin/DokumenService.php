<?php

namespace App\Services\Admin;

use App\Models\Dokumen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DokumenService
{
    static function getData()
    {
        $data = Dokumen::orderBy('tipe_dokumen', 'DESC')->get();

        return $data;
    }

    static function storeData($data)
    {
        $validator = Validator::make($data, [
            'nama_dokumen' => 'required',
            'tipe' => 'required|in:PPK,POKJA',
            'file_dokumen' => 'required|mimes:pdf|max:2048',
        ]);

        if ($validator->fails()) {
            # code...
            return [
                'status' => false,
                'message' => $validator->errors()->first()
            ];
        }

        DB::beginTransaction();
        try {
            if ($data['file_dokumen']) {
                $file = $data['file_dokumen'];
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move('dokumen', $filename);
            }

            Dokumen::create([
                'nama_dokumen' => $data['nama_dokumen'],
                'tipe_dokumen' => $data['tipe'],
                'path_dokumen' => $filename
            ]);

            DB::commit();
            return [
                'status' => true,
                'message' => 'Data Dokumen berhasil disimpan'
            ];
        } catch (\Exception $e) {
            DB::rollBack();
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
