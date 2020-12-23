<?php

namespace Database\Seeders;

use App\Models\Souscris;
use Illuminate\Database\Seeder;

class SouscrisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Souscris::factory()->count(5)->create();
    }
}
