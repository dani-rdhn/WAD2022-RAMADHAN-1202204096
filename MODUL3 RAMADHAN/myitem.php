<?php
    include('config/connector.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP Praktikum WAD Modul 3</title>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link rel="stylesheet" href="style/myitem.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
        crossorigin="anonymous">
    </head>
    <body>
        <section class="nav-top">
            <nav class="navbar navbar-expand-lg py-3 bg-primary">
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 100px;">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="Index.php">Home</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="">MyCar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="content">
            <p class="main-text">Tambah Mobil</p>
            <p class="sub-text">Tambah Mobil Baru Anda Ke List Show Room</p>
            <div class="container">
                <div class="row">
                    <?php
                        $query = mysqli_query($connect, "SELECT * FROM showroom_ramadhan_table");
                        if($query) {
                            while($row = mysqli_fetch_array($query)){
                                
                    ?>
                    <div class="col-4">
                        <div class="card">
                        <img class="card-img-top" src="asset/image/ <?= $row['foto_mobil'] ?>" width="300" title="" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['nama_mobil'] ?></h5>
                                <p class="card-text"><?= $row['deskripsi'] ?></p>
                            </div>
                            <div class="card-body">
                                <a href="itemdetail.php?id=<?php echo $row['id_mobil']; ?>" class="btn btn-primary">detail</a>
                                <a href="delete.php?deleteid='.$id_mobil.'" class="btn btn-danger">delete</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
    </body>
</html>