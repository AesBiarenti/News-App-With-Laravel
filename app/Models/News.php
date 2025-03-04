<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        'content',
        'image',
        'category_id',
        'user_id',
        'is_active',
    ];
}
