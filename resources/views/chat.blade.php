@extends('layouts.navbar')

@section('main-content')

<div class="container-chat">
    <div class="row">
        <div class="col-3" style="float:left; background: #FFEAFF;">
            <center>
                <img src="img/ariana.jpg" style="width: 50px; height: 50px; border-radius:50%;">
                <h5>Ariana Grande</h5>
                <p>@arianagrande</p>
                <p>227 m followers | 750 following</p>
            </center>

            <br><br>
            <p style="text-align:left"><b>Kontak</b></p>
            <table class="table table-borderless">
                <tbody>

                    <tr>
                        <th width="20px"></th>
                        <th width="20px"></th>
                    </tr>

                    <tr>
                        <th scope="row">
                        <td><img src="img/justin.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;"></td>
                        <td><label style=" float:left; text-indent: 2em;"><b>Justin Bieber</b>
                                <p>@justinbie</p>
                            </label> </td>
                    </tr>

                    <tr>
                        <th scope="row">
                        <td><img src="img/billie.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;"></td>
                        <td><label style=" float:left; text-indent: 2em;"><b>Billie Eilish</b>
                                <p>@billiecans</p>
                            </label> </td>
                    </tr>

                    <tr>
                        <th scope="row">
                        <td><img src="img/sean.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;"></td>
                        <td><label style=" float:left; text-indent: 2em;"><b>Sean</b>
                                <p>@seanuhuy</p>
                            </label> </td>
                    </tr>

                    <tr>
                        <th scope="row">
                        <td><img src="img/keanu.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;"></td>
                        <td><label style=" float:left; text-indent: 2em;"><b>Keanu Angel</b>
                                <p>@keanununu</p>
                            </label> </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-8" style="background: #FCF2FF;float:left;">
            <center>
                <img src="img/chat.png" style="width: 250px; height: 200px" alt="">
                <h3 style="font-weight: bold; color: #EF2A82; margin-top: 40px">Tidak Ada Pesan Disini</h3>
            </center>
            <br><br>
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th scope="row">
                        <td>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="kirim pesan..." id="floatingTextarea2" style="height: 45px; float:left;"></textarea>
                                <label for="floatingTextarea2"></label>
                        </td>
                        <td><button type="submit" style="background-color: #EF2A82; color: white; float:left;" name="kirim">Kirim</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-3" style="background: #FFEAFF; float:left;">
        <div class="form-floating">
            <textarea class="form-control" placeholder="cari teman" id="floatingTextarea2" style="height: 45px; float:left; background-color:black; color:white;"></textarea>
            <label for="floatingTextarea2"></label> <br><br><br>

            <table class="table table-borderless">
                <tbody>

                    <tr>
                        <th width="20px"></th>
                        <th width="20px"></th>
                    </tr>

                    <tr>
                        <th scope="row">
                        <td><img src="img/joey.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;"></td>
                        <td><label style=" float:left; text-indent: 2em;"><b>Joey King</b>
                                <p>@joeyjoy</p>
                            </label> </td>
                    </tr>

                    <tr>
                        <th scope="row">
                        <td><img src="img/noah.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;"></td>
                        <td><label style=" float:left; text-indent: 2em;"><b>Noah Centi</b>
                                <p>@noahahaha</p>
                            </label> </td>
                    </tr>

                    <tr>
                        <th scope="row">
                        <td><img src="img/taylor.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;"></td>
                        <td><label style=" float:left; text-indent: 2em;"><b>Taylor Swift</b>
                                <p>@taylorskuy</p>
                            </label> </td>
                    </tr>

                    <tr>
                        <th scope="row">
                        <td><img src="img/ross.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;"></td>
                        <td><label style=" float:left; text-indent: 2em;"><b>Ross Butler</b>
                                <p>@rossbutt</p>
                            </label> </td>
                    </tr>

                    <tr>
                        <th scope="row">
                        <td><img src="img/lana.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;"></td>
                        <td><label style=" float:left; text-indent: 2em;"><b>Lana</b>
                                <p>@lananana</p>
                            </label> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection