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
        <a href="form-tambah-petugas.php" class="btn btn-primary mb-3">Tambah Petugas</a>
        <table id="myTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * from petugas";
                $query = mysqli_query($db, $sql);
                $no = 1;
                while ($petugas = mysqli_fetch_array($query)) : ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $petugas['id'] ?></td>
                    <td><?= $petugas['nama'] ?></td>
                    <td><?= $petugas['tanggal_lahir'] ?></td>
                    <td><a href="form-edit-petugas.php?id=<?= $petugas['id'] ?>" class=" btn btn-primary">Edit</a>
                        <a href="javascript:void(0);" onclick="confirmDelete(<?= $petugas['id'] ?>)"
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
            window.location.href = 'hapus-petugas.php?id=' + id;
        }
    });
}
</script>
</body>

</html>