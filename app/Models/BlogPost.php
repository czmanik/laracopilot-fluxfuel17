<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'content',
        'category', 'author', 'published', 'featured'
    ];

    protected $casts = [
        'published' => 'boolean',
        'featured' => 'boolean'
    ];
}