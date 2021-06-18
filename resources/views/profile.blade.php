@extends('layouts.navbar')

@section('main-content')

@if($alert!='')
    <div class="alert alert-primary" role="alert">
        {{$alert}}
    </div>
@endif

<div class="container-sm" style="background-color: #FFEAFF;">
    <br>
    <h3 style="margin-left: 50px;"><b>Profile</b></h3>
    <br>

    <div class="container-2" style="background-color: #FFFFFF;">
        <form method="POST" action="{{ route('updateProfile') }}" enctype="multipart/form-data">
            
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <!-- INSERT PHOTO HERE -->
            <div class="container-3" style="background-color: #FFFFFF;">
                <div class="col-auto">
                    <!-- INSERT PHOTO -->
                    <div class="image-event">
                        <a href="">
                            <img src="{{ url('displayImage/'.$user->images_id.'')}}" style="width: 100px; height: 100px; margin:2px" alt="">
                        </a>
                        <br>
                    </div>
                    <!-- UPLOAD FOTO -->
                    <label for="formFileSm" class="form-label"><b>Upload foto baru</b></label>
                    <input name="newImage" class="form-control" id="formFileSm" type="file"/>
                    <!-- NAMA USER -->
                    <label for="nama_user" class="form-label"><b>Nama</b></label>
                    <input name="name" type="text" id="name" class="form-control" aria-describedby="" value="<?php echo $user->name; ?>" required>
                    <br>
                    <!-- USERNAME -->
                    <label for="nama_username" class="form-label"><b>Username</b></label>
                    <input name="username" type="text" id="inputUsername" class="form-control" aria-describedby="" value="<?php echo $user->username; ?>" required>
                    <br>
                    <!-- EMAIL -->
                    <label for="nama_email" class="form-label"><b>E-mail</b></label>
                    <input name="email" type="text" readonly class="form-control-plaintext" id="staticEmail" class="form-control disabled" aria-describedby="" value="{{$user->email}}">
                    <br>
                    <!-- BIO -->
                    <label for="inputJudul" class="form-label"><b>Bio</b></label>
                    <textarea name="bio" id="inputDeskripsi" class="form-control" rows="5"><?php echo $user->bio; ?></textarea>
                    <br>
                    <button type="submit" class="btn" style="float: right; background-color:#F57ABC; color:white;"><b>Simpan</b></button>
                    <br>
                </div>
        </form>
    </div>
</div>

</div>

@endsection