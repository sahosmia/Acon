<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'heading',
        'content',
        'button1_text',
        'button1_url',
        'button2_text',
        'button2_url',
    ];
}
