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
        Project::create(['projectname' => 'Pawtection Run', 'description' => 'A run to protect pets', 'organization' => 'Athlerun', 'year' => 'Nov 2025']);
        Project::create(['projectname' => 'Sonder in Vietnam', 'description' => 'A cultural exchange program', 'organization' => 'GDG-USLS', 'year' => 'Apr 2025']);
    }
}
