<?php

include('conn.php');
$DB = new database();session_start();
if (! isset($_SESSION['is_login'])) {
    header('location:login.php');
}

// Untuk Menampilkan Data Profil 
$Current = $_SESSION['email'];$sql = "SELECT * FROM users WHERE email = '$Current'";
$datas = mysqli_query($Koneksi,$sql);
// END

// untuk update profil
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];    
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];    
    $pw = $_POST['password'];
    
    if ($_POST['confirm_password'] == $_POST['password']){
        try {
            $sql = "UPDATE users SET nama='$nama', email='$email', No_hp='$no_hp', password='$pw' WHERE email='$email'";            $st = $Koneksi->prepare($sql);
            $st->execute();            
            header('Refresh:2');
            echo '<div class="alert alert-warning" role="alert">';
            echo 'Berhasil di update!';
            echo '</div>';        
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $C0NF1G5 = null;
    }
    else{
            header('Refresh:2');            
            echo '<div class="alert alert-danger" role="alert">';
            echo 'Gagal di update!';            
            echo '</div>';
    }
    }
else{
    if(isset($_POST['cancel'])){
        header('location: index.php');
    }
}

?>