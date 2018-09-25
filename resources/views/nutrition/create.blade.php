@extends('layout')

@section('content')

<div class="col-sm-8 blog-main">

	<h1>Publish A Post</h1>

	<hr>	

	<form method ="POST" action="/nutrition">

	   {{ csrf_field() }}

	  <div class="form-group">

		    <label for="title">Title</label>

		    <input type="text" class="form-control" name="title">

	  </div>


	  <div class="form-group">

		    <label for="body">Body</label>

		    <textarea id="article-ckeditor" name="body" class="form-control"></textarea>

	  </div>

	   <div class="form-group">

		    <label for="total_screened">Total number of beneficiaries screened</label>

		    <input type="text" class="form-control" name="total_screened">

	  </div>

	   <div class="form-group">

		    <label for="total_otp">Total beneficiaries enrolled in OTP</label>

		    <input type="text" class="form-control" name="total_otp">

	  </div>

	   <div class="form-group">

		    <label for="total_tsfp">Total beneficiaries enrolled in TSFP</label>

		    <input type="text" class="form-control" name="total_tsfp">

	  </div>

	   <div class="form-group">

		    <label for="total_beneficiaries">Total beneficiaries (after eliminating double counting)</label>

		    <input type="text" class="form-control" name="total_beneficiaries">

	  </div>

	  <div class="form-group">

	      <label for="category_id">Category</label>

	      <select class = "form-control" name="category_id">

	      	@foreach($categories as $category)

	      		<option value ="{{$category->id}}">{{$category->name}}</option>
	      	@endforeach  

		  	 </select>

	    </div>

		<div class="form-group">

		  	<button type="submit" class="btn btn-dark">Publish</button>

		</div>

	  	@include('layouts.errors')

   </form>
    
</div>
@endsection