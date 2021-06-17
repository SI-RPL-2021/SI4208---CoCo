@extends('layouts.navbar')

@section('main-content')

<div class="container-sm" style="background-color: #FFEAFF;">
    <br>
    <h3 style="margin-left: 50px;"><b>Ruang Kolaborasi</b></h3>
    <br>

    <div class="container-2" style="background-color: #FFFFFF;">
        <!-- INSERT PHOTO HERE -->
        <div class="container-3" style="background-color: #FFFFFF;">
            <div class="row">
                <div class="col-md-2">
                    <img class="rounded float-start" style="  max-width: 100%; height: auto;" src="data:image/jpeg;base64,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">
                </div>
                <div class="col-md-10 mb-4">
                    <font style=font-size:large;font-weight:bolder;>{{$event->event_name}}</font>
                    <button style="float:right; width:150px; background-color:#FD7EC2; color:#FFF2F9;" class="btn btn-pink" type="button">Ikut Kolaborasi</button>
                    <br><br>
                    <font style=float:right;font-size:small;font-weight:bolder;color:#A9A9A9>Kapisatas : {{$event->capacity}} Orang</font>
                    <br>
                    <p>{{$event->description}}</p>
                    <p1 class="left" style=color:#FD7EC2>Tanggal pelaksanaan : {{$event->start_date}} - {{$event->end_date}}
                        <p1>
                            <br> <br>
                </div>
                <div class="container mt-4 bg-gradient-danger">
                    @foreach($comments as $cs)
                    @if($cs->events_id == $event->id)
                    @foreach($users as $us)
                    @if($us->id == $cs->users_id)
                    <div>
                        <h5 class="mt-0 font-weight-bold blue-text">{{$us->name}}</h5>
                    </div> @endif
                    @endforeach
                    <div>
                        <p>{{$cs->events_comments}}</p>
                    </div>
                    @if($user_id == $cs->users_id)
                    <form action="{{route('deleteComment_event')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$cs->id}}">
                        <left>
                            <div class='text-right'>
                                <button type="submit" class="btn btn-primary" style="background-color: #FFFFFF; color: #FD7EC2; border-color:hotpink">Delete Comment</button>
                            </div>
                        </left>
                    </form>
                    @endif
                    @endif
                    @endforeach
                </div>
            </div>

        </div>

        <br><br>
        <form action="{{route('newComment_event')}}" method="post">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="user_id" value="{{$user_id}}">
            <input type="hidden" name="id" value="{{$event->id}}">
            <div class="row comment-box-main p-3 rounded-bottom">
                <div class="col-md-10 col-sm-10 col-10 pr-0 comment-box">

                    <input type="text" name="events_comments" class="form-control" placeholder="comment ...." />
                </div>

                <div class="col-md-2 col-sm-2 col-2 pl-0 text-center send-btn">
                    <button style="float:right;background-color:#FD7EC2; color:#FFF2F9;" class="btn">Kirim</button>
                </div>
        </form>
    </div>

</div>

</div>

</div>

@endsection