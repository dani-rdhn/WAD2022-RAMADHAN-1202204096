<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TP Praktikum WAD</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="Ramadhan_MyBooking.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
</head>
<body>
<?php
error_reporting(E_ERROR | E_PARSE);
$mobil = $_POST['Cars'];

    $Total = 0;

    if ($mobil == 'Toyota Innova') {
        $Total = 200000;
    } else if ($mobil == 'Honda Civic') {
        $Total = 150000;
    } else if ($mobil == 'Hyundai Santa Fe') {
        $Total = 250000;
    }

?>
    <ul class="nav justify-content-center" style="width: 100%; height:48px; background-color: black;">
        <li class="nav-item">
            <a class="nav-link text-secondary" href="Ramadhan_Home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-secondary" href="#">Booking</a>
        </li>
    </ul>

    <section class="MyBooking">
         <div class="row">
            <p class="text-center" style="font-weight:bold; font-size:28px">Thank you Ramadhan_1202204096 for Reserving</p>
            <p class="text-center">Please double check for your reservation details</p>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Car</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service(s)</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo(rand(1200000000,1300000000)) ?></td>
                    <td><?= $_POST['Name']; ?></td>
                    <td><?= $_POST['Date-in']; ?></td>
                    <td><?= $_POST['Date-out']; ?></td>
                    <td><?= $_POST['Cars']; ?></td>
                    <td><?= $_POST['Phone']; ?></td>
                    <td><?= $_POST['inlineCheckboxOptions'] ?></td>
                    <td><?php echo $Total ?></td>
                </tr>
            </tbody>
        </table>
    </section>

    <footer class="footer">
        <div class="p-2 mb-2 bg-light">
            <p class="text-center">Created by Ramadhan_1202204096</p>
        </div>
    </footer>
</body>
</html>