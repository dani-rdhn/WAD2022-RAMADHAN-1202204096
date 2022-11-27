<?php
// $connect = mysqli_connect("localhost", "root", "", "modul3", 3307);
$connectLogin = mysqli_connect("localhost", "root", "", "wad_modul4_ramadhan", 3307);
// if(!$connect) {
//     die("Tidak terkoneksi");
// } else {
//     echo "Terkoneksi";
// }
// $get_table1 = mysqli_query($connect, "SELECT * FROM showroom_ramadhan_table");
$get_table2 = mysqli_query($connectLogin, "SELECT * FROM user_ramadhan");
// $jumlah_mobil = mysqli_num_rows($get_table1);
?>