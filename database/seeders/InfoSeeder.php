<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Info;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Info::create([
            'name'       => 'Josh Dane Labs',
            'university' => 'University of St. La Salle',
            'course'     => 'BS Computer Science',
            'titles'     => ['Creative Director', 'Graphic Designer', 'UI/UX', 'Data Scientist'],
        ]);
    }
}
