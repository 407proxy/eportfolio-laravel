<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Contact::create([
        'email'    => 'labistrejoshdane@email.com',
        'github'   => 'https://github.com/407proxy',
        'linkedin' => 'https://linkedin.com/in/yourname',
        'behance'  => 'https://behance.net/yourname',
    ]);
}
}
