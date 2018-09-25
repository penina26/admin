@extends('layout')

@section('content')

  <div class="col-sm-8 blog-main"  data-spy="scroll" data-target="#navbar">

        @foreach($posts as $post)

          @include('posts.post')

        @endforeach        

    </div><!-- /.blog-main -->
 
@endsection