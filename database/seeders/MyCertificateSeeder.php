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
                'pdf_url' => 'https://raw.githubusercontent.com/alaeddine-cmd/Portfolio/91f63dd08ae43efcf9b03a1bcbff4f5e6d6ddfbe/public/assets/certificate1.pdf',
                'verify_url' => 'https://www.coursera.org/account/accomplishments/certificate/JLLWHVG5X9WJ',
                'issue_date' => '2025-04-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Secure Coding in Laravel',
                'platform' => 'Coursera',
                'institution' => 'INFOSEC',
                'pdf_url' => 'https://raw.githubusercontent.com/alaeddine-cmd/Portfolio/91f63dd08ae43efcf9b03a1bcbff4f5e6d6ddfbe/public/assets/certificate2.pdf',
                'verify_url' => 'https://www.coursera.org/account/accomplishments/specialization/KSB3NVHSXST3',
                'issue_date' => '2025-04-12',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
