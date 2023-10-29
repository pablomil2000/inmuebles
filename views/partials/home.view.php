<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

        <?php
        foreach ($habitacionesCarrusel as $key => $habitacion) {

            $inmueble = $inmuebleCtrl->getById(array('id' => $habitacion['inmueble_id']));
            $localizacion = $localizationCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));
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
                                                <a href="<?= RutaCtrl::url() ?>/habitacion/<?= $habitacion['id'] ?>"><span class="price-a">Desde | <?= $habitacion['precio'] ?> €</span></a>
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
                        <h2 class="title-a">Sobre nosotros</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="bi bi-cart"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Mejores precios</h2>
                        </div>
                    </div>
                    <div class="card-body-c">
                        <p class="content-c">
                            <!-- Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                            convallis a pellentesque
                            nec, egestas non nisi. -->
                        </p>
                    </div>
                    <div class="card-footer-c">
                        <!-- <a href="#" class="link-c link-icon">Read more
                            <span class="bi bi-chevron-right"></span>
                        </a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="bi bi-calendar4-week"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">Alquiler</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                        <div class="card-box-ico">
                            <span class="bi bi-card-checklist"></span>
                        </div>
                        <div class="card-title-c align-self-center">
                            <h2 class="title-c">No se que mas poner aqui</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->

<!-- ======= Latest Properties Section ======= -->
<section class="section-property section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Últimas habitaciones disponibles</h2>
                    </div>
                    <div class="title-link">
                        <a href="property-grid.html">Ver más
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
                                            <span class="price-a">rent | <?= $habitacion['precio'] ?> €</span>
                                        </div>
                                        <a href="habitacion/<?= $habitacion['id'] ?>" class="link-a">Click here to view
                                            <span class="bi bi-chevron-right"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>340m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>2</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>4</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Garages</h4>
                                                <span>1</span>
                                            </li>
                                        </ul>
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