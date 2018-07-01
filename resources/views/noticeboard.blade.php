@extends('layouts.appclient')

@section('content')
<nav class="navbar navbar-dark bg-primary" style="position: relative; bottom:  15px">
    <div class="col-md-16" >
			<a class="logo" href="/" title="Home"> <img src="{{asset('images/logo.png')}}" alt="" /> </a>
		</div>
    <div class="col-lg-10" >
      <p><h1>UNIVERSITY OF DAR ES SALAAM</h1></p>
      <p><h2>NOTICE BOARD</h2></p>
      <p class="lead" id="time"></p>
		</div>

</nav>

    <div class="main">
      <div class="container">
        <div class="row">
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading" style="position:relative; bottom: 10px; " >
              <h4 class="panel-title">CURRENT NOTICE</h4>
            </div>
            <div class="panel-body">

              <div class="card-deck" style="position:relative; bottom: 10px; height: 250px;">
                <div class="card" >
                  <img class="card-img-top" src="{{asset('images/logo.png')}}"  alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
                <div class="card">
                  <img class="card-img-top" src="{{asset('images/logo.png')}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>


            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="list-group">
  <a href="#" class="list-group-item active">
    UPCOMING EVENT
  </a>

  <a href="#" class="list-group-item disabled">
    @section('content')
        @if(count($posts) > 0)
            @foreach($posts as $post)
                            <a href="/fyp5/public/posts/{{$post->id}}">{{$post->title}}</a>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
    </a>
          </div>
        </div>
        </div>
      </div>
    </div>

@endsection
