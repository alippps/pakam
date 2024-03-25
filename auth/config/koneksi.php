<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "resto";

$kon = mysqli_connect($host, $user, $pass, $database);

if (!$kon) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
