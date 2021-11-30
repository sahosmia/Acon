<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'short_content',
        'slug',
        'content',
        'client_company',
        'start_date',
        'end_date',
        'website',
        'cost',
        'client_comment',
        'category',
        'photo',
        'banner',
        'meta_title',
        'meta_description',
    ];

}
