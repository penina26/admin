<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
	protected $fillable = ['title', 'body', 'total_screened', 'total_otp','total_tsfp', 'total_beneficiaries', 'category_id'];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
