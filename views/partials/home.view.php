<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

        <?php
        foreach ($habitacionesCarrusel as $key => $habitacion) {

            $inmueble = $inmuebleCtrl->getById(array('id' => $habitacion['inmueble_id']));
            $localizacion = $localizationCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));
        ?>
            <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(views/images/<?= $habitacion['imagen'] ?>)">
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
                                            <a href="index.php?ruta=habitacion&slug=<?= $habitacion['id'] ?>"><span class="price-a">Desde | <?= $habitacion['precio'] ?> €</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="swiper-pagination"></div>
</div><!-- End Intro Section -->