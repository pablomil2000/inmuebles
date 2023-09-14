<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"><?= $habitacion[0]['nombre'] ?></h1>
                        <span class="color-text-a">Habitaciones</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Habitaciones
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
                        <img src="views/images/<?= $habitacion[0]['imagen'] ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="post-information">
                        <ul class="list-inline text-center color-a">
                            <li class="list-inline-item mr-2">
                                <strong>Zona: </strong>
                                <span class="color-text-a">Travel</span>
                            </li>
                            <li class="list-inline-item">
                                <strong>Date: </strong>
                                <span class="color-text-a">19 Apr. 2017</span>
                            </li>
                        </ul>
                    </div>
                    <div class="post-content color-text-a">
                        <p class="post-intro">
                            Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur
                            <strong>adipiscing</strong> elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                            Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                        </p>
                        <p>
                            Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac
                            lectus. Curabitur
                            non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Curabitur non
                            nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada.
                            Quisque velit nisi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Blog Single-->

</main><!-- End #main -->