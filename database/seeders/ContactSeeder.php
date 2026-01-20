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
        //
        Contact::create([
            'name' => 'Maria Goretti',
            'subject' => 'Book Club Time',
            'email' => 'mariagoretti@icloud.com',
            'content' => 'Hello there! I wanted to ask if your book club has a specified weekly meeting time. 
                My schedule is usually quite busy, so it would be good to know if I can fit it in.',
        ]);
    }
}
