<div class="col-sm-3 offset-sm-1 blog-sidebar">

  <div class="sidebar-module sidebar-module-inset">

    <h4>About</h4>

    <p><em>CARE works around the globe to save lives, defeat poverty and achieve social justice.</em></p>

  </div>

  <div class="sidebar-module">
    
    @foreach($categories as $category)

    <h6><a href = "{{route('categories.show', $category->id)}}">{{$category->name}}</a></h6>

    @endforeach   

  </div>

  <div class="sidebar-module">

    <h4>Elsewhere</h4>

    <ol class="list-unstyled">

      <li><a href="#">Youtube</a></li>

      <li><a href="#">Twitter</a></li>

      <li><a href="#">Facebook</a></li>

    </ol>

  </div>
  
</div><!-- /.blog-sidebar -->