<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Homepage</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<style>
  html,
  body {
    height: 100%;
    font-family: poppins;
  }

  .col {
    background-color: #FFEAFF;
    height: 2000px;
  }

  .col-3 {
    background-color: #FFEAFF;
    height: 2000px;
  }


  .container1 {
    background-color: #FFEAFF;
    border-radius: 25px;
    margin-top: 60px;
  }

  #tambahfoto:focus {
    outline: none;
  }
</style>

<body>
  <div class="row">
    <!-- left -->
    <div class="col-3">

      <form class="" action="" method="post">
        <center>
          <img src="img/photoinsert.png" style="width: 120px; height: 120px; margin-top: 50px" alt="">
          <h3 style="poppins; margin-top: 20px; font-size:120%"><b>Arianul Grandul</b></h3>
          <h3 style="poppins, sans-serif; margin-top: 10px; font-size:100%">@Username</h3>
          <h3 style="poppins; margin-top: 10px; font-size:100%">xx Following | xx Followers</h3>
          <h3 style="poppins; margin-top: 20px; font-size:100%">Selebgram | Singer</h3>
        </center>
    </div>

    <!-- middle-->
    <div class="col-6">
      <div class="container1">
        <div class="form-floating">
          <div class="row">
            <div class="col-2">
              <img src="img/photoinsert.png" style="width: 60px; height: 60px;   margin-top: 10%; margin-left: 40%; " alt="">
            </div>
            <div class="col-8">
              <div class="card-body">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ceritakan Pengalamanmu/Buat diskusi Baru...">
              </div>
              <div class="footer">
                <ul class="nav ">
                  <li class="nav-item"><a class="nav-link" href="#">Tambah Foto</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Undang Orang</a></li>
                  <li class="nav-item ml-auto">
                    <button type="button" class="btn btn-primary ml-2">Post</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <!-- middle bottom -->
      <div class="down">
        <section class="container">
          <ul class="nav nav-tabs pt-5">
            <li class="nav-item"><a class="nav-link active" href="#">Diskusi</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Kolaborasi</a></li>
          </ul>
        </section>
        <ul class="panel-activity__list">
          <li>
            <i class="activity__list__icon fa fa-question-circle-o"></i>
            <div class="activity__list__header">
              <img src="" alt="" />
              <a href="#">Grandul</a> Posted the question: <a href="#">How can I change my annual reports for the better effect?</a>
            </div>
            <div class="activity__list__body entry-content">
              <p>
                <strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Voluptatibus ab a nostrum repudiandae dolorem ut quaerat veniam asperiores, rerum voluptatem magni dolores corporis!
                <em>Molestiae commodi nesciunt a, repudiandae repellendus ea.</em>
              </p>
            </div>
            <div class="activity__list__footer">
              <a href="#"> <i class="fa fa-thumbs-up"></i>123</a>
              <a href="#"> <i class="fa fa-comments"></i>23</a>
              <span> <i class="fa fa-clock"></i>2 hours ago</span>
            </div>
          </li>

      </div>
    </div>
    </nav>

    <!-- right -->
    <div class="col-3">
      <div class="d-none d-xl-block mr-2 mt-5 right-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="card rounded">
              <div class="card-body">
                <h6 class="card-title">Trending</h6>
                <div class="latest-photos">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>