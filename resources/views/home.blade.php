@extends('layouts.navbar')

@section('main-content')
<div class="row">
  <!-- left -->
  <div class="col-3 pink-background">
    <center>
      <img src="{{ url('displayImage/'.$image.'')}}" style="width: 120px; height: 120px; margin-top: 50px" alt="">
      <h3 style="font-style: poppins; margin-top: 20px; font-size:120%"><b>{{$name}}</b></h3>
      <h3 style="font-style: poppins, sans-serif; margin-top: 10px; font-size:100%">{{$username}}</h3>
      <h3 style="font-style: poppins; margin-top: 10px; font-size:100%">xx Following | xx Followers</h3>
      <h3 style="font-style: poppins; margin-top: 20px; font-size:100%">Selebgram | Singer</h3>
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
                  <li class="nav-item"><a class="nav-link" href="#">Tambah Foto</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Undang Orang</a></li>
                  <li class="nav-item ml-auto">
                    <button type="submit" class="btn btn-primary ml-2">Post</button>
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
          <li class="nav-item"><a class="nav-link active" href="#">Posting</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Karya</a></li>
        </ul>
      </section>
    </div>
    <!-- middle bottom -->
    <div class="white-background">
      <!-- @yield('extra-content') -->

      <!-- SIMPLE LAYOUT -->
      <!-- Start Show Post Data-->
      <!-- @foreach ($posts as $post)
            <div class="row">
              <div class="col-4">
                <img src="{{ url('displayImage/'.$post->users[0]->images_id.'')}}" style="width: 30px; height: 30px; margin:2px" alt="">
                {{ $post->users[0]->name }}
              </div>
              <div class="col-8">
                {{ $post->story }}
              </div>
            </div>
        @endforeach -->
      <!-- End Show Post Data-->

      <!-- Start Show Post Data-->
      <ul class="panel-activity__list">
        @foreach ($posts as $post)
        <div class="row">
          <i class="activity__list__icon fa fa-question-circle-o"></i>
          <div class="activity__list__header">
            <img src="{{ url('displayImage/'.$post->users[0]->images_id.'')}}" style="width: 30px; height: 30px; margin:2px" alt="">
            <a href="#">{{$post->users[0]->name }}</a> Posted the question: <a href="#">{{ $post->story }}</a>
          </div>
          <div class="activity__list__body entry-content">
            <!-- <strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Voluptatibus ab a nostrum repudiandae dolorem ut quaerat veniam asperiores, rerum voluptatem magni dolores corporis!
            <em>Molestiae commodi nesciunt a, repudiandae repellendus ea.</em> -->
          </div>
          <div class="activity__list__footer">
            <a href="#"> <i class="fa fa-thumbs-up"></i>Like</a>
            <a href="#"> <i class="fa fa-comments"></i>Comment</a>
            <span> <i class="fa fa-clock"></i>2 hours ago</span>
          </div>
        </div>
        @endforeach
        <!-- End Show Post Data-->
      </ul>
    </div>
  </div>

  <!-- right -->
  <div class="col-3 pink-background">
    <div class="d-none d-xl-block mr-2 mt-5 right-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="card rounded">
            <div class="card-body">
              <h6 class="card-title">Trending</h6>
              <div class="latest-photos">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="ml-4 mt-8">
    <a href="#">
      <img src="public\img\buat_event.png">
    </a>
  </div>
  @endsection