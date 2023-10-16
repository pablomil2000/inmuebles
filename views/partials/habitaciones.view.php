<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Habitaciones</h1>
                        <span class="color-text-a">Estas son las habitaciones que mejor se adaptan a tus necesidades</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="home">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Habitaciones
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid">
        <div class="container">
            <div class="row">

                <?php
                foreach ($habitaciones as $key => $habitacion) {

                    $inmueble = $inmuebleCtrl->getById(array('id' => $habitacion['inmueble_id']));
                    $zona = $localizationCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));

                ?>
                    <div class="col-md-4">
                        <div class="card-box-b <?= $habitacion['disponible'] ? 'card-shadow' : 'card-shadow2' ?> news-box">
                            <div class="img-box-b">
                                <img src="<?= $galeriaCtrl->getDest($habitacion['id']) ?>" alt="" class="img-b img-fluid" width="100%">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <!-- <a href="#" class="category-b">Travel</a> -->
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="index.php?ruta=habitacion&slug=<?= $habitacion['id'] ?>">
                                                <?= $habitacion['nombre'] ?>
                                            </a>
                                        </h2>
                                        <h4 class="text-white">
                                            <?= $habitacion['disponible'] ? '' : 'NO DISPONIBLE' ?>
                                        </h4>
                                        <span class="date-b">
                                            Zona: <?= $zona[0]['nombre'] ?>
                                        </span>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">
                                            <?= $habitacion['precio'] ?> €/mes
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>

            <div class="row d-flex">
                <div class="col-sm-12">
                    <nav class="pagination-a">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <span class="bi bi-chevron-left"></span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="#">
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Blog Grid-->

</main><!-- End #main -->