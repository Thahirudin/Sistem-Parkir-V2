<?php
include("asset/config.php");
$id = $_GET['id'];
$query = "SELECT * from petugas where id = $id";
$query = mysqli_query($db, $query);
$petugas = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
include("asset/template/head.php");
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<?php
include("asset/template/header.php");
include("asset/template/navbar.php"); ?>
<div class="height-100 pt-5">
    <div>
        <form action="proses-edit-petugas.php" method="post">
            <input type="number" class="form-control" id="id" name="id" autocomplete="off" value='<?= $id; ?>'>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" autocomplete="off"
                    value='<?= $petugas['nama']; ?>'>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" autocomplete="off"
                    value='<?= $petugas['tanggal_lahir']; ?>'>
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Submit</button>
        </form>
    </div>
</div>
<?php include("asset/template/footer.php"); ?>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>
</body>

</html>