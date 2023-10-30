<?php
include("asset/config.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "delete from kendaraan where id=$id";
    $query = mysqli_query($db, $sql);
    if ($query) {
        header('Location: list-kendaraan.php?statushapus=sukses');
    } else {
        header('Location: list-kendaraan.php?statushapus=gagal');
    }
}