<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'category_id',
        'user_id',
        'is_active',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class); 
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}
