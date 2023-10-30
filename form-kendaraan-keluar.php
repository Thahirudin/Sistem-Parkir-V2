<?php
include("asset/config.php");
$id = $_GET['id'];
$query = "SELECT * from kendaraan where id = $id";
$query = mysqli_query($db, $query);
$kendaraan = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
include("asset/template/head.php"); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<?php
include("asset/template/header.php");
include("asset/template/navbar.php"); ?>
<div class="height-100 pt-5">
    <div>
        <form action="proses-kendaraan-keluar.php" method="post">
            <input type="text" name='id' value='<?= $id ?>' hidden>
            <div class="mb-3">
                <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                <?php $jenis = $kendaraan['jenis_kendaraan']; ?>
                <select class="form-select" aria-label="Default select example" name='jenis_kendaraan' disabled>
                    <option value="Motor" <?= ($jenis == 'Motor') ? "selected" : "" ?>>Motor</option>
                    <option value="Mobil" <?= ($jenis == 'Mobil') ? "selected" : "" ?>>Mobil</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nomor_plat" class="form-label">Nomor Plat</label>
                <input type="text" class="form-control" id="nomor_plat" name="nomor_plat" autocomplete="off"
                    value='<?= $kendaraan['nomor_plat'] ?>' disabled>
            </div>
            <div class="mb-3">
                <label for="tanggal_masuk" class="form-label">tanggal_masuk</label>
                <input type="datetime-local" class="form-control" id="tanggal_masuk" name="tanggal_masuk"
                    autocomplete="off" value='<?= $kendaraan['tanggal_masuk'] ?>' disabled>
            </div>
            <div class="mb-3">
                <label for="tanggal_keluar" class="form-label">tanggal_keluar</label>
                <input type="datetime-local" class="form-control" id="tanggal_keluar" name="tanggal_keluar"
                    autocomplete="off" value='<?= $kendaraan['tanggal_keluar'] ?>' required>
            </div>
            <input type="text" class="form-control" id="status" name="status" autocomplete="off" value='keluar' hidden>
            <div class="mb-3">
                <label for="tarif" class="form-label">Tarif</label>
                <input type="text" class="form-control" id="tarif" name="tarif" autocomplete="off"
                    value='<?= $kendaraan['tarif'] ?>' disabled>
            </div>
            <div class="mb-3">
                <label for="id_petugas" class="form-label">Id Petugas Masuk</label>
                <input type="text" class="form-control" id="id_petugas" name="id_petugas" autocomplete="off"
                    value='<?= $kendaraan['id_petugas_masuk'] ?>' disabled>
            </div>
            <div class="mb-3">
                <label for="id_petugas_keluar" class="form-label">Id Petugas Keluar</label>
                <input type="text" class="form-control" id="id_petugas_keluar" name="id_petugas_keluar"
                    autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Submit</button>
        </form>
    </div>
</div>
<?php include("asset/template/footer.php"); ?>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $(' #myTable').DataTable();
});
</script>
</body>

</html>