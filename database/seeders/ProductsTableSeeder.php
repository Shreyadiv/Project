<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Product;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *@return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Harry Potter and the Philosopher\'s stone',
            'price' => 5,
            'author' => 'J.K Rowling',
            'genre' => 'Fantasy',
            'image_path' => 'harrypotter1.jpg'
        ]);

        Product::create([
            'name' => 'Harry Potter and the Chamber of secrets',
            'price' => 5,
            'author' => 'J.K Rowling',
            'genre' => 'Fantasy',
            'image_path' => 'harrypotter2.jpg'
        ]);

        Product::create([
            'name' => 'Harry Potter and the Prisoner of Azkaban',
            'price' => 5,
            'author' => 'J.K Rowling',
            'genre' => 'Fantasy',
            'image_path' => 'harrypotter3.jpg'
        ]);

        Product::create([
            'name' => 'Harry Potter and the Goblet of Fire',
            'price' => 5,
            'author' => 'J.K Rowling',
            'genre' => 'Fantasy',
            'image_path' => 'harry4.jpg'
        ]);

        Product::create([
            'name' => 'Harry Potter and the Order of the Phoenix',
            'price' => 5,
            'author' => 'J.K Rowling',
            'genre' => 'Fantasy',
            'image_path' => 'harry5.jpg'
        ]);

        Product::create([
            'name' => 'Harry Potter and the Half-Blood Prince',
            'price' => 5,
            'author' => 'J.K Rowling',
            'genre' => 'Fantasy',
            'image_path' => 'harry6.jpg'
        ]);

        Product::create([
            'name' => 'Harry Potter and the Deathly Hallows',
            'price' => 5,
            'author' => 'J.K Rowling',
            'genre' => 'Fantasy',
            'image_path' => 'harry7.jpg'
            
        ]);

        Product::create([
            'name' => 'Divergent',
            'price' => 4.5,
            'author' => 'Veronica Roth',
            'genre' => 'Adventure/Science fiction',
            'image_path' => 'divergent.jpg'
            
        ]);

        Product::create([
            'name' => 'Insurgent',
            'price' => 4.5,
            'author' => 'Veronica Roth',
            'genre' => 'Adventure/Science fiction',
            'image_path' => 'insurgent.jpg'
            
        ]);

        Product::create([
            'name' => 'Allegiant',
            'price' => 4.5,
            'author' => 'Veronica Roth',
            'genre' => 'Adventure/Science fiction',
            'image_path' => 'allegiant.jpg'
            
        ]);

        Product::create([
            'name' => 'Four: A Divergent Collection',
            'price' => 4.5,
            'author' => 'Veronica Roth',
            'genre' => 'Adventure/Science fiction',
            'image_path' => 'four.jpg'
            
        ]);

        Product::create([
            'name' => 'Me Before You',
            'price' => 6,
            'author' => 'Jojo Moyes',
            'genre' => 'Romance/Young Adult Novel',
            'image_path' => 'me.jpg'
            
        ]);

        Product::create([
            'name' => 'The Knight in Shining Suit',
            'price' => 3.5,
            'author' => 'Jerilee Kaye',
            'genre' => 'Romance/Young Adult Novel',
            'image_path' => 'knight.jpg'
            
        ]);

        Product::create([
            'name' => 'Intertwined',
            'price' => 3.5,
            'author' => 'Jerilee Kaye',
            'genre' => 'Romance/Young Adult Novel',
            'image_path' => 'int.jpg'
            
        ]);

        Product::create([
            'name' => 'All the Wrong Reasons',
            'price' => 3.5,
            'author' => 'Jerilee Kaye',
            'genre' => 'Romance/Young Adult Novel',
            'image_path' => 'all.jpg'
            
        ]);

        
    }
}
