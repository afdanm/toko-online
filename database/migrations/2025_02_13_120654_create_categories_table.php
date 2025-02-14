

<?php
// filepath: /c:/laragon/www/toko-online/database/migrations/xxxx_xx_xx_xxxxxx_create_categories_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('name'); // Kolom nama kategori
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('categories'); // Menghapus tabel jika migration di-rollback
    }}
