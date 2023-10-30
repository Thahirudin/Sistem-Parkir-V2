<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "parkir";
$db = mysqli_connect($server, $user, $password, $database);
if (!$db){
    die("Gagal Terhubung Dengan Database: " . mysqli_connect_error());
}