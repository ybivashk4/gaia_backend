<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = ['category', 'name', 'description', 'price', 'allergens', 'image'];
    //
}
