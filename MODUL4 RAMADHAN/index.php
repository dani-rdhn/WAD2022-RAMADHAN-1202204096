<?php 
    require 'config/conn.php';
    require 'config/connector.php';
    // require 'config/session.php';
    if(!isset($_SESSION)) {
    session_start();
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP Praktikum WAD Modul 4</title>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link rel="stylesheet" href="style/Index.css">
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
                            <a class="nav-link" href="<?php echo $jumlah_mobil == 0 ? "pages/Add-RAMADHAN.php" : "pages/ListCar-RAMADHAN.php"?>" style="text-decoration: none;" class="link-light <?php echo basename($_SERVER['PHP_SELF']) == 'ListCar-RAMADHAN.php' ? "" : "text-secondary"; ?>">MyCar</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto" style="margin-right: 100px;">
                        <li class="nav-item mx-4">
                            <?php 
                                // if(isset($_SESSION['id'])) {
                                //     echo "<a href='pages/ListCar-RAMADHAN.php'>List Car</a>";
                                // } else {
                                //     echo "<a href='pages/Login-RAMADHAN.php'>Login</a>";
                                // }
                            ?>
                            <a href='pages/Login-RAMADHAN.php' class="btn btn-light" type="button">Login</a>
                            <a href='../config/logout.php' class="btn btn-light" type="button">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>

        <?php require './pages/Home-RAMADHAN.php'?>
    </body>
</html>