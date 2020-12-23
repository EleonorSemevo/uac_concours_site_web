<?php

namespace Database\Seeders;

use App\Astuce_truc;
use Illuminate\Database\Seeder;

class Astuce_trucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Astuce_truc::factory()->count(5)->create();
    }
}
