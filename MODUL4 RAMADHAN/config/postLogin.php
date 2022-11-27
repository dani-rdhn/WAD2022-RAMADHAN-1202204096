<?php
    
    if(!isset($_SESSION)) {
    session_start();
    }

    require 'conn.php' ;
    // require 'connector.php'; 
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $check = $_POST['check'];
        
        $dt_username = "SELECT * FROM user_ramadhan WHERE email = '$email'";

        $exeQuery = mysqli_query($connectLogin, $dt_username);
        $count = mysqli_num_rows($exeQuery);
        echo $count;

        if (mysqli_num_rows($exeQuery) == 1 ) {
            $result = mysqli_fetch_assoc($exeQuery);

            if (password_verify($password, $result['password'])) {
                $_SESSION['email'] = $result['email'];
                $_SESSION['message'] = 'Anda berhasil login';
                header('Location:../index.php');
                exit();
            } else {
                $_SESSION['message error'] = 'Password anda salah';
                header('location:../index.php');
                // header('location:../pages/Login-RAMADHAN.php');
                exit();
            }
        }
        $_SESSION['message error'] = 'Gagal login';
        header('location:../pages/Login-RAMADHAN.php');

        }
?>