<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-end mb-0">


        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" href="../../Auth/logout.php">
                <span class="pro-user-name ms-1">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </span>
            </a>
        </li>

        <!-- <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                <i class="fe-settings noti-icon"></i>
            </a>
        </li> -->

    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="" class="logo logo-light text-center">
            <h5 class=" text-white mt-3">Admin Panel</h5>
        </a>
        <a href="" class="logo logo-dark text-center">
            <span class="logo-sm">
                <img src="../../assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="../../assets/images/logo-dark.png" alt="" height="16">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
        <li>
            <button class="button-menu-mobile disable-btn waves-effect">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li>
            <?php
            if ($halaman !== 'Dashboard') {
                echo "<h4 class='page-title-main'>Halaman $halaman</h4>";
            } else {
            ?>
                <h4 class='page-title-main'>Selamat Datang Admin Sistem Inventory SMP YPK Kotaraja</h4>
            <?php } ?>
        </li>

    </ul>

    <div class="clearfix"></div>

</div>