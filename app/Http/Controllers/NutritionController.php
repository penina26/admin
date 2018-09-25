<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nutrition;
use App\Category;

class NutritionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nutrition = Nutrition::all();


        return view('nutrition.index', compact('nutrition'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('nutrition.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'title'=>'required',           
            'body'=>'required',
            'total_screened'=>'required',
            'total_otp'=>'required',
            'total_tsfp'=>'required',
            'total_beneficiaries'=>'required',
            'category_id'=>'required',                      
        ]);
        //using eloquent to save

      
       
        //associate a post with a category
        $nutrition = new Nutrition([

            'title' =>request('title'),            
            'body' =>request('body'),
            'total_screened'=>request('total_screened'),
            'total_otp'=>request('total_otp'),
            'total_tsfp'=>request('total_tsfp'),
            'total_beneficiaries'=>request('total_beneficiaries'),
            'category_id'=>request('category_id')

        ]);

        $nutrition->save(); 

        
        
        return redirect('/nutrition');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nutrition = Nutrition::find($id);

        return view('nutrition.show', compact('nutrition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nutrition = Nutrition::find($id);
        $categories = Category::all();
        return view('nutrition.edit', compact('nutrition', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title'=>'required',           
            'body'=>'required',
            'total_screened'=>'required',
            'total_otp'=>'required',
            'total_tsfp'=>'required',
            'total_beneficiaries'=>'required',
            'category_id'=>'required',                      
        ]);
        //using eloquent to save

      
       
        //associate a post with a category
        $nutrition = Nutrition::find($id);

            $nutrition->title = $request-> input('title'); 

            $nutrition->body = $request->input('body');

            $nutrition->total_screened = $request->input('total_screened');

            $nutrition->total_otp = $request->input('total_otp');

            $nutrition->total_tsfp = $request->input('total_tsfp');

            $nutrition->total_beneficiaries = $request->input('total_beneficiaries');

            $nutrition->category_id = $request->input('category_id');

        

        $nutrition->save(); 

        
        
        return redirect('/nutrition');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $nutrition = Nutrition::find( $id );

        $nutrition->delete();        

        return redirect('/nutrition');
    }
}
