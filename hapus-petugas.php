<?php 
include("asset/config.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "delete from petugas where id=$id";
    $query = mysqli_query($db, $sql);
    if ($query){
        header('Location: list-petugas.php?statushapus=sukses');
    }else{
        header('Location: list-petugas.php?statushapus=gagal');
    }
}