@extends('layout')

@section('content')

  <div class="col-sm-8 blog-main">

  <h1>Update a Post</h1>

  <form method ="POST" action="{{action('PostsController@update', $post->id)}}">

    {{ csrf_field() }}

    <input name="_method" type="hidden" value="PATCH">

    <div class="form-group">

      <label for="title">Title</label>

      <input type="text" class="form-control" name="title" value="{{$post->title}}">

    </div>

    <div class="form-group">

     <label for="body">Body</label>

     <textarea id="article-ckeditor" rows="5" class="form-control" name="body">

       {{$post->body}}

     </textarea>

    </div>

    <div class="form-group">

      <label for="category_id">Category</label>

      <select class = "form-control" name="category_id">
        
        <option value ="{{$category->id}}">{{$category->name}}</option>
             
     </select>

    </div>

    <div class="form-group">

      <button type="submit" class="btn btn-dark">Update</button>

    </div>

    @include('layouts.errors')

  </form>

</div>
@endsection