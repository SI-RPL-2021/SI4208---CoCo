<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
    .container-sm {
        background-color: #FD7EC2;
        height: 550px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .container-2 {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        /* margin-top: 20px; */
        margin-left: 30px;
        margin-right: 30px;
    }

    .container-3 {
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 20px;
        /* height: 400px; */
    }

    .container3-left {
        width: 25%;
        height: 400px;
        float: left;
    }

    .container3-center {
        width: 25%;
        height: 400px;
        float: left;
    }

    .container3-right {
        width: 25%;
        height: 400px;
        float: left;
    }

    .container4 {
        height: 200px;
        background-color: #FD7EC2;
    }
</style>

<body>
    <!-- Navbar -->
    <!-- <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #FD7EC2;">
        <a class="navbar-brand"><img src="/img/logo.png" alt="logo" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto" style="margin-right: 20px;">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: #FFF2F9; font-weight :600">Beranda</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #FFF2F9; font-weight :600">Tentang</a>
                </li>
                <a class="nav-link" aria-current="page" href="#" style="color: white;">|</a>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #FFF2F9; font-weight :600; margin-left:20px">Masuk</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-light" style="background-color:#FFF2F9; color:#FD7EC2; font-weight :600" type="submit">Daftar</button>
            </form>
        </div>
    </nav> -->


    <div class="container-sm" style="background-color: #FFEAFF;">
        <br>
        <h3 style="margin-left: 20px;"><b>Buat Event</b></h3>
        <br>

        <div class="container-2" style="background-color: #FFFFFF;">
            <!-- INSERT PHOTO HERE -->
            <div class="container-3" style="background-color: #FFFFFF;">
                <div class="col-auto">
                    <form>
                        <!-- JUDUL EVENT -->
                        <label for="inputJudul" class="form-label"><b>Judul Event </b></label>
                        <input type="text" id="inputJudul" class="form-control" aria-describedby="" placeholder="Masukkan Judul Event Disini...">
                        <br>
                        <!-- DESKRIPSI EVENT -->
                        <label for="inputJudul" class="form-label"><b>Deskripsi Event</b></label>
                        <textarea id="inputDeskripsi" class="form-control" rows="5" placeholder="Masukkan Deskripsi Event Disini..."></textarea>
                        <!-- TANGGAL EVENT -->
                        <br>
                        <!-- KAPASITAS TEAM KOLABORASI -->
                        <label for="inputJudul" class="form-label"><b>Kapasitas Team</b></label>
                        <div class="input-group">
                            <input type="text" id="inputKapasitas" class="form-control" aria-describedby="" placeholder="">
                            <span class="input-group-text" id="basic-addon2">Orang</span>
                        </div>
                        <br>
                        <!-- VISIBILITAS TEAM -->
                        <label for="inputJudul" class="form-label"><b>Visibilitas Undangan Kolaborasi</b></label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Visibilitas</option>
                            <option value="1">Publik</option>
                            <option value="2">Hanya Teman Undangan</option>
                        </select>
                        <!-- UNDANG TEMAN -->
                        <br>    
                        <a href="#">
                            <img src="\img\undang-teman.png" alt="undangTeman" style="width: 40px; height:auto; margin-left:15px;margin-right:20px">
                        </a>
                        <label for="inputJudul" class="form-label"><b>Undang Teman...</b></label>
                        <button type="button" class="btn" style="float: right; background-color:#F57ABC; color:white; margin-top:50px;"><b>Buat</b></button>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>