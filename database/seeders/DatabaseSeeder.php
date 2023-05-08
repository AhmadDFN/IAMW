<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Data User
        DB::table('users')->insert([
            "username" => "admin",
            "email" => "admin@gmail.com",
            "email_verified_at" => date("Y-m-d h:i:s"),
            "password" => Hash::make("admin"),
            "nama" => "Administrator",
            "role" => "SuperAdmin",
            "Status" => 1,
            "created_at" => date("Y-m-d h:i:s"),
            "updated_at" => date("Y-m-d h:i:s")
        ]);

        DB::table('users')->insert([
            "username" => "fian",
            "email" => "fian@gmail.com",
            "email_verified_at" => date("Y-m-d h:i:s"),
            "password" => Hash::make("fian123"),
            "nama" => "Allifian",
            "role" => "Mahasiswa",
            "Status" => 1,
            "created_at" => date("Y-m-d h:i:s"),
            "updated_at" => date("Y-m-d h:i:s")
        ]);

        // Data Mahasiswa

        DB::table('tb_mahasiswa')->insert([
            "NIM" => "2022320064",
            "mhs_nm" => "Allifian Witama Putra",
            "mhs_email" => "fian@gmail.com",
            "mhs_jk" => 1,
            "mhs_notelp" => "0895215354845",
            "mhs_th_masuk" => "2022",
            "mhs_th_lulus" => "2023",
            "mhs_kota_lahir" => "Ngawi",
            "mhs_tanggal_lahir" => date("2002-11-27"),
            "mhs_alamat" => "Kedunggalar Ngawi",
            "mhs_kota" => "Madiun",
            "mhs_tb" => "178",
            "mhs_kd_jurusan" => "IK",
            "mhs_id_user" => 2,
            "created_at" => date("Y-m-d h:i:s"),
            "updated_at" => date("Y-m-d h:i:s")
        ]);

        // Data Jurusan
        DB::table('tb_jurusan')->insert([
            "jurusan_kd" => "IK",
            "jurusan_nm" => "Inforkom",
            "created_at" => date("Y-m-d h:i:s"),
            "updated_at" => date("Y-m-d h:i:s")
        ]);

        DB::table('tb_berkas')->insert([
            "berkas_kd" => Str::random(10),
            "berkas_skck" => "None",
            "berkas_kk" => "None",
            "berkas_ijazah" => "None",
            "NIM" => "2022320064",
            "created_at" => date("Y-m-d h:i:s"),
            "updated_at" => date("Y-m-d h:i:s")
        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
