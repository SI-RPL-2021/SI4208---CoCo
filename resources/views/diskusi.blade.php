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

                    <p class="left">Jadi dulu akun instagram aku ke hack, aku dapet email yang isinya ada yang berusaha masuk ke akun instagram ku. Setelah aku cek ternyata passwordnya udah ada yang ganti dan aku gabisa lagi akses instagramku.. huhu
                    <p>

                        <br> <br>
                        <font style=font-weight:bolder;color:#000000>Diskusi</font>
                </div>
                <div class="media">
                    <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="Avatar">
                    <div class="media-body">
                        <h5 class="mt-0 font-weight-bold blue-text">Anna Smith</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                        fringilla. Donec lacinia congue felis in faucibus.

                        <div class="media mt-3 shadow-textarea">
                            <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0 font-weight-bold blue-text">Danny Tatuum</h5>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                        odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                        fringilla. Donec lacinia congue felis in faucibus.
                        <br> <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-10.jpg" alt="Avatar">
                    <div class="media-body">
                        <h5 class="mt-0 font-weight-bold blue-text">Caroline Horwitz</h5>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis odit minima eaque dignissimos recusandae
                        officiis commodi nulla est, tempore atque voluptas non quod maxime, iusto, debitis aliquid? Iure ipsum,
                        itaque.
                    </div>
                </div>
                
            </div>

        </div>

        <br><br>
        <div class="row comment-box-main p-3 rounded-bottom">
            <div class="col-md-10 col-sm-10 col-10 pr-0 comment-box">
                <input type="text" class="form-control" placeholder="comment ...." />
            </div>
            <div class="col-md-2 col-sm-2 col-2 pl-0 text-center send-btn">
            <button style="float:right;background-color:#FD7EC2; color:#FFF2F9;" class="btn" >Kirim</button>
            </div>
        </div>
    </div>
</div>

</div>

@endsection