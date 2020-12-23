<?php

namespace Database\Seeders;

use App\Models\Recruteur;
use Illuminate\Database\Seeder;

class RecruteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recruteur::factory()->count(5)->create();
    }
}
