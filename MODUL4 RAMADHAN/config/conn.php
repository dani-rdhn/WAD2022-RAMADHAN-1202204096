<?php

$connectLogin = mysqli_connect("localhost", "root", "", "wad_modul4_ramadhan", 3307);
$get_table2 = mysqli_query($connectLogin, "SELECT * FROM user_ramadhan");

?>