
@extends('layout')

@section('content')
 <div class="col-sm-8 blog-main">
		
	<h1 class="blog-title">Categories 

	   	@if(!Auth::guest())

	   	<a class="btn btn-sm btn-dark" href="{{ route('categories.create') }}">

		   Add New

		</a>

		@endif
   </h1>
			
	<table class="table">

		<tr>
			<th>Title</th>

			<th>Date</th>

			<th>&nbsp;</th>
		</tr>
		<tr>

		    @if( $categories )

				
				@foreach( $categories as $category )

					<tr>

						<td>

							<strong>

								<a href="{{ route('categories.show', $category->id) }}">

									{{ $category->name }}

								</a>

							</strong>

						</td>

						<td>Published {{ date( 'j/m/Y', strtotime( $category->created_at ) ) }}</td>

						@if(!Auth::guest())

						<td>

							<form class="d-inline" action="{{ route('categories.destroy', $category->id) }}" method="POST">

                                {{ csrf_field() }}

                                {{ method_field('DELETE') }}
								
                                <input type="submit" value="Delete" class="btn btn-sm btn-danger" />

                            </form>


                            <a class="btn btn-sm btn-dark" href="{{ route('categories.edit', $category->id) }}">Edit</a>

						</td>

						@endif

					</tr>

				@endforeach

			@endif

		</tr>

	</table>

			
	</div>	
	
@endsection