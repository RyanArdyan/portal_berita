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
        Schema::create('comments', function (Blueprint $table) {
            // buat tipe data big integer yang auto increment dan primary key atau kunci utama
            $table->bigIncrements('comment_id');
            // foreign key atau kunci asing, relasinya adalah 1 komentar milik 1 artikel dan 1 artikel memiliki banyak komentar
            // buat foreign key
            // foreign artinya asing, constrained artinya dibatasi
            $table->foreignId('article_id')->constrained('articles')
                // referensi column article_id milik table artikel
                ->references('article_id')
                ->onUpdate('cascade')
                // ketika di hapus mengalir, jadi jika aku hapus artikel maka semua komentar terkait nya juga akan terhapus
                ->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')
                ->references('user_id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->text('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
