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
            'name'      => "Hey, I'm Dane*",
            'subheader' => 'Defining how brands grow, expand, and express themselves across modern media.',
            'titles'    => ['Champion sa Statistics', 'Developer', 'Designer'],
            'image'     => 'assets/jd-logo.png',
        ]);
    }
}
