<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Project::factory(5)->create();
        // DB::table('projects')->insert([
        //     ['name' => 'US-EMBASSY'],
        //     ['name' => 'LESTARI'],
        //     ['name' => 'SOS'],
        //     ['name' => 'LUSH'],
        //     ['name' => 'TFCA'],
        //     ['name' => 'ARCUS'],
        //     ['name' => 'LUSH INDO'],
        //     ['name' => 'BPC'],
        // ]);
    }
}
