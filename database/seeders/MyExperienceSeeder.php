<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MyExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('experiences')->insert([
            'role' => 'IoT Developer',
            'company' => 'SHANON TECHNOLOGIES',
            'location' => 'Toulouse, France',
            'start_date' => '2023-09-01 00:00:00',
            'end_date' => '2025-03-01 00:00:00',
            'tasks' => json_encode([
                'Creation of APIs backend using Node.js, integrating MongoDB, and adapting current signal monitoring via Wi-Fi when using Arduino R4.',
                'Creation of desktop application to generate code from C++ and .h library, instantly converting it to a python library.',
                "Design and Development of User-Friendly Dashboards for Data Visualization."
            ])
        ]);
        DB::table('experiences')->insert([
            'role' => "Studying and implementing the integration of IoT devices with AWS.",
            'company' => 'AllianceAPI',
            "location" => "San Francisco, USA",
            'start_date' => '2023-01-01 00:00:00',
            'end_date' => '2023-06-01 00:00:00',
            'tasks' => json_encode([
                "Development of an emulation application for local IoT devices, including monitoring, execution, self-healing, and exception-triggered alerting processes.",
                "Design and development of configurable IoT platforms tailored to diverse clients and their specific needs, spanning cloud management to edge devices.",
                "Leveraging AWS Cloud services and MongoDB to build robust, scalable solutions.",
                "Creation of React-based application dashboards that retrieve and visualize real-time IoT device data from MongoDB.",
                "Design of an API to compute and deliver KPI metrics using custom formulas, emulating an e-commerce environment."
            ])
        ]);

        DB::table('experiences')->insert([
            'role' => 'Study and implementation of an intelligent hydroponic farming system.',
            'company' => 'Association S.E.N.T',
            'location' => 'SAINTE CLOTILDE, France',
            'start_date' => '2021-02-01 00:00:00',
            'end_date' => '2021-07-01 00:00:00',
            'tasks' => json_encode([
                'Development of firmware for an electronic control unit.',
                'Sensor modeling and configuration settings.',
                "Data communication between the control unit and a remote server.",
                "Configuration and deployment of the server for data reception and processing.",
                "Development of the data processing interface (Website).",
                "Creation of an application to configure the control unit and access real-time data."
            ])
        ]);
    }
}
