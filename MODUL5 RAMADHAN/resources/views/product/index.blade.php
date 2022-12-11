<?php 
    // // require 'config/conn.php';
    // require 'config/connector.php';
    // // require 'config/session.php';
    // if(!isset($_SESSION)) {
    // session_start();
    // }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP Praktikum WAD Modul 4</title>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link rel="stylesheet" href="{{ asset('/css/Index.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    </head>
    <body>
        <!-- Navbar -->
        <section class="nav-top">
            <nav class="navbar navbar-expand-lg py-3 bg-primary">
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 100px;">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="/Listcar">My Car</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto" style="margin-right: 100px;">
                        <li class="nav-item mx-5">
                            <?php 
                                // if(isset($_SESSION['id'])) {
                                //     echo "<a href='pages/ListCar-RAMADHAN.php'>List Car</a>";
                                // } else {
                                //     echo "<a href='pages/Login-RAMADHAN.php'>Login</a>";
                                // }
                            ?>
                            <a href='/login' class="btn btn-light" type="button">Login</a>
                            <a href='/Register-page' class="btn btn-light" type="button">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
            <section class="content">
                <div class="row justify-content-center mx-auto d-flex align-items-center">
                    <div class="col">
                        <p class="main-text">Selamat Datang di Show Room </p>
                        <p class="sub-text">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus</p>
                        <a href="/Listcar" class="btn btn-primary">My Car</a>
                        <div class="display">
                            <img class="card-img-top img-responsive d-block" src="/img/logo-ead.png" alt="Card image cap" id="imagemobil" style="height: auto; width: 64px; margin-top: 36px;">
                            <p class="nama" style="margin-left: 24px;">Ramadhan_1202204096</p>
                        </div>
                    </div>
                    <div class="col">
                        <img class="card-img-top img-responsive center-block d-block mx-auto" src="img/mobilHome.png" alt="Card image cap" id="imagemobil" style="height: auto; width: 500px;">
                        <!-- <a href='../config/logout.php' class="btn btn-light" type="button">Logout</a> -->
                    </div>
                </div>
            </section>
    </body>
</html>