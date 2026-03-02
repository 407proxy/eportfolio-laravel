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
        Contact::create(['platform' => 'GitHub', 'contact' => 'github.com/407proxy']);
        Contact::create(['platform' => 'Email',  'contact' => 'labistrejoshdane@email.com']);
    }
}
