<?php
include("asset/config.php");
if(isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $sql = "INSERT into petugas (nama, tanggal_lahir) value ('$nama', '$tanggal_lahir')";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: list-petugas.php?status-tambah=sukses');
    }else{
        header('Location: list-petugas.php?status-tambah=gagal');
    }
}else{
    die("Akses Dilarang...");
}
mysqli_close($db);