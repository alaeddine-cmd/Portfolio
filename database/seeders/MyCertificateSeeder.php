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
                'title' => 'Introduction to Software Engineering',
                'platform' => 'Coursera',
                'institution' => 'IBM',
                'pdf_url' => 'https://res.cloudinary.com/dgf047dcg/image/upload/v1746271938/intro_acdco0.jpg',
                'verify_url' => 'https://coursera.org/share/5dbf248c6057663a11bf1224ac9c42b6',
                'issue_date' => '2025-04-26',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Build Website with HTML, JavaScript, AngularJS, and React',
                'platform' => 'Coursera',
                'institution' => 'BOARD INFINITY',
                'pdf_url' => 'https://res.cloudinary.com/dgf047dcg/image/upload/v1746651013/Coursera_ENOIO9JEFVB6_page-0001_eql0ob.jpg',
                'verify_url' => 'https://coursera.org/share/ccab499e15d5a8955c644b9758660b5c',
                'issue_date' => '2025-05-7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Developing Back-End Apps with Node.js and Express',
                'platform' => 'Coursera',
                'institution' => 'IBM',
                'pdf_url' => 'https://res.cloudinary.com/dgf047dcg/image/upload/v1746271940/nodejs_eb4rgg.jpg',
                'verify_url' => 'https://coursera.org/share/a842d768e12504447b0beb677904cd3f',
                'issue_date' => '2025-05-3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'AI Agents and Agentic AI with Python & Generative AI',
                'platform' => 'Coursera',
                'institution' => 'VANDERBILT UNIVERSITY',
                'pdf_url' => 'https://res.cloudinary.com/dgf047dcg/image/upload/v1746271939/ai-agent_cqetvz.jpg',
                'verify_url' => 'https://coursera.org/share/3908e031cd8ec05d2d3067e485969d2c',
                'issue_date' => '2025-05-1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Python for Data Science, AI & Development',
                'platform' => 'Coursera',
                'institution' => 'IBM',
                'pdf_url' => 'https://res.cloudinary.com/dgf047dcg/image/upload/v1746366742/python_szucid.jpg',
                'verify_url' => 'https://coursera.org/share/971771199a24f592d310436069135ff2',
                'issue_date' => '2025-05-4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mastering Laravel Framework and PHP',
                'platform' => 'Coursera',
                'institution' => 'BOARD INFINITY',
                'pdf_url' => 'https://res.cloudinary.com/dgf047dcg/image/upload/v1744498334/certificate1_zuiinh.jpg',
                'verify_url' => 'https://www.coursera.org/account/accomplishments/certificate/JLLWHVG5X9WJ',
                'issue_date' => '2025-04-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Secure Coding in Laravel',
                'platform' => 'Coursera',
                'institution' => 'INFOSEC',
                'pdf_url' => 'https://res.cloudinary.com/dgf047dcg/image/upload/v1744498337/certificate2_dedrin.jpg',
                'verify_url' => 'https://www.coursera.org/account/accomplishments/specialization/KSB3NVHSXST3',
                'issue_date' => '2025-04-12',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
