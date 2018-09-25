<div class="blog-masthead">

  <div class="container">

    <nav class="nav" style="height: 60px;"> 

      <ul style="list-style-type: none;"> 

        <li style="display:inline-flex;"><a class="nav-link" href="/">Home</a></li>

        <li style="display:inline-flex;"><a class="nav-link" href="/posts" class="dropdown-toggle" data-toggle="dropdown" role="link">Emergency Updates 

          <span class="caret white"></span>

         </a>

          <ul class="dropdown-menu" role="menu" style=" background-color:#e4701e; margin-top: -4px;">

            <li><a class="nav-link" href="/posts">posts</a></li>

            <li><a class="nav-link" href="/nutrition">Nutriton</a></li> 

            <li><a class="nav-link" href="#protection">Protection</a></li>

            <li><a class="nav-link" href="#wash" >WASH</a></li>

            <li><a class="nav-link" href="#livelihoods">Livelihoods</a></li>

            <li><a class="nav-link" href="#health">Health</a></li>

            <li><a class="nav-link" href="#funding">Funding</a></li>

          </ul>

       </li>

       <li style="display:inline-flex;"><a class="nav-link" href="#">Maps</a></li>
        <li style="display:inline-flex;"><a class="nav-link" href="/complaints/create">Complaint Form</a></li>

       <li style="display:inline-flex;"><a class="nav-link" href="https://www.careimages.org/pages/search.php?search=%21collection195&k=ceed9a326e" target="_blank">Pictures</a></li>

       <li style="display:inline-flex;"><a class="nav-link" href="/complaints/create">Projects</a></li>


       @if(Auth::check())

       <li style="margin-left: 300px; display:inline-flex;">

          <a class="nav-link ml-auto" href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" >

          {{Auth::user()->name}}<span class="caret"></span></a>

            <ul class="dropdown-menu" role="menu" style=" background-color:#e4701e; margin-top: -4px;">

              <li><a class="nav-link"  href="/posts/create">Posts</a></li>

              <li><a class="nav-link"  href="/nutrition/create">Nutrition</a></li>

              <li><a  class="nav-link" href="/categories/create">Categories</a></li>

             <li>         
                <a  class="nav-link" href="/logout"

                  onclick="event.preventDefault();

                  document.getElementById('logout-form').submit();">

                  Logout

                </a>

                <form id="logout-form" action="/logout" method="POST" style="display: none;">

                  {{ csrf_field() }}

                </form>

             </li>

          </ul>
           
       </li>

      @endif

      </ul>

    </nav>

  </div>

</div>