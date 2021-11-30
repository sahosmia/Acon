<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'banner',
        'title',
        'slug',
        'content',
        'short_content',
        'category_id',
        'comment',
        'mata_title',
        'mata_description',
        'added_by',
        'total_view'
    ];
}
