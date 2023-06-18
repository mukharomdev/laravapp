<?php

namespace Database\Factories;

use App\Models\Alumni;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class AlumniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Alumni::class;
    
    // $faker = Faker::create('id_ID');

    public function definition()
    {   
        $kelas = ['IPA','IPS 1','IPS 2','IPS 3','IPS 4','IPS 5'];
        $faker = Faker::create('id_ID');
        return [
            //dummy data
            'nis' => $this->faker->unique()->numerify('0200####'),
            'nama' => $this->faker->firstName." ".$faker->lastName,
            'tanggal_lahir' => $this->faker->dateTimeInInterval('1986-01-01','+ 3 years'),
            'kelas' => $this->faker->randomElement($kelas),
            'email' => $this->faker->freeEmail,
            'No_handphone' => $this->faker->phoneNumber,
            'alamat_lengkap' => $this->faker->address,

        ];
    }
}
