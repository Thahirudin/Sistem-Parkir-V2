<?php
include("asset/config.php");
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $sql = "UPDATE petugas SET nama='$nama', tanggal_lahir='$tanggal_lahir' where id = '$id'";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: list-petugas.php?status-edit=sukses');
    } else {
        header('Location: list-petugas.php?status-edit=gagal');
    }
} else {
    die("Akses Dilarang...");
}