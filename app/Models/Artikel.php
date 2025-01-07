<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKey = 'article_id';
    // agar bisa mengisi data secara massal
    protected $guar1ed = [];

    // relasi
    // belongs to / satu artikel milik 1 kategori
    public function kategori()
    {
        // argumen pertama adalah berelasi dengan models/kategori
        // argumen kedua adalah foreign key di table artikel
        // argumen ketiga adalah primary key di table categories
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    // 1 artikel punya banyak komentar
    public function comments()
    {
        // kembalikkan class artikel memiliki banyak komentar
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
