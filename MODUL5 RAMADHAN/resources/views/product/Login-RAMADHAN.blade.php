
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Praktikum WAD Modul 4</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('/css/Login.css') }}">
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
                <form action="/login" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-between">
                        <h2 style="margin-bottom: 24px;">Login</h2>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" id="email" name='email' value="">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name='pw' value="">
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
                        <p>Anda belum punya akun? <a href="/Register-page">Register</a></p>
                    </div>
                </form>
                <?php

                ?>
            </div>
        </section>
</body>

</html>