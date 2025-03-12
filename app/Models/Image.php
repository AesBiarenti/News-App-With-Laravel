<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        "name",
        "path"
    ]; 
    public function news(){
        return $this->belongsToMany(News::class);
    }
}
