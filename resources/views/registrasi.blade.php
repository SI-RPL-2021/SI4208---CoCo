<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registrasi</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<style>
body {
    background-image: url('img/FrameRegis.png');
    background-position: center;
    background-repeat: no-repeat;
  
}
</style>

<body> 

<div class="container" >
        <div class="row">
            <div class="col-6 col-md-4"></div>
            <div class="col-6 col-md-4">
            
                <br><br><br><br>
            <center><h1 style="color:white;">Daftar</h1></center>
                    
               
                <br>
                    <p class="text-center" style="color: white;">Daftarkan dirimu & bagi pengalamanmu bersama kami</p>
                    <div class="card-body">
                        <form style="margin-left:auto; margin-right:auto;" action="" method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" name="Nama" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="username" required>
                            </div>
                            <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Masukkan password" required>
                            </div>
                
                            <button type="submit" class="btn col" style="background-color: #F57ABC; color: white; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" name="registrasi">Daftar Sekarang</button>
                            <center>
                                <p class="mt-3">Sudah Memiliki akun? <a href="login.blade.php" style="color: #FF3BA4;">Login</a></p>
                            </center>
                        </form>
                        
                        </div>
                </div>
            </div>
          
</body>
</html>