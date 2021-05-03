@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-6 col-md-4"></div>
        <div class="col-6 col-md-4"> <br>
                
                <div class="card-body">
                                <div class="text-center">
                                    <h1 class="h3 text-gray-900 mb-4"><b>{{ __('Daftar') }}</b></h1>
                                </div>
                                    <hr width="25%" style="border: solid #F57ABC ">
                                
                                    <p class="text-center" style="color: black;">Daftarkan dirimu & bagi pengalamanmu bersama kami</p>

                                @if ($errors->any())
                                    <div class="alert alert-danger border-left-danger" role="alert">
                                        <ul class="pl-4 my-2">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

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


                                    <div class="form-group">
                                        <button type="submit" class="btn col" class="btn col" style="background-color: #F57ABC; color: white; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                                            {{ __('Daftar Sekarang') }}
                                        </button>
                                    </div>

                                    <div class="text-center">
                                        
                                        <a class="small" style="color: #FF3BA4;" href="{{ route('login') }}">{{ __('Sudah Punya Akun? Masuk Sekarang!') }}</a>
                                    </div>
                                </form>

                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
