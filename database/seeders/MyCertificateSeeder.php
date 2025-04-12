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
                'pdf_url' => 'https://www.dropbox.com/scl/fi/yri0o2an808i8cz2pvn67/certificate1.pdf?rlkey=2sd26fcuci4blcypo0we1578m&st=kb7scmbc&dl=0',
                'verify_url' => 'https://www.coursera.org/account/accomplishments/certificate/JLLWHVG5X9WJ',
                'issue_date' => '2025-04-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Secure Coding in Laravel',
                'platform' => 'Coursera',
                'institution' => 'INFOSEC',
                'pdf_url' => 'https://www.dropbox.com/scl/fi/86d1l09kwu2yx55b1bf69/certificate2.pdf?rlkey=kyhural0m2tokz89a01eosnt0&st=mjc0rsdt&dl=0',
                'verify_url' => 'https://www.coursera.org/account/accomplishments/specialization/KSB3NVHSXST3',
                'issue_date' => '2025-04-12',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
