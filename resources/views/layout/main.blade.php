<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light"style="background-color: #FD7EC2;">
        <a class="navbar-brand"><img src="/img/logo.png" alt="logo" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav ml-auto" style="margin-right: 20px;">
            <button class="btn" style="background-color:transparent; margin-right: 10px;" type="submit">
                    <img src="img/message-icon.png" width="35px" alt="notif-icon">
                </button>
                <button class="btn ml-auto" style="background-color:transparent; color:#FD7EC2; margin-right: 20px;" type="submit">
                    <img src="img/notif-icon.png" width="25px" alt="notif-icon">
                </button>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: #FFF2F9; font-weight :600">Beranda</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #FFF2F9; font-weight :600">Tentang</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-light" style="background-color:#FFF2F9; color:#FD7EC2; font-weight :600" type="submit">Keluar</button>
            </form>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>