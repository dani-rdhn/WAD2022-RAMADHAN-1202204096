<?php
    
    // if(!isset($_SESSION)) {
    // session_start();
    // }

    require 'conn.php' ;
    // require 'connector.php'; 
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(isset($_POST['check'])) {
            $check = TRUE;
        } else {
            $check = FALSE;
        }
        
        $dt_email = "SELECT * FROM user_ramadhan WHERE email = '$email' && password='$password'";

        $exeQuery = mysqli_query($connectLogin, $dt_email);
        $count = mysqli_num_rows($exeQuery);
        echo $count;

        if ($count > 0 ) {
            $result = mysqli_fetch_assoc($exeQuery);

            // if (password_verify($password, $result['password'])) {
                $_SESSION['email'] = $result['email'];
                $_SESSION['message'] = 'Anda berhasil login';
                header('Location:../index.php');
                exit();
            } else {
                $_SESSION['message error'] = 'Password anda salah';
                // header('location:../index.php');
                header('location:../pages/Login-RAMADHAN.php');
                exit();
            }
        }
        
        $_SESSION['message error'] = 'Gagal login';
        header('location:../pages/Login-RAMADHAN.php');

        // }
?>