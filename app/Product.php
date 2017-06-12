<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'menu_id',
        'name',
        'description',
        'images',
        'star'
    ];
}
