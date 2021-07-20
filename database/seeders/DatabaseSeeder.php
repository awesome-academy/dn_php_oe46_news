<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\postSeeder;
use Database\Seeders\categoriesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            categoriesSeeder::class,
            userSeeder::class,
            postSeeder::class
        ]);
    }
}
