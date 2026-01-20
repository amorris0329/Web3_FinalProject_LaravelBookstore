<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'The Divine Comedy',
            'author' => 'Dante Aligheri',
            'publishYear' => 1321,
            'price' => 39.99,
            'genre' => 'Epic Poetry',
            'stock' => 50,
            'image' => 'divineComedy.png',
            'imageAlt' => 'The Divine Comedy Book Cover Image.',
        ]);
        Book::create([
            'title' => 'The Prince',
            'author' => 'Niccolo Machiavelli',
            'publishYear' => 1532,
            'price' => 9.99,
            'genre' => 'Philosophy',
            'stock' => 75,
            'image' => 'thePrince.png',
            'imageAlt' => 'The Prince Book Cover Image.',
        ]);
        Book::create([
            'title' => 'Don Quixote: Part 1 - Recreated Edition',
            'author' => 'Miguel de Cervantes',
            'publishYear' => 1605,
            'price' => 45.99,
            'genre' => 'Novel Fiction',
            'stock' => 50,
            'image' => 'donQuixoteP1.png',
            'imageAlt' => 'Don Quixote Part 1 Book Cover Image.',
        ]);
        Book::create([
            'title' => 'Don Quixote: Part 2 - Recreated Edition',
            'author' => 'Miguel de Cervantes',
            'publishYear' => 1615,
            'price' => 35.99,
            'genre' => 'Novel Fiction',
            'stock' => 50,
            'image' => 'donQuixoteP2.png',
            'imageAlt' => 'Don Quixote Part 2 Book Cover Image.',
        ]);
        Book::create([
            'title' => 'The Complete Works of William Shakespeare',
            'author' => 'Willaim Shakespeare',
            'publishYear' => 1612,
            'price' => 40.99,
            'genre' => 'Dramatic Play',
            'stock' => 50,
            'image' => 'completeShakespeare.png',
            'imageAlt' => 'Complete Shakespeare Book Cover Image.',
        ]);
        Book::create([
            'title' => 'The Discarded Image',
            'author' => 'C. S. Lewis',
            'publishYear' => 1964,
            'price' => 29.99,
            'genre' => 'Philosophy',
            'stock' => 45,
            'image' => 'discardedImage.png',
            'imageAlt' => 'The Discarded Image Book Cover Image.',
        ]);
    }
}
