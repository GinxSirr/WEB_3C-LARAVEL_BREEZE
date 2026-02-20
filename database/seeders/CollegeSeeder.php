<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        College::create([
            'col_name' => 'College of Engineering',
            'dean_name' => 'Dr. Robert Martinez',
            'no_students' => 1250,
        ]);

        College::create([
            'col_name' => 'College of Arts and Sciences',
            'dean_name' => 'Dr. Sarah Thompson',
            'no_students' => 2100,
        ]);

        College::create([
            'col_name' => 'College of Business Administration',
            'dean_name' => 'Dr. Michael Chen',
            'no_students' => 1800,
        ]);

        College::create([
            'col_name' => 'College of Education',
            'dean_name' => 'Dr. Jennifer Williams',
            'no_students' => 950,
        ]);

        College::create([
            'col_name' => 'College of Information Technology',
            'dean_name' => 'Dr. David Anderson',
            'no_students' => 1650,
        ]);

        College::create([
            'col_name' => 'College of Health Sciences',
            'dean_name' => 'Dr. Emily Rodriguez',
            'no_students' => 1400,
        ]);

        College::create([
            'col_name' => 'College of Architecture',
            'dean_name' => 'Dr. James Peterson',
            'no_students' => 780,
        ]);

        College::create([
            'col_name' => 'College of Agriculture',
            'dean_name' => 'Dr. Maria Santos',
            'no_students' => 890,
        ]);

        College::create([
            'col_name' => 'College of Law',
            'dean_name' => 'Dr. Thomas Baker',
            'no_students' => 650,
        ]);

        College::create([
            'col_name' => 'College of Fine Arts',
            'dean_name' => 'Dr. Lisa Morgan',
            'no_students' => 720,
        ]);
    }
}
