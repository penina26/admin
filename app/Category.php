<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name'];

    public function posts()
    {
    	return $this->hasMany('App\Post');
    }

    public function nutrition()
    {
    	return $this->hasMany('App\Nutrition');
    }
}
