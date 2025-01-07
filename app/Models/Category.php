<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    // agar bisa mengisi data secara massal
    protected $guarded = [];

    // 1 kategori punya banyak artikel
    public function artikel()
    {
        // kembalikkan class Kategori memiliki banyak artikel
        return $this->hasMany(Artikel::class);
    }
}
