@extends('main')

@section('title', '| Homepage')

@section('content')
  
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to My Blog!</h1>
        <p>Thanks you so much visiting!!!</p>
        <p><a class= "btn btn-primary btn-lg" href="#">Popular Post</a></p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">

      @foreach($posts as $post)
         <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{  substr($post->body, 0, 600) }} {{ strlen($post->body) > 600 ? "..." : ""  }}</p>
            <a href="#" class="btn btn-primary">Подробное</a>
            <hr>
         </div>
     @endforeach
     

    </div>
    <div class="col-md-3 col-md-offset-1">
      
  <h2>Sidebar</h2>
     <div class="sidebar">
      
      <p>Last News</p>
      <img src="{{asset("img/Intuit Sertification.jpg")}}" class="img-responsive">

      <p>Last News</p>
      <img src="{{asset("img/Intuit Sertification.jpg")}}" class="img-responsive">

      <p>Last News</p>
      <img src="{{asset("img/Intuit Sertification.jpg")}}" class="img-responsive">

     </div>
    </div>

  </div>

@endsection
</div>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
  </body>
</html>