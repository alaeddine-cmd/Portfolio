<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('educations')->insert([
            "degree_name" => "Professional Master's degree",
            "location" => "ISIMA, Mahdia Higher Institute of Computer Science – Tunisia",
            "Specialization" => "Specialization in Networking",
            "start_year" => "2021",
            "end_year" => "2023",
        ]);
        DB::table('educations')->insert([
            "degree_name" => "Technician Degree in Electronics & Communication",
            "location" => "ISIMM, Higher Institute of Computer Science and Mathematics of Monastir – Tunisia",
            "Specialization" => "Specialization in Electronics and Communication Technology",
            "start_year" => "2018",
            "end_year" => "2021",
        ]);
        DB::table('educations')->insert([
            "degree_name" => "High School Diploma (Baccalaureate)",
            "location" => "Farhat Hached Rades – Tunisia",
            "Specialization" => "Specialization in Computer science",
            "start_year" => "2018",
            "end_year" => "",
        ]);
    }
}
