<main id="main">
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Inmueble</h1>
                        <span class="color-text-a"><?= $zona[0]['nombre'] ?></span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                News Grid
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
                        <img src="views/images/inmuebles/<?= $inmueble[0]['imagen'] ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End News Single-->

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid">
        <div class="container">
            <div class="row">
                <?php
                foreach ($habitaciones as $key => $habitacion) {
                ?>
                    <div class="col-md-4">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b h-5 ">
                                <img src="<?= $galeryCtrl->getDest($habitacion['id']) ?>" alt="" class="img-b img-fluid rounded mx-auto d-block">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="index.php?ruta=habitacion&slug=<?= $habitacion['id'] ?>"><?= $habitacion['nombre'] ?></a>
                                        </h2>
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
            <div class="row">
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