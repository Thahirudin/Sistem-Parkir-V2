<?php
include("asset/config.php");
$query = "SELECT
  COUNT(CASE WHEN status = 'masuk' THEN 1 ELSE NULL END) AS total_kendaraan_masuk,
  COUNT(CASE WHEN status = 'keluar' THEN 1 ELSE NULL END) AS total_kendaraan_keluar,
  (SELECT COUNT(*) FROM petugas) AS total_petugas
FROM kendaraan;
";
$query = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($query);
include("asset/template/head.php"); ?>
<link rel="stylesheet" href="asset/css/index.css">
<?php
include("asset/template/header.php");
include("asset/template/navbar.php"); ?>
<!--Container Main start-->
<div class="height-100">
    <section class="pt-5 main">
        <div class="">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="menu rounded-4 px-3 py-3">
                        <div class="row  justify-content-between align-items-center ">
                            <div class="col-5">
                                <div><span class="fs-1 text-white fw-bold"><?= $data['total_petugas']; ?></span>
                                </div>
                                <div><span class="fs-1 text-white fw-bold">Petugas</span></div>
                            </div>
                            <div class="col-7">
                                <div class="menu-img">
                                    <img src="asset/img/karyawan.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu rounded-4 px-3 py-3">
                        <div class="row  justify-content-between align-items-center">
                            <div class="col-5">
                                <div><span class="fs-1 text-white fw-bold"><?= $data['total_kendaraan_masuk']; ?></span>
                                </div>
                                <div><span class="fs-1 text-white fw-bold">Kendaraan Masuk</span></div>
                            </div>
                            <div class="col-7">
                                <div class="menu-img">
                                    <img src="asset/img/kendaraan.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu rounded-4 px-3 py-3">
                        <div class="row  justify-content-between align-items-center">
                            <div class="col-5">
                                <div><span
                                        class="fs-1 text-white fw-bold"><?= $data['total_kendaraan_keluar']; ?></span>
                                </div>
                                <div><span class="fs-1 text-white fw-bold">Kendaraan Keluar</span></div>
                            </div>
                            <div class="col-7">
                                <div class="menu-img">
                                    <img src="asset/img/kendaraan.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--Container Main end-->
<?php include("asset/template/footer.php"); ?>
</body>

</html>