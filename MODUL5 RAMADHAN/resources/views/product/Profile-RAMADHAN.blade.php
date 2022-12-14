<?php
include('../config/conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Praktikum WAD Modul 4</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="../css/myitem.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
</head>
<body class="bg-white">
    <section class="nav-top">
            <nav class="navbar navbar-expand-lg py-3 bg-primary justify-content-between">
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 100px;">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="">MyCar</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto" style="margin-right: 120px;">
                        <li class="nav-item mx-1">
                            <a href="Add-RAMADHAN.php" class="btn btn-light" type="button">Add Car</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a href="Profile-RAMADHAN.php" class="btn btn-light" type="button">Profile</a>
                        </li>
                    </ul>
                </div>
            </nav>
    </section>

    <div class="container my-3">
        <div class="card centered mx-auto" style="width: 70%;">
            <div class="card-body">
                <h2 class="card-title" align="center">Profile</h2>
                <form method="post" action="">
                    <?php
                        while ($datasku = mysqli_fetch_assoc($datas)) {
                    ?>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control-plaintext" name="email" value="<?php echo $datasku['email'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama" value="<?php echo $datasku['nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="no_hp" value="<?php echo $datasku['No_hp'] ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password Confirm</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="confirm_password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary btn-block" name="update">Submit</button>
                            <button type="submit" class="btn btn-light btn-block" name="cancel">Cancel</button>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
    <!-- end of content -->
</body>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Created By :</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <p>Nama = salma andini sujadi</p>
       <p>NIM  = 1202194180   </p>
      </div>
     
    </div>
  </div>
</div>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    ?? 2021 Copyright:
    <a class="text-dark" data-toggle="modal" data-target="#exampleModal">salma_1202194180</a>
  </div>
  <!-- Copyright -->
</footer>
</html>