<?php
include("asset/config.php");
include("asset/template/head.php"); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<style>
th {
    background-color: #005496;
    color: white;
}
</style>
<?php
include("asset/template/header.php");
include("asset/template/navbar.php"); ?>
<div class="height-100 pt-5">
    <div>
        <a href="form-kendaraan-masuk.php" class="btn btn-primary mb-3">Kendaraan Masuk</a>
        <table id="myTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Jenis Kendaraan</th>
                    <th>Nomor Plat</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Status</th>
                    <th>Id Petugas Masuk</th>
                    <th>Id Petugas Keluar</th>
                    <th>Tarif</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * from kendaraan";
                $query = mysqli_query($db, $sql);
                $no = 1;
                while ($kendaraan = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $kendaraan['id'] ?></td>
                    <td><?= $kendaraan['jenis_kendaraan'] ?></td>
                    <td><?= $kendaraan['nomor_plat'] ?></td>
                    <td><?= $kendaraan['tanggal_masuk'] ?></td>
                    <td> <?= $kendaraan['tanggal_keluar'] ?></td>
                    <td><?= $kendaraan['status'] ?></td>
                    <td><?= $kendaraan['id_petugas_masuk'] ?></td>
                    <td><?= $kendaraan['id_petugas_keluar'] ?></td>
                    <td><?= $kendaraan['tarif'] ?></td>
                    <td><?php
                            $tanggal_keluar = $kendaraan['tanggal_keluar'];
                            if ($tanggal_keluar == null) {
                                echo '<a href="form-kendaraan-keluar.php?id=' . $kendaraan['id'] . '" class=" btn btn-primary">Keluar</a>';
                            }
                            ?>
                        <a href="javascript:void(0);" onclick="confirmDelete(<?= $kendaraan['id'] ?>)"
                            class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php $no++;
                endwhile; ?>
                <!-- Tambahkan baris lain sesuai dengan data yang Anda miliki -->
            </tbody>
        </table>

    </div>
</div>
<?php
if (isset($_GET['status-tambah'])) {
    if ($_GET['status-tambah'] == 'sukses') {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo "<script>";
        echo 'Swal.fire({
                title: "Berhasil",
                text: "Data Sudah Berhasil di Tambah",
                icon: "success"
            }).then(function() {
                window.location.href = window.location.href.split("?")[0];
            });';
        echo "</script>";
    } else {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo "<script>";
        echo 'Swal.fire({
                title: "Gagal",
                text: "Data Gagal di Tambah",
                icon: "warning"
            }).then(function() {
                window.location.href = window.location.href.split("?")[0];
            });';
        echo "</script>";
    }
} else if (isset($_GET['status-edit'])) {
    if ($_GET['status-edit'] == 'sukses') {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo "<script>";
        echo 'Swal.fire({
                title: "Berhasil",
                text: "Data Sudah Berhasil di Update",
                icon: "success"
            }).then(function() {
                window.location.href = window.location.href.split("?")[0];
            });';
        echo "</script>";
    } else {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo "<script>";
        echo 'Swal.fire({
                title: "Gagal",
                text: "Data Gagal di Update",
                icon: "warning"
            }).then(function() {
                window.location.href = window.location.href.split("?")[0];
            });';
        echo "</script>";
    }
} else if (isset($_GET['statushapus'])) {
    if ($_GET['statushapus'] == 'sukses') {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo "<script>";
        echo 'Swal.fire({
                title: "Berhasil",
                text: "Data Sudah Berhasil di Hapus",
                icon: "success"
            }).then(function() {
                window.location.href = window.location.href.split("?")[0];
            });';
        echo "</script>";
    } else {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo "<script>";
        echo 'Swal.fire({
                title: "Gagal",
                text: "Data Gagal di Hapus",
                icon: "warning"
            }).then(function() {
                window.location.href = window.location.href.split("?")[0];
            });';
        echo "</script>";
    }
}
?>
<?php include("asset/template/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});

function confirmDelete(id) {
    Swal.fire({
        title: 'Konfirmasi Hapus',
        text: 'Anda yakin ingin menghapus anggota ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna mengkonfirmasi, maka arahkan ke halaman yang akan menghapus data
            window.location.href = 'hapus-kendaraan.php?id=' + id;
        }
    });
}
</script>
</body>

</html>