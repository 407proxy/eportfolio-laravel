<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'projectname'  => 'Pawtection Run',
            'description'  => 'A charity fun run advocating for animal welfare, featuring custom race bibs, finisher medals, and singlets designed for dog lovers and their furry companions.',
            'organization' => 'Athlerun',
            'year'         => 'Nov 2025',
        ]);

        Project::create([
            'projectname'  => 'Sonder in Vietnam',
            'description'  => 'An international mixer and cultural exchange program connecting students across borders, fostering global perspectives and cross-cultural collaboration.',
            'organization' => 'Google Developer Groups USLS',
            'year'         => 'Sep 2025',
        ]);

        Project::create([
            'projectname'  => 'Bantala',
            'description'  => 'A disaster awareness and response tool developed for Mt. Kanlaon eruption victims, providing real-time updates, relief information, and community coordination.',
            'organization' => 'Google Developer Groups USLS',
            'year'         => 'Oct 2025',
        ]);

        Project::create([
            'projectname'  => 'eSkolar',
            'description'  => 'A centralized scholarship platform streamlining the application, tracking, and management of scholarships for students and administrators alike.',
            'organization' => 'Byte Me',
            'year'         => 'Jan 2026',
        ]);
    }
}
