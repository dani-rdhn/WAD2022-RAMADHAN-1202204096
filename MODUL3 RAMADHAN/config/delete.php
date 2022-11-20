<?php
    include('config/connector.php');
    if(isset($_GET['deleteid'])) {
        $id=$_GET['deleteid'];

        $sql="DELETE FROM 'showroom_ramadhan_table' where id=$id_mobil";
        $result=mysqli_query($connect, $sql);
        if($result) {
            echo "Deleted";
        } else {
            die(mysqli_error($connect));
        }
    }
?>