<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Laptop',
            'description' => 'Laptop berkualitas tinggi',
            'price' => 15000000,
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Kaos',
            'description' => 'Kaos nyaman dan stylish',
            'price' => 100000,
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Roti',
            'description' => 'Roti segar dan lezat',
            'price' => 20000,
            'category_id' => 3,
        ]);
    }
}