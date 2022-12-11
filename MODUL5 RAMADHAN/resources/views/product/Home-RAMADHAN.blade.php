<?php
// $connect = mysqli_connect("localhost", "root", "", "modul3",3307);
// require 'config/conn.php';
// require 'config/connector.php';
// session_start();
// if(!isset($_SESSION)) {
//     session_start();
// }

?>

@extends('index')

@section('content')

<section class="content">
        <div class="row justify-content-center mx-auto d-flex align-items-center">
            <div class="col">
                <p class="main-text">Selamat Datang di Show Room, </p>
                <p class="sub-text">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus</p>
                <div class="display">
                    <img class="card-img-top img-responsive d-block" src="asset/image/logo-ead.png" alt="Card image cap" id="imagemobil" style="height: auto; width: 64px; margin-top: 36px;">
                    <p class="nama" style="margin-left: 24px;">Ramadhan_1202204096</p>
                </div>
            </div>
            <div class="col">
                <img class="card-img-top img-responsive center-block d-block mx-auto" src="asset/image/mobilHome.png" alt="Card image cap" id="imagemobil" style="height: auto; width: 500px;">
                <!-- <a href='../config/logout.php' class="btn btn-light" type="button">Logout</a> -->
            </div>
        </div>
</section>

@endsection