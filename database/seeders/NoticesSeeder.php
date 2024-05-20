<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class NoticesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$notices = [
            [
                'title' => 'School Closure',
                'description' => 'Please be informed that Mpandaguta Primary will be closed for the public holiday on Monday, 10th May 2024.',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Parent-Teacher Meeting',
                'description' => 'There will be a parent-teacher meeting on Wednesday, 12th May 2024, from 3:00 PM to 6:00 PM. We encourage all parents to attend.',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Uniform Collection',
                'description' => 'Parents are requested to collect the new school uniform for their children from the school office between 9:00 AM and 4:00 PM on Friday, 14th May 2024.',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sports Day Postponed',
                'description' => 'Due to unforeseen circumstances, the sports day event scheduled for Saturday, 15th May 2024, has been postponed. A new date will be announced soon.',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'School Picnic',
                'description' => 'We are pleased to announce the annual school picnic on Friday, 21st May 2024. Parents are welcome to join us for a day of fun and outdoor activities.',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more notices as needed
        ];

        // Insert data into the notices table
        DB::table('notices')->insert($notices);
    }
        //
    }

