<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$events = [
            [
                'title' => 'Sports Day',
                'description' => 'Annual sports day event for students, promoting physical fitness and teamwork, reflecting the vibrant sports culture of Zimbabwe.',
                'date' => '2024-06-15',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Science Fair',
                'description' => 'Students showcase science projects, fostering innovation and scientific curiosity, contributing to the development of Zimbabwe\'s future scientists.',
                'date' => '2024-07-20',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Parents-Teachers Meeting',
                'description' => 'Meeting to discuss student progress, strengthening the partnership between parents and educators, vital for the advancement of education in Zimbabwe.',
                'date' => '2024-08-10',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cultural Day',
                'description' => 'Celebration of different cultures, showcasing Zimbabwe\'s rich cultural heritage, fostering unity and appreciation among students.',
                'date' => '2024-09-05',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Educational Trip',
                'description' => 'Field trip to a local museum, providing students with hands-on learning experiences, enriching their understanding of Zimbabwe\'s history and culture.',
                'date' => '2024-10-18',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more events as needed
        ];

        // Insert data into the events table
        DB::table('events')->insert($events);
        //
    }
}
