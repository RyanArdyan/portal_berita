<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'comment_id';
    // agar bisa mengisi data secara massal
    protected $guarded = [];

    // relasi
    // belongs to / satu komentar milik 1 artikel
    public function artikel()
    {
        // argumen pertama adalah berelasi dengan models/artikel
        // argumen kedua adalah foreign key di table comments
        // argumen ketiga adalah primary key di table articles
        return $this->belongsTo(Artikel::class, 'article_id', 'article_id');
    }

    // belongs to / satu komentar milik 1 user
    public function user()
    {
        // argumen pertama adalah berelasi dengan models/user
        // argumen kedua adalah foreign key di table comments
        // argumen ketiga adalah primary key di table user
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
