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


        ];
    }
}
