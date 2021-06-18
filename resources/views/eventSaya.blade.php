@extends('layouts.navbar')

@section('main-content')

@if($alert!='')
<div class="alert alert-primary" role="alert">
    {{$alert}}
</div>
@endif

<div class="container body--eventSaya" style="background: #FCF2FF; width: 900px;">
    <h5 class="" style="text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;margin-top:5px">
        {{ $event_name }}
    </h5>
    <center>
        <div class="container mt-5">
            <div class="row-eventSaya" style="width: 600px;">
                <div class="col mt-3">
                    <center>
                        <img src="img/taeyong.jpeg" alt="" style="width: 100px; height: 100px; border-radius:50%; ">
                    </center> <br>
                    <p style="text-align:left">Deskripsi Event</p>
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea2" style="height: 100px" disabled>{{ $description }}</textarea>
                        <label for="floatingTextarea2"></label> <br>
                    </div>
                    <p style="text-align:left">Tanggal Event</p>
                    <div class="date-group">
                        <input type="date" id="mulai" name="mulai" style="float: left; padding-left: 30px;" value="{{ $start_date }}" disabled>
                        <label for=""><b>Sampai</b> </label>
                        <input type="date" id="mulai" name="mulai" style="float: right; padding-left: 30px;" value="{{ $end_date }}" disabled>
                    </div> <br>
                    <p style="text-align:left">Kapasitas Team</p>
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea"> {{ $capacity }} </textarea>
                        <label for="floatingTextarea"></label> <br>
                    </div>
                    <!-- <p style="text-align:left">Visibilitas Event</p>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea1"></textarea>
                            <label for="floatingTextarea">Undang Teman</label> <br>
                        </div> -->
                    <p style="text-align:left"><b>Kolaborator</b></p>
                    @foreach ($events_tags as $events_tag)
                    <div class="row mt-2 md-2">
                        <div class="col-8">
                            <img src="{{ url('displayImage/'.$events_tag->users->images_id.'')}}" style="width: 50px; height: 50px; border-radius:50%; float:left;" alt="">
                            <!-- <img src="img/mark.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;">  -->
                            <label style=" float:left; text-indent: 2em;"><a href="#"><b>{{ $events_tag->users->username }}</b></a></label> <label>
                        </div>
                        <div class="col" style="float: right;">
                        
                            <div class="row">
                                @if($events_tag->status=='P')
                                <div class="col">
                                    <form method="POST" action="{{ route('eventSaya.accept') }}">
                                        @csrf
                                        <input value="{{$events_tag->id}}" name="eventsTagsId" type="hidden" />
                                        <button style="background-color: #F57ABC; color: white;" id="btnSubmit" class="btn btn-sm" type="submit">Accept</button>
                                    </form>
                                </div>
                                <div class="col">
                                    <form method="POST" action="{{ route('eventSaya.decline') }}">
                                        @csrf
                                        <input value="{{$events_tag->id}}" name="eventsTagsId" type="hidden" />
                                        <button style="background-color: #AAA4A7; color: white;" id="btnSubmit" class="btn btn-sm" type="submit">Decline</button>
                                    </form>
                                </div>
                                @else
                                <button style="background-color: #F57ABC; color: white;" id="btnSubmit" class="btn btn-sm" type="submit" disabled>Accepted</button>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- </form> -->
                    <!-- 
                    {!! $description !!} -->
                </div>
            </div>
        </div>

    </center>
    @endsection