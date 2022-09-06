<div class="navbar-custom">
    
    <ul class="list-unstyled topnav-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                <span class="d-none d-sm-inline-block ml-1 font-weight-medium">
                    <?php echo $_SESSION['ADMIN_USERNAME']; ?>
                </span>
                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow text-white m-0">
                        Welcome <?php echo $_SESSION['ADMIN_USERNAME']; ?>
                    </h6>
                </div>

                <!-- item-->
                <a href="profile.php" class="dropdown-item notify-item">
                    <i class="mdi mdi-account"></i>
                    <span>Profile</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="logout.php" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                <i class="mdi mdi-settings-outline noti-icon"></i>
            </a>
        </li>

    </ul>

    <!-- Logo Start -->

    <div class="logo-box">
        <a href="index.php" class="logo text-center logo-dark">
            <span class="logo-lg">
                <img src="./assets/images/logo.png" alt="" height="22">
            </span>
            <span class="logo-sm">
                <img src="./assets/images/logo-sm.png" alt="" height="24">
            </span>
        </a>

        <a href="index.php" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="./assets/images/logo-light.png" alt="" height="22">
            </span>
            <span class="logo-sm">
                <img src="./assets/images/logo-sm-light.png" alt="" height="24">
            </span>
        </a>
    </div>

    <!-- Logo End -->



    <!-- Toogle Button Start -->

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect waves-light">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>
    </ul>

    <!-- Toogle Button End -->

</div>