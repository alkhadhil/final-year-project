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
<!--  -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h4>CURRENT NOTICE</h4>
      </div>
    </div>
    <div class="row">
    <div class="col-md-8">
      <div class="row">

      @if(count($posts) > 0)
      @foreach($posts as $post)

          <div class="col-md-6">
            <!-- content -->
            <div class="panel panel-default">
                <!-- <div class="panel-heading" style="position:relative; bottom: 10px; " >
                  <h4 class="panel-title">CURRENT NOTICE</h4>
                </div> -->
                        <div class="panel-body">
                            <div class="card-deck" style="position:relative; ">
                                <div class="card">
                                      <img class="card-img-top" style="width:100%;" src="{{asset('/storage/cover_images/'.$post->cover_image)}}" alt="Card image cap">
                                      <div class="card-body">
                                        <h5 class="card-title">{{$post->title}}</h5>
                                        <p class="card-text">{!!$post->body!!}</p>
                                        <p class="card-text"><small>Written on {{$post->created_at}}</small></p>
                                      </div>
                                </div>
                            </div>
                        </div>
                </div>
                <br>
          </div>


      @endforeach
      {{$posts->links()}}
  @else
      <p>No posts found</p>
  @endif

  </div>
  </div>
      <div class="col-md-4">
        <!-- side content -->
        <div class="list-group">
            <a href="#" class="list-group-item active">
              UPCOMING EVENT
            </a>

                <a href="#" class="list-group-item list-group-item-action"> NEW: names from the loan board will be out soon on monday. So everyone concerning with the loan board should come and sign so as they their money to be deposited as soon as possible</a>
                 <a href="#" class="list-group-item list-group-item-action">NEW: UE timetable is out, so everyone should cross check and find the inteference so as the timetable to be corrected as soon as possible</a>
                 <a href="#" class="list-group-item list-group-item-action">NEW: UNICODE day on the way by next week. Everyone should prepare their work very well and document them as early as possible. Smart coding to be considered and well arranged</a>
                 <a href="#" class="list-group-item list-group-item-action disabled">NEW: Block chain will be organised soon at DLAB. so everyone should prepare for that. new skills coming.</a>

        </div>
      </div>
    </div>
  </div>


@endsection



<!--    @section('content')
        @if(count($posts) > 0)
            @foreach($posts as $post)
              <a class="list-group-item disabled" href="#">{{$post->title}}
                  {!!$post->body!!}
              </a>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif -->
