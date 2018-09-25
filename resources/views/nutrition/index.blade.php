@extends('layout')

@section('content')

  <div class="col-sm-8 blog-main"  data-spy="scroll" data-target="#navbar">  	 

        @if(count($nutrition)>0)

        	@foreach($nutrition as $nutrition)

        		<h1><a href ="{{route('nutrition.show', $nutrition->id)}}">{{$nutrition->title}}</h1></a>

        		   {!!$nutrition->body!!}

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
        		   	<tfoot>
        		   	<tr>
        		   		<td>Total Beneficiaries</td>
        		   		<td>{{$nutrition->total_beneficiaries}}</td>
        		   	</tr>
        		   </tfoots class="bg-warning">
        		   </table>



        	@endforeach
          

        @endif

       

    </div><!-- /.blog-main -->
 
@endsection