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
    {   $faker = Faker::create('id_ID');
        return [
            //dummy data
            'nis' => $this->faker->unique()->numerify('0200####'),
            'nama' => $this->faker->firstName." ".$faker->lastName,
            'tanggal_lahir' => $this->faker->dateTimeInInterval('1986-01-01','+ 3 years'),
            'alamat_lengkap' => $this->faker->address,

        ];
    }
}
