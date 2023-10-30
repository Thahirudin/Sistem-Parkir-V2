<?php
include("asset/config.php");
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $tanggal_keluar = $_POST['tanggal_keluar'];
    $status = $_POST['status'];
    $id_petugas_keluar = $_POST['id_petugas_keluar'];
    $sql = "UPDATE kendaraan SET tanggal_keluar='$tanggal_keluar', status='$status', id_petugas_keluar='$id_petugas_keluar' where id = '$id'";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: list-kendaraan.php?status-edit=sukses');
    } else {
        header('Location: list-kendaraan.php?status-edit=gagal');
    }
} else {
    die("Akses Dilarang...");
}