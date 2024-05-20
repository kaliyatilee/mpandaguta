<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SelfHelp;

class SelfHelpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SelfHelp::create([
            'name' => 'School Fees',
            'response' => 'Our school fees for the upcoming academic year are as follows: ...',
        ]);

        SelfHelp::create([
            'name' => 'Next Term Dates',
            'response' => 'The next term starts on ...',
        ]);

        SelfHelp::create([
            'name' => 'School Uniforms',
            'response' => 'Our school uniforms consist of ...',
        ]);

        SelfHelp::create([
            'name' => 'Location',
            'response' => 'Our school is located at ...',
        ]);

        SelfHelp::create([
            'name' => 'Banking Details',
            'response' => 'Our banking details for fee payments are as follows: ...',
        ]);
    }
}
