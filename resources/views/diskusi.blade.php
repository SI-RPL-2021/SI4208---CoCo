@extends('layouts.navbar')

@section('main-content')

<div class="container-sm" style="background-color: #FFEAFF;">
    <br>
    <h3 style="margin-left: 50px;"><b>Ruang Diskusi</b></h3>
    <br>

    <div class="container-2" style="background-color: #FFFFFF;">
        <!-- INSERT PHOTO HERE -->
        <div class="container-3" style="background-color: #FFFFFF;">
            <div class="row">
                <div class="col-md-2">
                    <img src="public\img\mentalhealth.jpg">
                </div>
                <div class="col-md-10">

                    <button type="button" style="float:right; width:150px; width: 40px;height: 40px;border-radius: 50%;" class="btn btn-danger btn-round"><span class="glyphicon glyphicon-volume-off"></span><img src="public\img\flag.png"></button>
                    <br><br>

                    <p class="left">{{$post->story}}
                    <p>

                        <br> <br>
                        <font style=font-weight:bolder;color:#000000>Diskusi</font>
                </div>
                @foreach($post->comments as $comment)
                <div class="media">
                    <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-10.jpg" alt="Avatar">
                    <div class="media-body">
                        <h5 class="mt-0 font-weight-bold blue-text">{{$comment->users->name}}</h5>
                        {{$comment->comments}}
                    </div>
                </div>
                @endforeach
            </div>

        </div>

        <br><br>
        <form action="{{url('diskusi/'.$post->id.'/comment')}}" method="post" class="row comment-box-main p-3 rounded-bottom">
            @csrf
            <div class="col-md-10 col-sm-10 col-10 pr-0 comment-box">
                <input type="text" name="comment" class="form-control" placeholder="comment ...." />
            </div>
            <div class="col-md-2 col-sm-2 col-2 pl-0 text-center send-btn">
            <button style="float:right;background-color:#FD7EC2; color:#FFF2F9;" class="btn" >Kirim</button>
            </div>
        </form>
    </div>
</div>

</div>

@endsection