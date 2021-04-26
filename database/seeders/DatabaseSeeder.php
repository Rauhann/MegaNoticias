<?php

namespace Database\Seeders;

use App\Models\Artigo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Artigo::factory(8)->create();
    }
}
