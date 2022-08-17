<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio_category;


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
        'category_id',
        'photo',
        'banner',
        'meta_title',
        'meta_description',
    ];

    public function protfolioCategory(){
        return $this->hasOne(Portfolio_category::class, 'id', 'category_id');
    }


}
