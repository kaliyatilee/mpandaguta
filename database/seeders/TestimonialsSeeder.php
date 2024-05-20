<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$testimonials = [
            [
                'fullname' => 'John Doe',
                'message' => 'I am proud to be a student at Mpandaguta Primary. The teachers are supportive, and I enjoy learning new things every day.',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Jane Smith',
                'message' => 'Attending Mpandaguta Primary has been a wonderful experience. The school environment is conducive to learning, and I have made many friends.',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'David Ndlovu',
                'message' => 'Mpandaguta Primary provides excellent opportunities for students to excel academically and participate in extracurricular activities.',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Mary Chikomo',
                'message' => 'I appreciate the dedication of the teachers at Mpandaguta Primary. They go above and beyond to ensure that every student receives quality education.',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Tinashe Moyo',
                'message' => 'Mpandaguta Primary has helped me grow both academically and personally. I am grateful for the opportunities provided by this school.',
                'bln_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more testimonials as needed
        ];

        // Insert data into the testimonials table
        DB::table('testimonials')->insert($testimonials);
        //
    }
}
