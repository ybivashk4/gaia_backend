<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shop';
    protected $fillable = ['category', 'name', 'description', 'price', 'image'];


    //
}
