<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'PHP',               'description' => 'Server-side scripting language used for web development and building dynamic applications.',         'logo' => 'logos/php.png'],
            ['name' => 'Laravel',           'description' => 'A PHP framework for building modern web applications with elegant syntax and powerful tools.',        'logo' => 'logos/laravel.png'],
            ['name' => 'MySQL',             'description' => 'A relational database management system used to store and manage structured data.',                   'logo' => 'logos/mysql.png'],
            ['name' => 'React',             'description' => 'A JavaScript library for building fast, interactive user interfaces and single-page applications.',   'logo' => 'logos/react.png'],
            ['name' => 'Unity',             'description' => 'A cross-platform game engine used for developing 2D and 3D games and interactive experiences.',         'logo' => 'logos/unity.png'],
            ['name' => 'Tailwind',          'description' => 'A utility-first CSS framework for rapidly building custom user interfaces with a responsive design.',  'logo' => 'logos/tailwind.png'],
            ['name' => 'Figma',             'description' => 'A collaborative design tool used for UI/UX design, prototyping, and design systems.',                'logo' => 'logos/figma.png'],
            ['name' => 'Blender',           'description' => 'A 3D creation suite used for modeling, animation, rendering, and visual effects.',                   'logo' => 'logos/blender.png'],
            ['name' => 'Adobe Photoshop',   'description' => 'An industry-standard image editing tool used for photo manipulation and graphic design.',            'logo' => 'logos/photoshop.png'],
            ['name' => 'TouchDesigner',     'description' => 'A node-based visual programming environment used for real-time interactive multimedia content.',      'logo' => 'logos/touchdesigner.png'],
            ['name' => 'DaVinci Resolve',   'description' => 'A professional video editing and color grading software used for post-production workflows.',        'logo' => 'logos/davinci.png'],
            ['name' => 'Figma Draw',      'description' => 'A vector graphics editor and design tool used for creating illustrations, icons, and SVG files.',    'logo' => 'logos/figma-draw.png'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}