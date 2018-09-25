@extends('layout')

@section('content')

<div class="col-sm-8 blog-main">

   <h1>{{$nutrition->title}}</h1>

    {!!$nutrition->body!!}<br>
    
     <table class="table table-bordered table-striped table-inverse  table-sm table-responsive">

     	<thead class="bg-warning">

	   	<tr>
	   		<th>Key Indicators</th>
	   		<th>Total to Date</th>
	   	</tr>
	   </thead>

	   	<tr>
	   		<td>Total  screened</td>
	   		<td>{{$nutrition->total_screened}}</td>        		   		
	   	</tr>

	   	<tr>
	   		<td> Total OTP enrolled</td>
	   		<td>{{$nutrition->total_otp}}</td>
	   	</tr>

	   	<tr>
	   		<td>Total TSFP</td>
	   		<td>{{$nutrition->total_tsfp}}</td>
	   	</tr>

	   	<tr>
	   		<td>Total Beneficiaries</td>
	   		<td>{{$nutrition->total_beneficiaries}}</td>
	   	</tr>

	</table>

    <small>posted in</small> <a href="{{route('categories.show', $nutrition->category->id)}}">
    	{{$nutrition->category->name}}
    </a>

   <hr>

	<div class="container">
		
		@if(!Auth::guest())		

   	    <center>
		 	<table>
	 			<tr>
			 		<td style="padding-right: 20px;"><a href="{{route('nutrition.edit', $nutrition->id)}}" class="btn btn-dark">Edit</a></td>

			 		<td>

			 			<form action="{{action('NutritionController@destroy', $nutrition->id)}}" method="post">

				            {{csrf_field()}}

				            <input name="_method" type="hidden" value="DELETE">

				            <button class="btn btn-dark" type="submit">Delete</button>

          			 	</form>

          			</td>

	 			</tr>

	 		</table> 

    	</center>

    	@endif


	</div>

</div>

@endsection