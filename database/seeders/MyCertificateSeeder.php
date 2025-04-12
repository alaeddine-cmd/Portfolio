<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyCertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('certificates')->insert([
            [
                'title' => 'Mastering Laravel Framework and PHP',
                'platform' => 'Coursera',
                'institution' => 'BOARD INFINITY',
                'pdf_url' => 'certificate1.pdf',
                'verify_url' => 'https://www.coursera.org/account/accomplishments/certificate/JLLWHVG5X9WJ',
                'issue_date' => '2025-04-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Secure Coding in Laravel',
                'platform' => 'Coursera',
                'institution' => 'INFOSEC',
                'pdf_url' => 'certificate2.pdf',
                'verify_url' => 'https://www.coursera.org/account/accomplishments/specialization/KSB3NVHSXST3',
                'issue_date' => '2025-04-12',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
