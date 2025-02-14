<?php
// filepath: /c:/laragon/www/toko-online/database/seeders/CategorySeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Elektronik']);
        Category::create(['name' => 'Pakaian']);
        Category::create(['name' => 'Makanan']);
        // Tambahkan kategori lain sesuai kebutuhan
    }
}