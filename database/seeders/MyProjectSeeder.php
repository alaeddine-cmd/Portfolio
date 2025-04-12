<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("projects")->insert([
            'title' => 'MongoDB Configuration and Backend Development for a waste management system',
            'youtube_id' => 'EDwpPUlT-2o', 
        ]);
        DB::table("projects")->insert([
            'title' => 'Gardening with Smart Hydroponics IOT System',
            'youtube_id' => 'y6cW3pG-zwU', 
        ]);
        DB::table("projects")->insert([
            'title' => 'Proteus Simulation of Smart House IoT App',
            'youtube_id' => 'xmoIQnCkXuM', 
        ]);
    }
}
