<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'photo',
        'designation_id',
        'facebook',
        'twitter',
        'linkedin',
        'google_plus',
        'youtube',
        'instagram',
        'flickr',
    ];
}
