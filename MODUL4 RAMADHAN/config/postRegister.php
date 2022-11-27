<?php
 
    include('conn.php');
    if(isset($_POST['submit'])) {
        $idUser = rand(1400000,1500000);
        $email = $_POST['email'];
        $nama = $_POST['nama'];
        $noHp = $_POST['noHp'];
        $sandi = $_POST['sandi'];
        $confirm = $_POST['konfirmasiSandi'];

        if($sandi == $confirm) {
        
        $sql = "INSERT INTO user_ramadhan(id, email, nama, no_hp, password) 
        VALUES('$idUser', '$email', '$nama', '$noHp', '$sandi')";
        $sql_check = "SELECT email FROM user_ramadhan where email= '$email'";
        $cek = $connectLogin->query($sql_check);

        if (mysqli_query($connectLogin, $sql)) {
            session_start();
            $_SESSION['register'] = 'Berhasil';
            header("location:../pages/Login-RAMADHAN.php");
        }

        else {
            header("location:../pages/Register-RAMADHAN.php");
        }

        if ($cek -> num_rows > 0) {
            session_start();

            while ($row = $cek -> fetch_assoc()) {
                $email = $_POST['email'];
                $email_cek = $_POST['email'];
                $nama = $row['nama'];
                $uid = $row['id'];
            }

            if ($email == $email_cek) {
                $_SESSION['register'] = 'gagal';
                header("location:../pages/Register-RAMADHAN.php");
            }
        }
        // $query_value = mysqli_query($connectLogin, $query);
        // $query_run = mysqli_query($connect, $query);

        // if($query_value) {
        //     echo "<script>alert('Data telah ditambahkan')</script>";
        //     echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar-RAMADHAN.php'>";
        // } else {
        //     echo "<script>alert('Gagal ditambahkan')</script>";
        //     echo "<meta http-equiv='refresh' content='1 url=../pages/Home-RAMADHAN.php'>";
        // }
        }
    }
?>