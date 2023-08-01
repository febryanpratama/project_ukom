<?php

namespace App\Services;

use App\Models\DetailUSer;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthService
{
    static function StoreAuth($data)
    {
        // dd($data);
        $validator = Validator::make($data, [
            'nama_lengkap' => 'required',
            'nrp' => 'required|numeric',
            'satwil' => 'required|numeric',
            'satker' => 'required|numeric',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'foto_kta' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'tipe' => 'required|in:PPK,POKJA',
            'tipe_registrasi' => 'required|in:OKUPASI,NON-OKUPASI',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'pangkat' => 'required',
            'foto_l1' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($validator->fails()) {
            return [
                'status' => false,
                'message' => $validator->errors()->first()
            ];
        }

        DB::beginTransaction();

        try {
            $user = User::create([
                'name' => $data['nama_lengkap'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $user->assignRole('User');

            if ($data['foto_kta']) {
                $file = $data['foto_kta'];
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $filename);
                $data['foto_kta'] = $filename;
            }


            if (array_key_exists('foto_l1', $data)) {
                $file = $data['foto_l1'];
                $filename1 = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $filename1);
                $data['foto_l1'] = $filename1;
            }

            DetailUSer::create([
                'user_id' => $user->id,
                'satwil_id' => $data['satwil'],
                'satker_id' => $data['satker'],
                'nama_lengkap' => $data['nama_lengkap'],
                'nrp' => $data['nrp'],
                'path_foto' => $data['foto_kta'],
                'tipe_registrasi' => $data['tipe_registrasi'],
                'tipe' => $data['tipe'],
                'tempat_lahir' => $data['tempat_lahir'],
                'tanggal_lahir' => $data['tanggal_lahir'],
                'jenis_kelamin' => $data['jenis_kelamin'],
                'pangkat' => $data['pangkat'],
                'foto_l1' => $data['foto_l1'] ?? null
            ]);

            DB::commit();

            return [
                'status' => true,
                'message' => 'Berhasil mendaftar'
            ];
        } catch (\Exception $e) {

            // dd($e->getMessage());
            DB::rollback();
            return [
                'status' => false,
                'message' => $e->getMessage()
            ];
        }
    }
}
