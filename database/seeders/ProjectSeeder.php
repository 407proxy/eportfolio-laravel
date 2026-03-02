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
        Project::create(['projectname' => 'Pawtection Run', 'organization' => 'Athlerun', 'year' => 2025]);
        Project::create(['projectname' => 'Sonder in Vietnam', 'organization' => 'GDG-USLS', 'year' => 2025]);
    }
}
