<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>User Management</title>
</head>
<style>
    .container_main{
        padding-left: 90px;
    }
</style>
<body>
    <div id="app">
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light"style="background-color: #FD7EC2;">
        <a class="navbar-brand"><img src="/img/logo.png" alt="logo" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav ml-auto" style="margin-right: 20px;">
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('user_mgt') }}" style="color: #FFF2F9; font-weight :600">{{ __('User Management') }}</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('content_mgt') }}" style="color: #FFF2F9; font-weight :600">{{ __('Post Management') }}</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('report_mgt') }}" style="color: #FFF2F9; font-weight :600">{{ __('Report Management') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}" style="color: #FFF2F9; font-weight :600">{{ __('Dashboard') }}</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}" style="color: #FFF2F9; font-weight :600">{{ __('Home') }}</span></a>
            </li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="btn btn-light dropdown-toggle"style="background-color:#FD7EC2; color:#FFF2F9"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                
            </div>
        </div>
    </nav>

    </div>

    <div class="container-main">
        <center>
        <h1 style="font-family: 'Courier New', Courier, monospace;font-weight:500; margin-top:50px; margin-bottom:50px">User Management Dashboard</h1>
        </center>
        

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register new user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}" class="user">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input type="text" class="form-control col" name="name" placeholder="{{ __('Nama') }}" value="{{ old('name') }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control col" name="username" placeholder="{{ __('Username') }}" value="{{ old('username') }}" required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control col" name="email" placeholder="{{ __('E-Mail') }}" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control col" name="password" placeholder="{{ __('Masukkan Password') }}" required>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" >
                    {{ __('Save') }}
                </button>
            </div>
            </form>
            </div>
        </div>
        </div>
        <div style="padding:2%">
            <table class="table" style="margin-top:20px">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $key => $data)
                    <tr> 
                        <th>{{$data->id}}</th>  
                        <th>{{$data->name}}</th>
                        <th>{{$data->email}}</th>     
                        <th>
                            @if ($data->is_admin == 1)
                                admin
                            @else
                                user
                            @endif
                        </th>
                        <th>
                            <a class="btn btn-danger" href = 'delete/{{ $data->id }}'>Delete</a>
                        </th>
                    </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>

        
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>