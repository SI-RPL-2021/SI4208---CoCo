@extends('layouts.navbar')

@section('main-content')

<div class="container-sm" style="background-color: #FFEAFF;">
    <br>
    <h3 style="margin-left: 50px;"><b>Buat Event</b></h3>
    <br>

    <div class="container-2" style="background-color: #FFFFFF;">
        <!-- INSERT PHOTO HERE -->
        <div class="container-3" style="background-color: #FFFFFF;">
            <div class="col-auto">
                <form method="POST" action="{{ route('newEvent') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- INSERT PHOTO -->
                    <div class="image-event">
                        <a href="#">
                            <img name="image" src="img/event_photo.png" alt="insert_photo">
                        </a>
                        <br>
                    </div>
                    <!-- JUDUL EVENT -->
                    <label for="inputJudul" class="form-label"><b>Judul Event Kolaborasi</b></label>
                    <input name="event_name" type="text" id="inputJudul" class="form-control" aria-describedby="" placeholder="Masukkan Judul Event Disini...">
                    <br>
                    <!-- DESKRIPSI EVENT -->
                    <label for="inputJudul" class="form-label"><b>Deskripsi Event Kolaborasi</b></label>
                    <textarea name="description" id="inputDeskripsi" class="form-control" rows="5" placeholder="Masukkan Deskripsi Event Disini..."></textarea>
                    <br>
                    <!-- TANGGAL EVENT -->
                    <label for="inputJudul" class="form-label"><b>Tanggal Event</b></label>
                    <br>
                    <div class=image-event>
                        <input name="start_date" type="date" placeholder="dd-mm-yyyy" />
                        sampai
                        <input name="end_date" type="date" placeholder="dd-mm-yyyy" />
                    </div>
                    <br>
                    <!-- KAPASITAS TEAM KOLABORASI -->
                    <label for="inputJudul" class="form-label"><b>Kapasitas Team Event</b></label>
                    <div class="input-group">
                        <input name="capacity" type="text" id="inputKapasitas" class="form-control" aria-describedby="" placeholder="">
                        <span class="input-group-text" id="basic-addon2">Orang</span>
                    </div>
                    <br>
                    <!-- VISIBILITAS TEAM -->
                    <!-- <label for="inputJudul" class="form-label"><b>Visibilitas Undangan Kolaborasi</b></label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih Visibilitas</option>
                        <option value="1">Publik</option>
                        <option value="2">Hanya Teman Undangan</option>
                    </select> -->
                    <!-- UNDANG TEMAN -->
                    <br>
                    <a href="#">
                        <img src="\img\undang-teman.png" alt="undangTeman" style="width: 40px; height:auto; margin-left:15px;margin-right:20px">
                    </a>
                    <label for="inputJudul" class="form-label"><b>Undang Teman...</b></label>
                    <br>
                    <br>
                    <button type="submit" class="btn" style="float: right; background-color:#F57ABC; color:white;"><b>Buat</b></button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection