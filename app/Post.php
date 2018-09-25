<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'user_id', 'category_id'];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /*public function scopeFilter($query, $filters)
    {
    	//check whether the month is set
    	if (isset($filters['month'])){

	        if($month = $filters['month'])
	        {
	            $query->whereMonth('created_at',Carbon::parse($month)->month);
	        }
        }
        //check whether the year is set
        if (isset($filters['year']))
         {
	        if($year = $filters['year'])
	        {
	            $query->whereYear('created_at',$year);
	        }

       }
    }
    //fetch archives from database by month and year

   	public static function archives()
    {
    	return static::selectRaw('year(created_at)year, monthname(created_at)month, count(*) published')
        ->groupBy('year', 'month')
        ->orderByRaw('min(created_at)')
        ->get()
        ->toArray();
    	

    }*/
        
    

   
}
