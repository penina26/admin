@extends('layout')

@section('content')
  <div class="col-sm-8 blog-main">				
	
        <h1 class="blog-title">Add Funding Details</h1>
    
	
			<form action="{{ route('categories.store') }}" method="POST">
				{{ csrf_field() }}
				
				<div class="form-group">

					<label for="name">Title</label> <br/>

					<input type="text" name="name" id="name" value="{{ old('name') }}" />					
					
				</div>

				<div class="form-group">

					<label for="slug">Slug</label> <br/>

					<input type="text" name="slug" id="slug" value="{{ old('slug') }}" />

				</div>

				<div class="form-group">

					<input type="submit" class="btn btn-dark" value="Publish" />

					<a class="btn btn-dark" href="{{ route('categories.index') }}">Cancel</a>
					
				</div>

				@include('layouts.errors')
			</form>			
	</div>
	
@endsection