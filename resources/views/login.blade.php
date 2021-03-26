
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
        <div class="col-6 col-md-4"></div>
        <div class="col-6 col-md-4"> <br><br><br><br><br>
                <div class="card-header text-center" style="color: #000000; font-size: 25px; font-family:Arial, Helvetica, sans-serif; background-color: white;">
                    <b>Masuk</b>
                </div>
                <div class="card-body">
                    <form class="" action="" method="post">

                        <?php if (isset($error)) : ?>
                            <p class="text-danger">Username/Password Salah!</p>
                        <?php endif; ?>
                        <div class="form-group">
                            <input type="text" class="form-control col" name="username" placeholder="Alamat email kamu">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control col" name="password" placeholder="Masukkan passwordmu">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="ingat">
                            <label class="form-check-label" for="ingat">Ingat Saya? </label>
                        </div>
                        <button type="submit" class="btn col" style="background-color: #F57ABC; color: white; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);" name="login">Masuk</button>
                        <p class="mt-3 text-center">Belum punya akun? <a href="registrasi.blade.php" style="color: #FF3BA4;">Daftar Sekarang</a></p>
                    </form>
</body>
</html>