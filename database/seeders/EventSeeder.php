<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Event::create([
            'title' => 'Bake Sale - National Breast Cancer Foundation',
            'date' => '2025-11-10',
            'description' => 'We are hosting a bake sale for the National Breast Cancer Foundation on November 10th. 
                The event will be going from 1:00 PM to 5:00 PM, so please stop by to support a good 
                cause! 
                If you\'d like to sign up to contribute your own baked goods, please send us a message 
                though our Contact Us page.',
            'image' => 'bakeSalePic.png',
            'imageAlt' => 'The logo and name of the National Breast Cancer Foundation.',
        ]);
        Event::create([
            'title' => 'Book Club - The Divine Comedy',
            'date' => '2025-12-17',
            'image' => 'bookClub.png',
            'imageAlt' => 'A group of people gathered together for a book club meeting.',
            'description' => 'This week\'s book club will be taking place on Wednesday, December 17th.
                There, we will continue reading through the Divine Comedy!
                Our reading for this week is Canto 27 of Paradiso. We hope to see you there!', 
        ]);
    }
}
