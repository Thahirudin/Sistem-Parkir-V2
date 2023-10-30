<?php
include("asset/config.php");
if (isset($_POST['tambah'])) {
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $nomor_plat = $_POST['nomor_plat'];
    $status = $_POST['status'];
    $id_petugas = $_POST['id_petugas'];
    if($jenis_kendaraan == 'motor'){
        $tarif = 2000;
        $sql = "INSERT INTO kendaraan (jenis_kendaraan, nomor_plat, tanggal_keluar, status, id_petugas_masuk, tarif) VALUEs ('$jenis_kendaraan', '$nomor_plat', null, '$status', '$id_petugas', '$tarif' )";
        $query = mysqli_query($db, $sql);
        if ($query) {
            header('Location: list-kendaraan.php?status-tambah=sukses');
        } else {
            header('Location: list-kendaraan.php?status-tambah=gagal');
        }
    }else{
        $tarif = 3000;
        $sql = "INSERT INTO kendaraan (jenis_kendaraan, nomor_plat, tanggal_keluar, status, id_petugas_masuk, tarif) VALUEs ('$jenis_kendaraan', '$nomor_plat', null, '$status', '$id_petugas', '$tarif' )";
        $query = mysqli_query($db, $sql);
        if ($query) {
            header('Location: list-kendaraan.php?status-tambah=sukses');
        } else {
            header('Location: list-kendaraan.php?status-tambah=gagal');
        }
    }
    
} else {
    die("Akses Dilarang...");
}
mysqli_close($db);