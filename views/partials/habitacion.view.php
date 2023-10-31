<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= $habitacion[0]['nombre'] ?></h1>
                        <span class="color-text-a"><a href="<?= RutaCtrl::url() ?>inmueble/<?= $habitacion[0]['inmueble_id'] ?>">Mas habitaciones</a></span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= RutaCtrl::url() ?>home">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="<?= RutaCtrl::url() ?>habitaciones">Habitaciones</a>
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
                <div class="col-sm-8">
                    <div class="news-img-box">
                        <img src="<?= $galeriaCtrl->getDest($id) ?>" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="col-sm-4">
                    <?php
                    foreach ($galery as $key => $image) {
                    ?>
                        <div class="news-img-box mb-1">
                            <img src="<?= $galeriaCtrl->route . $slug . "/" . $image['name'] ?>" alt="" class="img-fluid">
                        </div>
                    <?php
                    }
                    ?>

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

                            <hr />

                            <div class="d-flex justify-content-around">
                                <div class="row d-flex justify-content-around">
                                    <div class="card col-3 m-2 p-0">
                                        <div class="card-header card-head-bg">
                                            Tipo habitacion
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?= $habitacion[0]['doble'] ? 'Doble' : 'Individual' ?></li>
                                        </ul>
                                    </div>

                                    <div class="card col-3 m-2">
                                        <div class="card-header">
                                            Piso mixto
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?= $habitacion[0]['mixto'] ? 'Si' : 'No' ?></li>
                                        </ul>
                                    </div>

                                    <div class="card col-3 m-2">
                                        <div class="card-header">
                                            Baño privado
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?= $habitacion[0]['banio'] ? 'Si' : 'No' ?></li>
                                        </ul>
                                    </div>

                                    <div class="card col-3 m-2">
                                        <div class="card-header">
                                            Piscina
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?= $habitacion[0]['piscina'] ? 'Si' : 'No' ?></li>
                                        </ul>
                                    </div>

                                    <div class="card col-3 m-2">
                                        <div class="card-header">
                                            Calefacción
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?= $habitacion[0]['piscina'] ? 'Si' : 'No' ?></li>
                                        </ul>
                                    </div>

                                    <div class="card col-3 m-2">
                                        <div class="card-header">
                                            Terraza
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?= $habitacion[0]['piscina'] ? 'Si' : 'No' ?></li>
                                        </ul>
                                    </div>

                                    <div class="card col-3 m-2">
                                        <div class="card-header">
                                            Planta
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <?php
                                                switch ($habitacion[0]['piso']) {
                                                    case '0':
                                                        echo 'Planta baja';
                                                        break;
                                                    case '999':
                                                        echo 'Ultimo piso';
                                                        break;

                                                    default:
                                                        echo $habitacion[0]['piso'];
                                                        break;
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="card col-3 m-2">
                                        <div class="card-header">
                                            Cerradura
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                Si
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="card col-3 m-2">
                                        <div class="card-header">
                                            Wifi
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                Si
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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