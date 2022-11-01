        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>TP Praktikum WAD</title>
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
            <link rel="stylesheet" href="Ramadhan_Booking.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
            crossorigin="anonymous">
        </head>
        <body>
            <ul class="nav justify-content-center" style="width: 100%; height:48px; background-color: black;">
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="Ramadhan_Home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-secondary" href="#">Booking</a>
                </li>
            </ul>

            <section class="Booking">
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p class="text-center" style="font-weight:bold; font-size:28px">Rent Your Car, Now!</p>
                    
                    <div class="col-5">
                        <div class="row justify-content-between" style="Padding-right: 48px;">
                        <img src="<?=$_GET['imgsrc']?>">
                        <!-- <img class="card-img-top img-responsive center-block d-block mx-auto" src="Image/mpv.png" alt="Card image cap" style="padding-top:16px; padding-bottom:36px; height: auto; width: 280px;"> -->
                        </div>
                    </div>
                    <div class="col-7">
                        <form action="Ramadhan_MyBooking.php" method="post">
                            <div class="row justify-content-between">
                    
                                <div class="mb-2">
                                    <label class="form-label">Name</label>
                                    <input class="form-control" id="Name" name='Name' value="Ramadhan_1202204096" readonly>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Book Date</label>
                                    <input type="datetime-local" class="form-control" id="Date" name="Date-in" placeholder="dd/mm/yyyy">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">End Date</label>
                                    <input type="datetime-local" class="form-control" id="Date" name="Date-out" placeholder="dd/mm/yyyy">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Duration (days)</label>
                                    <input type="text" class="form-control" id="Duration" name="Duration">
                                </div>
                                <div class="mb-2">
                                    <label for="name" class="form-label">Car</label>
                                    <select class="form-select" id="Cars" name="Cars">
                                        <option value="Honda Civic" name="civic">Honda Civic</option>
                                        <option value="Toyota Innova" name="innova"> Toyota Innova </option>
                                        <option value="Hyundai Santa Fe" name="santafe">Hyundai Santa Fe</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="Phone" name="Phone">
                                </div>
                                <span>Add Service(?)</span>
                                <div class="mb-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="inlineCheckboxOptions" id="Check1" value="Health protocol">
                                        <label class="form-check-label" for="Check1">Health protocol / Rp25.000</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="inlineCheckboxOptions" id="Check2" value="Driver">
                                        <label class="form-check-label" for="Check2">Driver / Rp100.000</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="inlineCheckboxOptions" id="Check3" value="Fuel Filled">
                                        <label class="form-check-label" for="Check3">Fuel filled / Rp250.000</label>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <!-- <a href="Ramadhan_MyBooking.php" class="btn btn-primary w-100">Submit</a> -->
                                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <footer class="footer">
                <div class="p-2 mb-2 bg-light">
                    <p class="text-center">Created by Ramadhan_1202204096</p>
                </div>
            </footer>
        </body>
        </html>