<?php

namespace Database\Seeders;

use App\Models\Opportunite;
use Illuminate\Database\Seeder;

class OpportuniteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Opportunite::factory()->count(5)->create();
    }
}
