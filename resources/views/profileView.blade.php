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
            <h3 style="font-style: poppins; margin-top: 10px; font-size:100%">{{$following}} Following | {{$follower}} Followers</h3>
            @if(!$isFollowing)
            <form method="POST" action="{{ route('profileView.follow') }}">
                @csrf
                <input type="hidden" name="following_id" value="{{ $id }}">
                <button type="submit" class="btn btn-primary ml-2" style="background-color: #FFFFFF; color: #FD7EC2; border-color:hotpink">Follow</button>
            </form>
            @else
            <form method="POST" action="{{ route('profileView.unfollow') }}">
                @csrf
                <input type="hidden" name="following_id" value="{{ $id }}" hidden>
                <button type="submit" class="btn btn-primary ml-2" style="background-color: #FFFFFF; color: #FD7EC2; border-color:hotpink">Unfollow</button>
            </form>
            @endif
            <!-- <h3 style="font-style: poppins; margin-top: 20px; font-size:100%">Selebgram | Singer</h3> -->
        </center>
    </div>

    <!-- middle-->
    <div class="col-6 middle">
        <div class="hidden-card">
        </div>

        <div class="row">
            <section class="container">
                <ul class="nav nav-tabs pt-5">
                    @if($isDiskusi)
                    <li class="nav-item"><a class="nav-link active" href="{{ url('profileView/diskusi/'.$id) }}" id="btn-diskusi">Diskusi</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('profileView/event/'.$id) }}">Events</a></li>
                    @else
                    <li class="nav-item"><a class="nav-link" href="{{ url('profileView/diskusi/'.$id) }}" id="btn-diskusi">Diskusi</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ url('profileView/event/'.$id) }}">Events</a></li>
                    @endif
                </ul>
            </section>
        </div>
        <!-- middle bottom -->
        <div class="white-background">
            <!-- End Show Post Data-->

            <!-- Start Show Post Data DISKUSI-->
            @if($isDiskusi)
            <ul class="panel-activity__list" id="tab-diskusi">
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
                        <div class="align-bottom ml-auto" style="float:right; margin-right:10px">
                            <span style="color:grey;"> <i class="fa fa-clock"></i>{{ $post->created_at }}</span>
                        </div>
                    </div>
                </div>

        </div>
        @endforeach
        </ul>
        <!-- End Show Post Data-->
        @else
        <!-- Start Show Post Data EVENT-->

        <ul class="panel-activity__list">
            @foreach ($events as $event)

            <form method="POST" action="{{ route('daftarEvent') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="events_id" value="{{ $event->id }}">

                <div class="row">
                    <i class="activity__list__icon fa fa-question-circle-o"></i>
                    <div class="activity__list__header container2-left">
                        @if (Route::has('eventSaya'))
                        <br>
                        <a href="{{route('eventSaya', $event->id)}}" style="color: black; font-size:large;">
                            {{ $event->event_name }}
                        </a>
                    </div>
                    <div class='container2-right'>
                    </div>
            </form>
            @endif

            <div>
                <div class="activity__list__body entry-content">
                    <!-- <strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Voluptatibus ab a nostrum repudiandae dolorem ut quaerat veniam asperiores, rerum voluptatem magni dolores corporis!
            <em>Molestiae commodi nesciunt a, repudiandae repellendus ea.</em> -->
                </div>
                <div class="align-bottom">
                    <span style="font-family: Verdana, Geneva, Tahoma, sans-serif; color:grey">Tanggal: {{ $event->start_date }} sampai {{ $event->end_date }}</span>
                </div>
                <div class="mr-auto" style="float:left;">
                    <span style="color:grey;"></i>dibuat oleh: {{$event->users->name }}
                        <img src="{{ url('displayImage/'.$event->users->images_id.'')}}" style="width: 30px; height: 30px; margin:2px" alt="">
                    </span>
                </div>
            </div>
    </div>
    @endforeach
    </ul>
    @endif
    <!-- End Show Post Data-->

</div>
</div>

</div>
</div>
</div>
@endsection