<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'preview',
        'description',
        'category',
        'price',
        'image',
    ];
}
