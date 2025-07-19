<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Freelance;

class MyFreelanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Freelance::create([
            'title' => 'Elixir Honey - E-commerce Platform',
            'description' => 'A comprehensive e-commerce website for selling honey products online. The platform features a modern, responsive design with secure payment processing, admin panel, and automated email notifications.',
            'client' => 'Elixir Honey',
            'website_url' => 'https://www.elixir-honey.com/',
            'github_url' => null,
            'technologies' => [
                'React.js',
                'Vite',
                'Tailwind CSS',
                'Node.js',
                'Express.js',
                'MongoDB',
                'Flouci Payment',
                'Cloudflare',
                'Render'
            ],
            'features' => [
                'Responsive e-commerce frontend',
                'Secure online payment integration',
                'Admin panel for product management',
                'Automated email notifications',
                'Domain management with Cloudflare',
                'MongoDB database integration',
                'Modern UI/UX design'
            ],
            'status' => 'completed',
            'start_date' => '2024-01-01',
            'end_date' => '2024-06-01',
            'image_url' => 'https://res.cloudinary.com/dgf047dcg/image/upload/v1744495812/elixir-honey_ecommerce.jpg'
        ]);

        Freelance::create([
            'title' => 'Shanon Technologies - DSP Solutions',
            'description' => 'An embedded DSP solution platform revolutionizing applications in Industry 4.0, Robotics, Biomedical, and Audio processing. The platform provides cutting-edge digital signal processing capabilities for various industrial applications.',
            'client' => 'Shanon Technologies',
            'website_url' => 'https://shanon-technologies.onrender.com/',
            'github_url' => null,
            'technologies' => [
                'React.js',
                'Vite',
                'Tailwind CSS',
                'Node.js',
                'Express.js',
                'MongoDB',
                'DSP Algorithms',
                'Real-time Processing',
                'Render'
            ],
            'features' => [
                'Industry 4.0 applications',
                'Robotics integration',
                'Biomedical signal processing',
                'Audio processing capabilities',
                'Real-time DSP algorithms',
                'Responsive web interface',
                'Scalable architecture'
            ],
            'status' => 'ongoing',
            'start_date' => '2024-07-01',
            'end_date' => null,
            'image_url' => 'https://res.cloudinary.com/dgf047dcg/image/upload/v1744495812/shanon-technologies_dsp.jpg'
        ]);
    }
} 