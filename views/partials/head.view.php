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


            <h1><a class="navbar-brand text-brand" href="<?= RutaCtrl::url('home') ?>">Alquileres<span class="color-b">Compartidos</span><span class="fs-6 text">.com</span></a></h1>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link <?= !isset($_GET['url']) || $_GET['url'] == 'home' ? 'active' : '' ?>" href="<?= RutaCtrl::url('home') ?>"><?= __('Home') ?></a>
                    </li>

                    <li class="nav-item dropdown <?= isset($_GET['url']) && ($_GET['url'] == 'inmuebles' || $_GET['url'] == 'habitaciones') ? 'active' : '' ?>">
                        <a class=" nav-link dropdown-toggle" href="<?= RutaCtrl::url('inmuebles') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= __('Properties') ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= RutaCtrl::url('inmuebles') ?>"><?= __('Apartment') ?></a></li>
                            <li><a class="dropdown-item" href="<?= RutaCtrl::url('habitaciones') ?>"><?= __('Rooms') ?></a></li>
                        </ul>
                    </li>


                    <!-- <li class="nav-item">
                        <a class="nav-link " href="<?= RutaCtrl::url('contacto') ?>"><?= __('Contact') ?></a>
                    </li> -->



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= isset($_GET['url']) && ($_GET['url'] == 'contacto' || $_GET['url'] == 'hazte-cliente') ? 'active' : '' ?>" href="<?= RutaCtrl::url('inmuebles') ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= __('Contact') ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= RutaCtrl::url('contacto') ?>"><?= __('Ask for information') ?></a></li>
                            <li><a class="dropdown-item" href="<?= RutaCtrl::url('hazte-cliente') ?>"><?= __('Hazte cliente') ?></a></li>
                        </ul>
                    </li>

                </ul>
                <li class="nav-item d-flex d-xl-none">
                    <a class="nav-link <?= $_SESSION['lang'] == 'es' ? 'active' : '' ?>" href="<?= RutaCtrl::url() ?>?lang=es"><img src="<?= RutaCtrl::url("views/images/png/002-spain.png") ?>" alt=""></a>
                </li>
                <li class="nav-item d-flex d-xl-none">
                    <a class="nav-link <?= $_SESSION['lang'] == 'en' ? 'active' : '' ?>" href="<?= RutaCtrl::url() ?>?lang=en"><img src="<?= RutaCtrl::url("views/images/png/003-united-kingdom.png") ?>" alt=""></a>
                </li>
                <li class="nav-item d-flex d-xl-none">
                    <a class="nav-link <?= $_SESSION['lang'] == 'ar' ? 'active' : '' ?>" href="<?= RutaCtrl::url() ?>?lang=ar"><img src="<?= RutaCtrl::url("views/images/png/001-saudi-arabia.png") ?>" alt=""></a>
                </li>
            </div>

            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" style="margin-right: 3em;">
                <i class="bi bi-search"></i>
            </button>



        </div>
        <ul class="navbar-nav d-none d-xl-flex" style="margin-right: 7vw;">
            <li class="nav-item">
                <a class="nav-link <?= $_SESSION['lang'] == 'es' ? 'active' : '' ?>" href="<?= RutaCtrl::url() ?>?lang=es"><img src="<?= RutaCtrl::url("views/images/png/002-spain.png") ?>" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $_SESSION['lang'] == 'en' ? 'active' : '' ?>" href="<?= RutaCtrl::url() ?>?lang=en"><img src="<?= RutaCtrl::url("views/images/png/003-united-kingdom.png") ?>" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $_SESSION['lang'] == 'ar' ? 'active' : '' ?>" href="<?= RutaCtrl::url() ?>?lang=ar"><img src="<?= RutaCtrl::url("views/images/png/001-saudi-arabia.png") ?>" alt=""></a>
            </li>
        </ul>

    </nav><!-- End Header/Navbar -->