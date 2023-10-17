<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="home" class="nav-link">Inicio</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="logout" class="nav-link">Salir</a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
            <!-- Brand Logo -->
            <a href="home" class="brand-link text-decoration-none">
                <img src=" views/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin panel</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar " style="height: 94vh;">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="views/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-decoration-none"><?= $user[0]['nombre'] ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class=" mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                                with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="home" class="nav-link <?= !isset($_GET['ruta']) || $_GET['ruta'] == 'home' ? 'active' : '' ?> ">
                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                <p>
                                    <i class="nav-icon fas fa-home"></i>
                                    Inicio
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="usuarios" class="nav-link <?= isset($_GET['ruta']) && $_GET['ruta'] == 'usuarios' ? 'active' : '' ?>">
                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                <p>
                                    <i class="nav-icon fas fa-users"></i>
                                    Usuarios
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="localizaciones" class="nav-link <?= isset($_GET['ruta']) && $_GET['ruta'] == 'localizaciones' ? 'active' : '' ?>">
                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                <p>
                                    <i class="nav-icon fas fa-th-list"></i>
                                    Localizaciones
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="inmuebles" class="nav-link <?= isset($_GET['ruta']) && $_GET['ruta'] == 'inmuebles' ? 'active' : '' ?>">
                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                <p>
                                    <i class="nav-icon fab fa-product-hunt"></i>
                                    Inmuebles
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="habitaciones" class="nav-link <?= isset($_GET['ruta']) && $_GET['ruta'] == 'habitaciones' ? 'active' : '' ?>">
                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                <p>
                                    <i class="nav-icon fas fa-address-card"></i>
                                    Habitaciones
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="comentarios" class="nav-link <?= isset($_GET['ruta']) && $_GET['ruta'] == 'comentarios' ? 'active' : '' ?>">
                                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                <p>
                                    <i class="nav-icon fas fa-handshake-angle"></i>
                                    Comentarios
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>