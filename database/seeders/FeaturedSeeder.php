<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Featured;

class FeaturedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Featured::create([
            'title' => '25% OFF - C.S. Lewis\'s The Discarded Image!',
            'image' => 'discardedImage.png',
            'imageAlt' => 'The cover of CS Lewis\'s book The Discarded Image.',
            'description' => 'If you\'re looking to get an introduction to the medieval mind, but 
                don\'t know how to dip your toes into literature, then
                The Discarded Image is what you\'ve been waiting for! This book goes over
                the religion, philosophy, science, and aesthetics of the Middle Ages, 
                and will give any reader the insight they need to the medieval worldview.',
            'date' => '2025-12-31',
        ]);
        Featured::create([
            'title' => 'Don Quixote Bundle - LIMITED TIME OFFER!',
            'image' => 'donQuixoteDeal.png',
            'imageAlt' => 'A picture of Don Quixote and Sancho Panza.',
            'description' => 'Get the Don Quixote Hardcover Bundle for $55.99!
                Includes Don Quixote Part 1 and Part 2 - Recreated Edition 
                with reprints of historic illustrations!',
            'date' => '2025-12-31',
        ]);
    }
}
