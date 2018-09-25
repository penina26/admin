@extends('layout')

@section('content')

<div class="col-sm-8 blog-main">

   <h1>{{$post->title}}</h1>

    {!!$post->body!!}<br>

    <small>posted in</small> <a href="{{route('categories.show', $post->category->id)}}">{{$post->category->name}}</a>

   <hr>

   <div class="comments">

	   <ul class="list-group">

			@foreach($post->comments as $comment)

				<li class="list-group-item">

				  <strong>{{$comment->created_at->diffForHumans()}}: &nbsp;</strong>

					{!!$comment->body!!}
				  
				</li>

			@endforeach

	   </ul>

  </div>

	<hr>

	<div class="container">

		@if(Auth::guest())
	
		<form method ="POST" action="/posts/{{$post->id}}/comments">

			{{ csrf_field() }}

			<div class="form-group">
			
				<textarea id="article-ckeditor" class="form-control" rows="5" id="comment" name ="body" placeholder="Your Comment"></textarea>

			</div>
			

			<div class="form-group">

	  		<button type="submit" class="btn btn-dark">Add Comment</button>

	  		</div>

	   		@include('layouts.errors')

		</form>

		@endif
		
		@if(!Auth::guest())

		@if(auth()->user()->id ==$post->user_id)

   	    <center>
		 	<table>
	 			<tr>
			 		<td style="padding-right: 20px;"><a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a></td>

			 		<td>

			 			<form action="{{action('PostsController@destroy', $post->id)}}" method="post">

				            {{csrf_field()}}

				            <input name="_method" type="hidden" value="DELETE">

				            <button class="btn btn-dark" type="submit">Delete</button>

          			 	</form>

          			</td>

	 			</tr>

	 		</table> 

    	</center>

    	@endif

    	@endif 

	</div>

</div>

@endsection