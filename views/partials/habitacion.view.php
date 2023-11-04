<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= $habitacion[0]['nombre'] ?></h1>
                        <span class="color-text-a"><a href="<?= RutaCtrl::url() ?>habitaciones"><?= __('More rooms') ?></a></span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="<?= RutaCtrl::url('home') ?>"><?= __('Home') ?></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="<?= RutaCtrl::url('habitaciones') ?>"><?= __('Rooms') ?></a>
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
                        <img src="<?= $galeriaCtrl->getDest($id) ?>" alt="" class="img-fluid" id="imagen-principal">
                    </div>
                </div>

                <div class="col-sm-4 miniaturas">
                    <?php
                    foreach ($galery as $key => $image) {
                    ?>
                        <div class="news-img-box mb-1">
                            <img src="<?= $galeriaCtrl->route . $id . "/" . $image['name'] ?>" alt="" id="galeria1" class="img-fluid" id="imagen-principal" data-imagen="<?= $galeriaCtrl->route . $id . "/" . $image['name'] ?>">
                        </div>
                    <?php
                    }
                    ?>

                </div>
                <div class=" col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="post-information">
                        <ul class="list-inline text-center color-a">
                            <li class="list-inline-item mr-2">
                                <strong><?= __('Zone') ?>: </strong>
                                <span class="color-text-a"><?= $zona[0]['nombre'] ?></span>
                            </li>
                            <li class="list-inline-item">
                                <strong><?= __('Price') ?>: </strong>
                                <span class="color-text-a"><?= $habitacion[0]['precio'] ?> €/mes</span>
                            </li>

                            <hr />

                            <div class="d-flex justify-content-around">
                                <div class="row d-flex justify-content-around">
                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __('Room type') ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
                                            <li class="list-group-item"><?= $habitacion[0]['doble'] ? __('Double') : __('Single') ?></li>
                                        </ul>
                                    </div>
                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __('Mixed') ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
                                            <li class="list-group-item"><?= $habitacion[0]['mixto'] ? 'Si' : 'No' ?></li>
                                        </ul>
                                    </div>
                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __('Plant') ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
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





                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __('Ascensor') ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
                                            <li class="list-group-item">
                                                Si
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __("Private bathroom") ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
                                            <li class="list-group-item"><?= $habitacion[0]['banio'] ? 'Si' : 'No' ?></li>
                                        </ul>
                                    </div>

                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __('Pool') ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
                                            <li class="list-group-item"><?= $habitacion[0]['piscina'] ? 'Si' : 'No' ?></li>
                                        </ul>
                                    </div>



                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __('Terrace') ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
                                            <li class="list-group-item"><?= $habitacion[0]['terraza'] ? 'Si' : 'No' ?></li>
                                        </ul>
                                    </div>



                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __('Lock') ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
                                            <li class="list-group-item">
                                                <?= __('Yes') ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __('Heating') ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
                                            <li class="list-group-item"><?= $habitacion[0]['calefaccion'] ? 'Si' : 'No' ?></li>
                                        </ul>
                                    </div>




                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __('Aire Acondicionado') ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
                                            <li class="list-group-item">
                                                No
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __('Wifi') ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
                                            <li class="list-group-item">
                                                Si
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card col-3">
                                        <div class="card-header card-head-bg border border-2 border-bottom-0 border-dark">
                                            <?= __('Estancia mínima') ?>
                                        </div>
                                        <ul class="list-group list-group-flush border border-2 border-dark">
                                            <li class="list-group-item">
                                                6 <?= __('Months') ?>
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