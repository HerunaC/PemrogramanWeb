<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "spp_master"; 

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

