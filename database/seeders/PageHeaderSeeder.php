<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageHeader;

class PageHeaderSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'page'           => 'home',
                'header'         => 'Home',
                'subheader'      => null,
                'updated_date'   => null,
                'cta_header'     => null,
                'cta_subheader'  => null,
            ],
            [
                'page'           => 'projects',
                'header'         => 'Projects',
                'subheader'      => 'Learn all about my recent selected projects, collaborating with regional, national, and international brands across different fields.',
                'updated_date'   => 'March 9, 2026',
                'cta_header'     => 'Behance Portfolio',
                'cta_subheader'  => 'Visit my Behance portfolio for in-depth case studies of each project.',
            ],
            [
                'page'           => 'experience',
                'header'         => 'Experience',
                'subheader'      => 'A timeline of events, competitions, and programs I have participated in across design, development, and community-driven initiatives.',
                'updated_date'   => 'March 9, 2026',
                'cta_header'     => 'LinkedIn Profile',
                'cta_subheader'  => 'Visit my LinkedIn profile for a full list of my previous experiences.',
            ],
            [
                'page'           => 'skills',
                'header'         => 'Skills',
                'subheader'      => 'A curated set of tools and technologies I use to design and build digital experiences, from interfaces to interactive systems.',
                'updated_date'   => 'March 9, 2026',
                'cta_header'     => 'Dev & Design',
                'cta_subheader'  => 'My work spans both development and design — bridging clean code with thoughtful visual execution.',
            ],
            [
                'page'           => 'contact',
                'header'         => 'Contact',
                'subheader'      => "Got a project in mind? Let's talk.",
                'updated_date'   => null,
                'cta_header'     => null,
                'cta_subheader'  => null,
            ],
        ];

        foreach ($pages as $data) {
            PageHeader::updateOrCreate(
                ['page' => $data['page']],
                $data
            );
        }
    }
}