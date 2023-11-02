<main id="main">
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= $inmueble[0]['nombre'] ?></h1>
                        <span class="color-text-a"><?= $zona[0]['nombre'] ?></span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="home">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="inmuebles">inmuebles</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?= $inmueble[0]['nombre'] ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <section class="news-single nav-arrow-b mb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="news-img-box">
                        <img src="<?= RutaCtrl::url() ?>views/images/inmuebles/<?= $inmueble[0]['imagen'] ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="testimonial-text">
                        <?= $inmueble[0]['text'] ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End News Single-->

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid">
        <div class="container">
            <h3>Habitaciones</h3>
            <div class="row">
                <?php
                foreach ($habitaciones as $key => $habitacion) {
                    // var_dump($habitacion);
                ?>
                    <div class="col-md-4">
                        <div class="card-box-b <?= $habitacion['disponible'] ? 'card-shadow' : 'card-shadow2' ?> news-box">
                            <div class="img-box-b h-5 ">
                                <img src="<?= $galeryCtrl->getDest($habitacion['id']) ?>" alt="" class="img-b img-fluid rounded mx-auto d-block">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="<?= DOMAIN ?>habitacion/<?= $habitacion['id'] ?>"><?= $habitacion['nombre'] ?></a>
                                        </h2>

                                        <h3 class="text-white">
                                            <?= $habitacion['disponible'] ? '' : 'NO DISPONIBLE' ?>
                                        </h3>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b"><?= $habitacion['precio'] ?> €/mes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </section><!-- End Blog Grid-->

</main><!-- End #main -->