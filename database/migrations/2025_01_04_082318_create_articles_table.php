<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            // buat tipe data big integer yang auto increment dan primary key atau kunci utama
            $table->bigIncrements('article_id');
            // foreign key atau kunci asing, relasinya adalah 1 artikel milik 1 kategori dan 1 kategori memiliki banyak artikel
            // buat foreign key
            // foreign artinya asing, constrained artinya dibatasi
            $table->foreignId('category_id')->constrained('categories')
                // referensi column category_id milik table kategori
                ->references('category_id')
                ->onUpdate('cascade')
                // ketika di hapus mengalir, jadi jika aku hapus kategori maka semua artikel terkait nya juga akan terhapus
                ->onDelete('cascade');
            $table->string('title')->unique();
            $table->text('content');
            $table->string('image');
            // ->unsignedInteger('views'): Di dalam lemari, kita membuat sekat khusus untuk menyimpan angka yang bernama 'views'. Angka ini adalah jenis unsigned integer, yaitu angka positif atau nol.
            $table->unsignedInteger('views')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
