<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShopList extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'categories_id',
        'author_id',
        'status',
        'manufacture_id',
        'price',
        'slug',
        'title',
        'description',
        'short_text',
        'is_published'
    ];
    //
}
