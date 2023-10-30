<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> <a href="index.php" class="nav_logo"> <i class='fa-solid fa-square-parking  nav_logo-icon'></i>
                <span class="nav_logo-name">SIParkir
                    V2</span> </a>
            <div class="nav_list"> <a href="index.php" class="nav_link ">
                    <i class='bx bx-grid-alt nav_icon'></i>
                    <span
                        class="nav_name <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">Dashboard</span>
                </a> <a href="list-petugas.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span
                        class="nav_name <?php if (basename($_SERVER['PHP_SELF']) == 'list-petugas.php') echo 'active'; ?>">Petugas</span>
                </a> <a href="list-kendaraan.php" class="nav_link"> <i class='bx bx-car nav_icon'></i> <span
                        class="nav_name <?php if (basename($_SERVER['PHP_SELF']) == 'list-kendaraan.php')                                                                                                                                                                                                                                                            echo 'active'; ?>">Kendaraan</span>
                </a>
            </div>
        </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                class="nav_name">SignOut</span> </a>
    </nav>
</div>