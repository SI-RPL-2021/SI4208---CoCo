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
    .container1{
        background-color: #FD7EC2;
        height:550px;
    }
    .container1-left{
        width: 50%;
        padding: 60px;
        padding-top:120px;
        color: #FFF2F9;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        float: left;
    }
    .container1-right{
        width: 50%;
        float: left;
        padding-top:40px;
    }
    .container2{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        padding-top: 50px;
        padding-left: 300px;
        padding-right: 300px;
    }
    .container3{
        padding-left: 20%;
        padding-top: 30px;
        height: 400px;
    }
    .container3-left{
        width: 25%;
        height: 400px;
        float: left;
    }
    .container3-center{
        width: 25%;
        height: 400px;
        float: left;
    }
    .container3-right{
        width: 25%;
        height: 400px;
        float: left;
    }
    .container4{
        height: 200px;
        background-color: #FD7EC2;
    }
</style>
<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light"style="background-color: #FD7EC2;">
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
    </nav>
        <div class="container1">
            <div class="container1-left">
                <center>
                <h1 style="font-weight: bold;">Berdiskusi Bersama</h1>
                <h1 style="font-weight: bold;">Para Content Creator</h1>
                <p style="margin-top:30px">CoCo atau Content Creator Community merupakan sebuah platform berbentuk Website yang dibuat untuk menghubungkan para content creator untuk berdiskusi dengan content creator lainnya.</p>
                </center>
            </div>
            <div class="container1-right">
                <img src="img/pc.png" alt="pc">
            </div>
        </div>
        <div style="height: 20px; background-color:#EF2A82"></div>

        <div class="container2">
            <center>
            <h2 style="font-weight: bold; color: #EF2A82; margin-bottom:30px">Main Features</h2>
            <p>CoCo menyediakan fitur-fitur berdiskusi dan berkolaborasi dengan content creator maupun pengguna lain, serta membuat ruang obrolan privasi.</p>
            </center>
        </div>

        <div class="container3">
            <div class="container3-left">
                <center>
                <img src="img/diskusi.png" style="width: 200px;" alt="">
                <h3 style="font-family: Verdana, Geneva, Tahoma, sans-serif; margin-top: 40px">DISKUSI</h3>
                </center>
            </div>
            <div class="container3-center">
                <center>
                <img src="img/kolaborasi.png" style="width: 200px;" alt="">
                <h3 style="font-family: Verdana, Geneva, Tahoma, sans-serif; margin-top: 40px">KOLABORASI</h3>
                </center>
            </div>
            <div class="container3-right">
                <center>
                <img src="img/chat.png" style="width: 250px; height: 200px" alt="">
                <h3 style="font-family: Verdana, Geneva, Tahoma, sans-serif; margin-top: 40px">CHAT</h3>
                </center>
            </div>
        </div>

        <div style="height: 20px; background-color:#EF2A82"></div>

        <div class="container4">

        </div>

        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>