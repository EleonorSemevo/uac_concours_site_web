<?php

namespace Database\Seeders;

use App\Models\Partenaires;
use Illuminate\Database\Seeder;

class PartenairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partenaires::factory()->count(5)->create();
    }
}
