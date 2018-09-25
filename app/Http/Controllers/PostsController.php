<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use Auth;
use Carbon\Carbon;

class PostsController extends Controller
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
        $posts = Post::latest()->get();
        $categories = Category::all();

        //fetch posts by year and month --linked to the post model
        //$posts=Post::latest()->filter(request(['month', 'year']))->get();
        
        //return $archives;
        //temporary use
       return view('posts.index', compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //fetch all the categories from database
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request )
    {
        //dd(request(['title','body'])); dump results on the page
         // create new post
        /*$post = new Post;
        $post->title = request('title');
        $post->body = request('body');

        //save 
        $post->save();
        return redirect('/');*/
        //validate form data
        $this->validate(request(),[
            'title'=>'required',
            'slug'=>'required',
            'body'=>'required',
            'category_id'=>'required',                      
        ]);
        //using eloquent to save

      
       
        //associate a post with a category
        $post = new Post([

            'title' =>request('title'),
            'slug' =>request('slug'),
            'body' =>request('body'),
            'user_id'=>auth()->user()->id,
            'category_id'=>request('category_id')

        ]);

        $post->save(); 

        
        
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        //$post = App\User::find($id)->posts;
        $post = Post::find($id);
        //check for the correct user
        if(Auth()->user()->id !=$post->user_id)
        {
            return redirect('/posts')->with('errors', 'unauthorized page');
        }

        return view('posts.edit', compact('post','categories'));
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
        $this->validate($request,[
                'title'=>'required',
                'body'=>'required',
                'category_id'=>'required'
            ]);
        //update post
        $post = Post::find($id);
        //$post = App\User::find($id)->posts;
        $post->title = $request->input('title');
        $post->body = $request->input('body');    
         $post->category_id = $request->input('category_id'); 
        $post->save();

        return redirect('/posts')->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        //$post = App\User::find($id)->posts;
            //check for the correct user
        if(Auth()->user()->id !=$post->user_id)
        {
            return redirect('/posts')->with($error, 'unauthorized page');
        }

        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted');
    }

    
}
