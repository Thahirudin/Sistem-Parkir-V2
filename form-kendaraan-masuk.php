<?php
include("asset/config.php");
include("asset/template/head.php"); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<?php
include("asset/template/header.php");
include("asset/template/navbar.php"); ?>
<div class="height-100 pt-5">
    <div>
        <form action="proses-kendaraan-masuk.php" method="post">
            <div class="mb-3">
                <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                <select class="form-select" aria-label="Default select example" name='jenis_kendaraan' required>
                    <option value="Motor">Motor</option>
                    <option value="Mobil">Mobil</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nomor_plat" class="form-label">Nomor Plat</label>
                <input type="text" class="form-control" id="nomor_plat" name="nomor_plat" autocomplete="off" required>
            </div>
            <input type="text" class="form-control" id="status" name="status" autocomplete="off" value='masuk' hidden>
            <div class="mb-3">
                <label for="id_petugas" class="form-label">Id Petugas</label>
                <input type="text" class="form-control" id="id_petugas" name="id_petugas" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
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