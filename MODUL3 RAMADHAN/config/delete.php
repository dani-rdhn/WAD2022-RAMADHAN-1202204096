<?php
    include('connector.php');

    if(isset($_POST["delete_car"])) {
        $id = $_POST["id_mobil_hapus"];

        $query = "DELETE FROM showroom_ramadhan_table WHERE id_mobil=$id";

        $query_delete = mysqli_query($connect, $query);
    }

    header("Location:/WAD2022-RAMADHAN-1202204096/MODUL3%20RAMADHAN/pages/ListCar-RAMADHAN.php");
?>