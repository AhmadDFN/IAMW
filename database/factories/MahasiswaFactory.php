<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake('id_ID');
        $gender = $faker->randomElement(["Male","Female"]);
        $th_masuk = $faker->randomElement(["2020","2021","2022","2023"]);
        $kd_jurusan = $faker->randomElement(["310","320","330","340","350","360"]);

        return [
            "mhs_NIM" => $faker->unique()->$th_masuk.$kd_jurusan.numberBetween($min = 1, $max = 999),
            "mhs_nm" => $faker->name($gender),
            "mhs_email" => $faker->email(),
            "mhs_jk" => $gender=="Male" ? 1 : 2,
            "mhs_notelp" => $faker->e164PhoneNumber(),
            "mhs_th_masuk" => $th_masuk,
            "mhs_th_lulus" => $th_masuk+1,
            "mhs_kota_lahir" => $faker->city(),
            "mhs_tanggal_lahir" => $faker->dateTimeBetween($startDate = '-30 years', $endDate = '-18 years'),
            "mhs_alamat" => $faker->address(),
            "mhs_kota" => $faker->city(),
            "mhs_tb" => $faker->numberBetween($min = 150, $max = 190),
            "mhs_kd_jurusan" => $kd_jurusan,
        ];
    }
}
