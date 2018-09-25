@extends('layout')


@section('content')
		
	<div class="col-sm-8 blog-main">
			
        <h1 class="blog-title" style="color:#e4701e;">{{ $category->name }}</h1>

        <p>{{ date('M j, Y', strtotime( $category->created_at )) }}

        	@if(!Auth::guest())

        	<span> 

        	<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-dark">Edit</a>
          </span>
     </p>
          @endif
   <hr>

   <div class="posts">

   <ul class="list-group">

		@foreach($category->posts as $post)

			<li class="list-group-item">

			  <strong>{{$post->created_at->diffForHumans()}}: &nbsp;</strong>

				<a href="{{ route('posts.show', $post->id)}}">

					{{$post->title}}

				</a>
			  
			</li>

		@endforeach

		</ul>

	</div>

	<div class="posts">

   <ul class="list-group">

		@foreach($category->nutrition as $nutrition)

			<li class="list-group-item">

			  <strong>{{$nutrition->created_at->diffForHumans()}}: &nbsp;</strong>

				<a href="{{ route('nutrition.show', $nutrition->id)}}">

					{{$nutrition->title}}

				</a>
			  
			</li>

		@endforeach

		</ul>

	</div>

</div>
	
@endsection