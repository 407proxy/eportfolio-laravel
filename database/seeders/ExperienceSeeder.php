<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'experience' => 'Chief Information Officer',
            'eventname'  => 'Google Developer Groups On Campus AY 24-25',
            'placement'  => 'Executive Department',
            'monthyear'  => '2024',
        ]);

        Experience::create([
            'experience' => 'Creative Director',
            'eventname'  => 'Google Developer Groups On Campus AY 25-26',
            'placement'  => 'Executive Department',
            'monthyear'  => '2025',
        ]);

        Experience::create([
            'experience' => 'Department Co-Head',
            'eventname'  => 'Computer Science Society USLS',
            'placement'  => 'Department of Public Relations',
            'monthyear'  => '2025',
        ]);

        Experience::create([
            'experience' => 'Volunteer',
            'eventname'  => 'Google Developer Groups Bacolod',
            'placement'  => 'Creatives Department',
            'monthyear'  => '2025',
        ]);

        Experience::create([
            'experience' => 'Volunteer',
            'eventname'  => 'DEVCON Bacolod',
            'placement'  => 'Creatives',
            'monthyear'  => '2024',
        ]);

        Experience::create([
            'experience' => 'Layout Artist',
            'eventname'  => 'Tigris Publication',
            'placement'  => 'Artem',
            'monthyear'  => '2023',
        ]);
    }
}
