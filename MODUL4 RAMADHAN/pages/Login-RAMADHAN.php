<?php
session_start();
include '../config/conn.php';

// if (isset($_COOKIE['user_login'])) {
//      $cek = $_COOKIE['user_login'];
//      $_SESSION[$cek];
// };

if (isset($_SESSION['email'])) {
     header("Location: ../index.php");
     exit;
}
if (isset($_POST['submit'])) {
     if (!empty($_POST['email']) && !empty($_POST['pw'])) {
          $email = $_POST['email'];
          $password = $_POST['pw'];
          $hasil = mysqli_query($connectLogin, "SELECT * FROM user_ramadhan where email = '$email' and password = '$password'");
          $user = mysqli_fetch_array($hasil);
          if ($user) {
               if (isset($_POST['remember'])) {
                    setcookie('user_login', $_POST['email'], time() + (3600 * 24));
                    setcookie('user_password', $_POST['pw'], time() + (3600 * 24));
                    $_SESSION['email'] = $email;
                    header('Location:../index.php');
               } elseif (!isset($_POST['remember'])) {
                    $_SESSION['email'] = $email;
                    header('Location:../index.php');
               }
          } else {
               $eror = 'Email atau password salah';
          }
     } else {
          $eror = 'Kedua kolom harus diisi';
     }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Praktikum WAD Modul 4</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="../style/Login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
</head>

<body>
     <!-- konten -->
     <section class="content">
            <div class="left">
            </div>
            <div class="right">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row justify-content-between">
                        <h2 style="margin-bottom: 24px;">Login</h2>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" id="email" name='email' value="<?php if(isset($_COOKIE['user_login'])) { echo $_COOKIE['user_login']; } ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name='pw' value="<?php if(isset($_COOKIE['user_password'])) { echo $_COOKIE['user_password']; } ?>">
                        </div>
                        <div class="text-danger"><?php if (isset($eror)) {
                                                  echo $eror;
                                             } ?></div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" name="remember" type="checkbox" value="" id="defaultCheck1" <?php if(isset($_COOKIE['user_login'])) { ?> checked <?php }?>>
                                <label class="form-check-label" for="defaultCheck1">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="mb-2">
                            <!-- <a href="Ramadhan_MyBooking.php" class="btn btn-primary w-100">Submit</a> -->
                            <button type="submit" class="btn btn-primary" name="submit">Selesai</button>
                        </div>
                        <p>Anda belum punya akun? <a href="Register-RAMADHAN.php">Register</a></p>
                    </div>
                </form>
                <?php

                ?>
            </div>
        </section>
</body>

</html>