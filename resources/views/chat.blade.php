@extends('layouts.navbar')

@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>


<body>
    <div class="container-kiri" style="float:left; width:25%; margin-top:50px">
        <center>
            <img src="img/ariana.jpg" style="width: 50px; height: 50px; border-radius:50%;">
            <h5>Ariana Grande</h5>
            <p>@arianagrande</p>
            <p>227 m followers | 750 following</p>
        </center>
        <img src="img/justin.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;">
        <label style="text-indent: 2em;"><b>Justin Bieber</b>
            <p>@justinbie</p>
        </label>
        <br>
        <img src="img/billie.jpg" style="width: 50px; height: 50px; border-radius:50%;">
        <label style="text-indent: 2em;"><b>Billie Eilish</b>
            <p>@billiecans</p>
        </label>
        <br>
        <img src="img/sean.jpg" style="width: 50px; height: 50px; border-radius:50%;">
        <label style="text-indent: 2em;"><b>Sean</b>
            <p>@seanuhuy</p>
        </label>
        <br>
        <img src="img/keanu.jpg" style="width: 50px; height: 50px; border-radius:50%;">
        <label style="text-indent: 2em;"><b>Keanu Angel</b>
            <p>@keanununu</p>
        </label>

    </div>
        
    <div class="container-tengah" style="float:left; width:50%;margin-top:50px">
        <center>
            <br><br><br>
            <img src="img/chat.png" style="width: 250px; height: 200px" alt="">
            <h3 style="font-weight: bold; color: #EF2A82;">Tidak Ada Pesan Disini</h3>
            <br><br><br><br>
            <div class="form-floating">
                <textarea class="form-control" placeholder="kirim pesan..." id="floatingTextarea2" style="height: 45px; float:left;width: 90%;"></textarea>
                
                <button type="submit" style="background-color: #EF2A82; color: white; float:left; margin-left:10px" name="kirim">Kirim</button>
            </div>
        </center>
    </div>

    <div class="container-kanan" style="float:left; width:25%;margin-top:50px">
        <form class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
                <label for="inputPassword2" class="sr-only">Cari Teman</label>
                <input type="text" class="form-control" id="inputPassword2" placeholder="Cari Teman">
            </div>
            <button type="submit" class="btn btn-light mb-2" style="background-color:#FD7EC2; color:#FFF2F9;">Cari</button>
        </form>

        <img src="img/joey.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;">
        <label style=" text-indent: 2em;"><b>Joey King</b>
            <p>@joeyjoy</p>
        </label>
        <br>

        <img src="img/noah.jpg" style="width: 50px; height: 50px; border-radius:50%;">
        <label style="text-indent: 2em;"><b>Noah</b>
            <p>@noahahaha</p>
        </label>
        <br>
        <img src="img/taylor.jpg" style="width: 50px; height: 50px; border-radius:50%;">
        <label style="text-indent: 2em;"><b>Taylor Swift</b>
            <p>@taylorskuy</p>
        </label>
        <br>
        <img src="img/ross.jpg" style="width: 50px; height: 50px; border-radius:50%;">
        <label style="text-indent: 2em;"><b>Ross Butler</b>
            <p>@rossbut</p>
        </label>
        <br>
        <img src="img/lana.jpg" style="width: 50px; height: 50px; border-radius:50%;">
        <label style="text-indent: 2em;"><b>Lana</b>
            <p>@lananana</p>
        </label>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
@endsection
</html>