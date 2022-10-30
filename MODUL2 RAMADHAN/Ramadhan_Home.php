<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TP Praktikum WAD</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="Ramadhan_Home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
</head>
<body>
    <?php
        // session_start();
        // $_SESSION["imageid1"] = "Image/mpv.png";
        // session_start();
        // $_SESSION["imageid2"] = "image url";
        // session_start();
        // $_SESSION["imageid3"] = "image url";
    ?>
    <ul class="nav justify-content-center sticky-top" style="width: 100%; height:48px; background-color: black;">
        <li class="nav-item">
            <a class="nav-link text-secondary" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-secondary" href="Ramadhan_Booking.php">Booking</a>
        </li>
    </ul>
    
    <section class="Home">
        <div class="container-home">
            <div class="row">
                <p class="text-center" style="font-weight:bold; font-size:28px">WELCOME TO EAD RENT</p>
                <p class="text-center">Find Your Best Deal, Here!</p>
            </div>
        </div>
        <section class="cards">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-3">
                    <div class="card" style="height: 31rem">
                        <img class="card-img-top img-responsive center-block d-block mx-auto" src="Image/mpv.png" alt="Card image cap" id="imagempv" style="padding-top:16px; padding-bottom:36px; height: auto; width: 280px;">
                        <div class="card-body">
                            <h5 class="card-title">Toyota Innova</h5>
                            <p class="card-text">Rp. 200.000 / Day</p>
                        </div>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">7 Seater</li>
                            <li class="list-group-item">2000 cc</li>
                            <li class="list-group-item">Automatic</li>
                        </ul>
                        <div class="card-body text-center">
                            <a href="Ramadhan_Booking.php?imgsrc=<?=urlencode("Image/mpv.png")?>" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-auto">
                <div class="card" style="height: 31rem">
                    <img class="card-img-top img-responsive center-block d-block mx-auto" src="Image/sedan.png" alt="Card image cap" style="height: auto; width: 280px;">
                    <div class="card-body">
                        <h5 class="card-title">Honda Civic</h5>
                        <p class="card-text">Rp. 150.000 / Day</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">5 Seater</li>
                        <li class="list-group-item">1500 cc</li>
                        <li class="list-group-item">Automatic</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="Ramadhan_Booking.php?imgsrc=<?=urlencode("Image/sedan.png")?>" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                </div>
                
                <div class="col col-lg-3">
                <div class="card" style="height: 31rem">
                    <img class="card-img-top img-responsive center-block d-block mx-auto" src="Image/suv.png" alt="Card image cap" style="padding-bottom:12px; height: auto; width: 280px;">
                    <div class="card-body">
                        <h5 class="card-title">Hyundai Santa Fe</h5>
                        <p class="card-text">Rp. 250.000 / Day</p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item">5 Seater</li>
                        <li class="list-group-item">2400 cc</li>
                        <li class="list-group-item">Automatic</li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="Ramadhan_Booking.php?imgsrc=<?=urlencode("Image/suv.png")?>" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </section>
    </section>
    <div class="footer fixed-bottom">
        <div class="p-2 mb-2 bg-light">
            <p class="text-center">Created by Ramadhan_1202204096</p>
        </div>
    </div>
</body>
</html>