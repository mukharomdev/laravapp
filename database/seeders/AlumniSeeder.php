<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Alumni::factory(210)->create();
    }
}
