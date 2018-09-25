
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Care Somalia Emergency</title>    <!-- Bootstrap core CSS -->
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- Custom styles -->
    <link href="/css/blog.css" rel="stylesheet">
    
  </head>

  <body>

   @include('layouts.nav')

    <div class="blog-header">
      
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:100%; height:50%;">

          <ol class="carousel-indicators">

            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

          </ol>

          <div class="carousel-inner">

            <div class="carousel-item active">

              <img class="img-fluid" src="{{asset('images/care1.jpg')}}" alt="First slide" style="width:100%;">

              <div class="carousel-caption d-none d-md-block">

                <h3>Welcome to Care Emergency Updates</h3>

              </div>

            </div>

            <div class="carousel-item">

                <img class="img-fluid" src="{{asset('images/care2.jpg')}}" alt="Second slide" style="width:100%;">

                <div class="carousel-caption d-none d-md-block">

                  <h3>Welcome to Care Emergency Updates</h3>

                </div>                
            </div>

            <div class="carousel-item">

              <img class="img-fluid" src="{{asset('images/care3.jpg')}}" alt="Third slide" style="width:100%;">

              <div class="carousel-caption d-none d-md-block">

                <h3>Welcome to Care Emergency Updates</h3>

              </div>

            </div>

          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="sr-only">Previous</span>

          </a>

          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="sr-only">Next</span>

          </a>

        </div>

   

    </div>

    <div class="container">

      <div class="row">

      @yield('content')

      @include('layouts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('layouts.footer')

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

    <script>

        CKEDITOR.replace( 'article-ckeditor' ); 

    </script>

  </script>

  </body>

</html>
