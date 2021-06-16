@extends('layouts.navbar')

@section('main-content')

<div class="container body--eventSaya" style="background: #FCF2FF; width: 900px;">
    <h5 class="" style="text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;margin-top:5px">
        Kampanye Mental Health
    </h5>
    <center>
        <div class="container mt-5">
            <div class="row-eventSaya" style="width: 600px;">
                <div class="col mt-3">
                    <center>
                        <img src="img/taeyong.jpeg" alt="" style="width: 100px; height: 100px; border-radius:50%; ">
                    </center> <br>
                    <p style="text-align:left">Deskripsi Event</p>
                    <form action="/edit/<?php echo $users[0]->id; ?>" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2"></label> <br>
                        </div>
                        <p style="text-align:left">Tanggal Event</p>
                        <div class="date-group">
                            <input type="date" id="mulai" name="mulai" style="float: left; padding-left: 30px;"> <label for=""><b>Sampai</b> </label>
                            <input type="date" id="mulai" name="mulai" style="float: right; padding-left: 30px;">
                        </div> <br>
                        <p style="text-align:left">Kapasitas Team</p>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea"></label> <br>
                        </div>
                        <p style="text-align:left">Visibilitas Event</p>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea1"></textarea>
                            <label for="floatingTextarea">Undang Teman</label> <br>
                        </div>
                        <p style="text-align:left"><b>Kolaborator</b></p>
                        <img src="img/mark.jpg" style="width: 50px; height: 50px; border-radius:50%; float:left;"> <label style=" float:left; text-indent: 2em;"><b>@mark_nct</b></label> <label>
                            <div class="btn" style="float: right; padding-left: 250px;">
                                <button style="background-color: #F57ABC; color: white;" type="button" id="btnSubmit" class="btn btn-sm">Accept</button>
                                <button style="background-color: #AAA4A7; color: white;" type="button" id="btnCancel" class="btn btn-sm">Decline</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </center>
    @endsection