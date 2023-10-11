<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= $habitacion[0]['nombre'] ?></h1>
                        <span class="color-text-a"><a href="index.php?ruta=inmueble&slug=<?= $habitacion[0]['inmueble_id'] ?>">Mas habitaciones</a></span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="home">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="habitaciones">Habitaciones</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?= $habitacion[0]['nombre'] ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Blog Single ======= -->
    <section class="news-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="news-img-box">
                        <img src="views/images/habitacion/<?= $habitacion[0]['imagen'] ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="post-information">
                        <ul class="list-inline text-center color-a">
                            <li class="list-inline-item mr-2">
                                <strong>Zona: </strong>
                                <span class="color-text-a"><?= $zona[0]['nombre'] ?></span>
                            </li>
                            <li class="list-inline-item">
                                <strong>precio: </strong>
                                <span class="color-text-a"><?= $habitacion[0]['precio'] ?> €/mes</span>
                            </li>
                        </ul>
                    </div>
                    <div class="post-content color-text-a">
                        <p class="post-intro">
                            <?= $habitacion[0]['text_intro'] ?>
                        </p>
                        <p>
                            <?= $habitacion[0]['text'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Blog Single-->

</main><!-- End #main -->