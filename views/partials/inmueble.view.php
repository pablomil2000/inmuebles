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
                <div class="col-sm-8">
                    <div class="news-img-box">
                        <img src="<?= $galeryCtrl->getDest($id) ?>" alt="" class="img-fluid" id="imagen-principal">
                    </div>
                </div>

                <div class="col-sm-4 miniaturas mt-2">
                    <?php
                    foreach ($galery as $key => $image) {
                    ?>
                        <div class="news-img-box mb-1">
                            <img style="max-width: 15vw;" src="<?= $galeryCtrl->route . $id . "/" . $image['name'] ?>" alt="" id="galeria1" class="img-fluid" id="imagen-principal" data-imagen="<?= $galeryCtrl->route . $id . "/" . $image['name'] ?>">
                        </div>
                    <?php
                    }
                    ?>

                </div>

                <div class="mt-3 col-sm-12 d-flex flex-column ">
                    <h3>Precio: <?= $inmueble[0]['precio'] ?> €/mes</h3>
                    <p><?= $inmueble[0]['text'] ?></p>
                </div>
            </div>
        </div>
    </section><!-- End News Single-->

</main><!-- End #main -->