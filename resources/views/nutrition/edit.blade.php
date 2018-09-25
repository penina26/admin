@extends('layout')

@section('content')

  <div class="col-sm-8 blog-main">

  <h1>Update a Post</h1>

  <form method ="POST" action="{{action('NutritionController@update', $nutrition->id)}}">

    {{ csrf_field() }}

    <input name="_method" type="hidden" value="PATCH">

    <div class="form-group">

      <label for="title">Title</label>

      <input type="text" class="form-control" name="title" value="{{$nutrition->title}}">

    </div>

    <div class="form-group">

     <label for="body">Body</label>

     <textarea id="article-ckeditor" rows="5" class="form-control" name="body">

       {{$nutrition->body}}

     </textarea>

    </div>

     <div class="form-group">

		    <label for="total_screened">Total number of beneficiaries screened</label>

		    <input type="text" class="form-control" name="total_screened" value ="{{$nutrition->total_screened}}">

	  </div>

	   <div class="form-group">

		    <label for="total_otp">Total beneficiaries enrolled in OTP</label>

		    <input type="text" class="form-control" name="total_otp" value ="{{$nutrition->total_otp}}">

	  </div>

	   <div class="form-group">

		    <label for="total_tsfp">Total beneficiaries enrolled in TSFP</label>

		    <input type="text" class="form-control" name="total_tsfp" value ="{{$nutrition->total_tsfp}}" >

	  </div>

	   <div class="form-group">

		    <label for="total_beneficiaries">Total beneficiaries (after eliminating double counting)</label>

		    <input type="text" class="form-control" name="total_beneficiaries" value ="{{$nutrition->total_beneficiaries}}">

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