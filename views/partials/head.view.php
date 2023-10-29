    <!-- ======= Property Search Section ======= -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Buscar...</h3>
        </div>
        <span class="close-box-collapse right-boxed bi bi-x"></span>
        <div class="box-collapse-wrap form">
            <?php include('views\modules\busqueda.php'); ?>
        </div>
    </div><!-- End Property Search Section -->

    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="<?= RutaCtrl::url('home') ?>">Alquileres<span class="color-b">Compartidos</span></a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="<?= RutaCtrl::url('home') ?>">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= DOMAIN ?>inmuebles" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Propiedades
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= DOMAIN ?>inmuebles">Inmuebles</a></li>
                            <li><a class="dropdown-item" href="<?= DOMAIN ?>habitaciones">Habitaciones</a></li>
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " href="<?= DOMAIN ?>contacto">Contacto</a>
                    </li>

                </ul>
            </div>

            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                <i class="bi bi-search"></i>
            </button>

        </div>
    </nav><!-- End Header/Navbar -->