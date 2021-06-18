@extends('layouts.navbar')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    .form-container{
        width: 50%;
        margin-left:auto;
        margin-right:auto;
        margin-top:5%;
    }
</style>
@section('main-content')
<body>
    <div class = "form-container">
        <center><h1>Laporkan Akun</h1></center>
        <form method="POST" action="/report">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="nama">nama akun</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label for="konten">isi konten yang dilaporkan</label>
                <textarea  class="form-control" name="konten" placeholder=""></textarea>
            </div>
            <button type="submit" class="btn" style="float: right; background-color:#F57ABC; color:white;"><b>Kirim</b></button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
@endsection
</html>