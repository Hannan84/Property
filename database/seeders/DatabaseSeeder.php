<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         \App\Models\Location::factory(10)->create();
        \App\Models\Property::factory(40)->create();
        \App\Models\Media::factory(60)->create();


    }
}
