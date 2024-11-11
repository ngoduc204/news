<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Content;

class News extends Model
{
    use HasFactory;

    
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categories'); // 'id_categorie' là khóa ngoại trong bảng 'news'
    }

    protected $fillable = [
        'title',
        'img',
        'content',
        'id_categories',
        'content2',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}
