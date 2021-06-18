@extends('layouts.navbar')

@section('main-content')
<div class="row">
  <!-- left -->
  <div class="col-3 pink-background">
    <center>
      @if (Route::has('profile'))
      <a href="{{ route('profile') }}">
        <img src="{{ url('displayImage/'.$image.'')}}" style="width: 120px; height: 120px; margin-top: 50px" alt="">
      </a>
      @endif
      <h3 style="font-style: poppins; margin-top: 20px; font-size:120%"><b>{{$name}}</b></h3>
      <h3 style="font-style: poppins, sans-serif; margin-top: 10px; font-size:100%">{{$username}}</h3>
    </center>
  </div>

  <!-- middle-->
  <div class="col-6 middle">
    <div class="card">
      <form method="POST" action="{{ route('newPost') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-floating">
          <div class="row">
            <div class="col-2">
              <img src="{{ url('displayImage/'.$image.'')}}" style="width: 60px; height: 60px;   margin-top: 10%; margin-left: 40%; " alt="">
            </div>
            <div class="col-10">
              <div class="card-body">
                <input type="text" class="form-control" name="story" placeholder="Ceritakan Pengalamanmu/Buat diskusi Baru...">
              </div>
              <div class="footer">
                <ul class="nav ">
                  <li class="nav-item ml-auto">
                    <button type="submit" class="btn btn-primary mr-4 border-0" style="background-color: #FD7EC2;">Post</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>


    <div class="row">
      <section class="container">
        <ul class="nav nav-tabs pt-5">
          <li class="nav-item"><a class="nav-link active" href="#">Diskusi</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
        </ul>
      </section>
    </div>
    <!-- middle bottom -->
    <div class="white-background">
      <!-- @yield('extra-content') -->

     <!-- Start Show Post Data DISKUSI-->
     <ul class="panel-activity__list">
        @foreach ($posts as $post)
        <div class="row">
          <i class="activity__list__icon fa fa-question-circle-o"></i>
          <div class="activity__list__header">
            <img src="{{ url('displayImage/'.$post->users->images_id.'')}}" style="width: 30px; height: 30px; margin:2px" alt="">
            <a href="#" style="color: #FD7EC2; font-size:medium">{{$post->users->name }}</a>
            @if (Route::has('diskusi'))
            <br>
            <a href="{{ url('diskusi/'.$post->id) }}" style="color: black; font-size:large;">
              {{ $post->story }}
            </a>
            @endif
          </div>
          <div class="activity__list__body entry-content">
            <!-- <strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Voluptatibus ab a nostrum repudiandae dolorem ut quaerat veniam asperiores, rerum voluptatem magni dolores corporis!
            <em>Molestiae commodi nesciunt a, repudiandae repellendus ea.</em> -->
          </div>
          <br>
          <div class="container">
            <a href="#" style="color: #FD7EC2;"> <i class="fa fa-thumbs-up"></i>Like</a>
            @foreach($comments as $cs)
            @if($cs->posts_id == $post->id)
            @foreach($users as $us)
            @if($us->id == $cs->users_id)
            <br>
            <!-- <p><b>{{$us->name}}</b></p> -->
            @endif
            @endforeach
            @endif
            @endforeach
          </div>
        </div>
        @endforeach
      </ul>
      <!-- End Show Post Data-->

      <!-- Start Show Post Data EVENT-->



      <ul class="panel-activity__list">
        @foreach ($events as $event)

        <form method="POST" action="{{ route('daftarEvent') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="events_id" value="{{ $event->id }}">

          <div class="row">
            <i class="activity__list__icon fa fa-question-circle-o"></i>
            <div class="activity__list__header container2-left">
              @if (Route::has('kolaborasi'))
              <br>
              <a href="{{route('kolaborasi', $event->id)}}" style="color: black; font-size:large;">
                {{ $event->event_name }}
              </a>
            </div>
            <div class='container2-right'>
              <button type="submit" class="btn btn-primary ml-2" style="background-color: #FFFFFF; color: #FD7EC2; border-color:hotpink">Daftar</button>
            </div>
        </form>
        @endif

        <div>
          <div class="activity__list__body entry-content">
            <!-- <strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Voluptatibus ab a nostrum repudiandae dolorem ut quaerat veniam asperiores, rerum voluptatem magni dolores corporis!
            <em>Molestiae commodi nesciunt a, repudiandae repellendus ea.</em> -->
          </div>
          <br>
          <div class="align-bottom">
            <span style="font-family: Verdana, Geneva, Tahoma, sans-serif; color:grey">Tanggal: {{ $event->start_date }}</span>
            <div class="ml-auto" style="float:right;">
              <span style="color:grey;"></i>dibuat oleh: {{$event->users[0]->name }}
                <img src="{{ url('displayImage/'.$post->users->images_id.'')}}" style="width: 30px; height: 30px; margin:2px" alt="">
              </span>
            </div>
          </div>
        </div>
    </div>
    @endforeach
    </ul>
    <!-- End Show Post Data-->

  </div>
</div>

      <!-- Button Buat Event -->
      @if (Route::has('event'))
      <div class="col-2 fixed-bottom">
        <img src="img/bubble_event.png" style="width: 70%; margin-left: 560%" alt="">
        <a href="{{ route('event') }}">
          <img src="img/buat_event.png" style="width: 40%; margin-left: 625%" alt="">
        </a>
      </div>
      @endif

    </div>
  </div>
</div>
@endsection