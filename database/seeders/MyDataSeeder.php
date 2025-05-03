<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('developper')->insert([
            'firstName' => 'Ala Eddine',
            'lastName' => 'Lusakula',
            'socialLinks' => json_encode([
                'Github' => ['url' => 'https://github.com/alaeddine-cmd', 'icon' => 'fab fa-github'],
                'LinkedIn' => ['url' => 'https://www.linkedin.com/in/alaeddine-lusakula/', 'icon' => 'fab fa-linkedin'],
                'Facebook' => ['url' => 'https://www.facebook.com/alaeddine.lusakula', 'icon' => 'fab fa-facebook'],
                'Youtube' => ['url' => 'https://www.youtube.com/@ala4043', 'icon' => 'fab fa-youtube']
            ]),
            'role' => 'Full stack Developer',
            'skills' => json_encode(['Laravel', 'PHP', 'MySQL', 'Node.js', 'MongoDB', 'JavaScript']),
            'description' => json_encode([
                "Hello! I'm Ala Eddine, a passionate web developer with experience in both frontend and backend technologies. I specialize in creating modern web applications and building scalable backend systems. I am a quick learner and always excited to explore new technologies.",
                "When I'm not coding, you can find me learning about new tech, reading books, or working on side projects. My goal is to continue improving my skills and contribute to meaningful projects."
            ]),
            'image_path' => 'profile.jpg'
        ]);
    }
}
