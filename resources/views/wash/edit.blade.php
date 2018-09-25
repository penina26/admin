@extends('layout')

@section('content')

<div class="col-sm-8 blog-main">
		
    <h1 class="blog-title">Edit Category</h1> 
	
	<form action="{{ route('categories.update', $category->id) }}" method="POST">
		{{ csrf_field() }}		
		
		
		<div class="form-group">

			<label for="name">Title</label> <br/>

			<input type="text" name="name" id="name" value="{{ $category->name }}" />

		</div>

		<div class="form-group">

			<label for="slug">Slug</label> <br/>

			<input type="text" name="slug" id="slug" value="{{ $category->slug }}" />

			@if ($errors->has('slug'))

                <span class="help-block">

                    <strong>{{ $errors->first('slug') }}</strong>

                </span>

            @endif

		</div>

		<div class="form-group">

			<input type="submit" class="btn btn-dark" value="Update" />

			<a class="btn btn-dark" href="{{ route('categories.index') }}">Cancel</a>
			
		</div>

		@include('layouts.errors')
	</form>
		
</div>

	
@endsection