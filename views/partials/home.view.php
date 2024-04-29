<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

        <?php

        foreach ($habitacionesCarrusel as $key => $habitacion) {
            // var_dump($habitacion);
            $localizacion = $localizationCtrl->getById(array('id' => $habitacion['zona_id']));
        ?>
            <a href="<?= RutaCtrl::url() ?>habitacion/<?= $habitacion['id'] ?>">

                <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(<?= $galeriaCtrl->getDest($habitacion['id']) ?>)">
                    <div class="overlay overlay-a"></div>
                    <div class="intro-content display-table">
                        <div class="table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="intro-body">
                                            <p class="intro-title-top"><?= $localizacion[0]['nombre'] ?>
                                            </p>
                                            <h1 class="intro-title mb-4 ">
                                                <span class="color-b"><?= $habitacion['nombre'] ?></span>
                                            </h1>
                                            <p class="intro-subtitle intro-price">
                                                <a href="<?= RutaCtrl::url() ?>habitacion/<?= $habitacion['id'] ?>"><span class="price-a"><?= __('Rent') ?> | <?= $habitacion['precio'] ?> €</span></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <?php
        }
        ?>
    </div>
    <div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

<!-- ======= Services Section ======= -->
<section class="section-services section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a"><?= __("About Us") ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Card -->
            <div class="col-md-4">
                <div class="card justify-content-center border-0" style="width: 20rem; text-align: center;">
                    <span style="font-size: 10em;" class="card-title bi bi-cart"></span>
                    <div class="card-title-c align-self-center">
                        <h2 class="title-d">Mejores precios</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card justify-content-center border-0" style="width: 20rem; text-align: center;">
                    <span style="font-size: 10em;" class="card-title bi bi-calendar4-week"></span>
                    <div class="card-title-c align-self-center">
                        <h2 class="title-d">Alquiler</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card justify-content-center border-0" style="width: 20rem; text-align: center; ">
                    <span style="font-size: 10em;" class="card-title bi bi-card-checklist"></span>
                    <div class="card-title-c align-self-center">
                        <h2 class="title-d">Mejores precios</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->

<!-- ======= Latest Properties Section ======= -->
<section class="section-property section-t8 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Últimas habitaciones disponibles</h2>
                    </div>
                    <div class="title-link">
                        <a href="property-grid.html"><?= __("See more") ?>
                            <span class="bi bi-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="property-carousel" class="swiper">
            <div class="swiper-wrapper">
                <?php
                foreach ($haitacionesDestacadas as $key => $habitacion) {
                ?>

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="">
                                <img src="<?= $galeriaCtrl->getDest($habitacion['id']) ?>" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="habitacion/<?= $habitacion['id'] ?>"><?= $habitacion["nombre"] ?></a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a"><?= __('Rent') ?> | <?= $habitacion['precio'] ?> €</span>
                                        </div>
                                        <a href="habitacion/<?= $habitacion['id'] ?>" class="link-a"><?= __("Click here to view") ?>
                                            <span class="bi bi-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End carousel item -->
                <?php
                }

                ?>

            </div>
        </div>
        <!-- <div class="propery-carousel-pagination carousel-pagination"></div> -->

    </div>
</section><!-- End Latest Properties Section -->