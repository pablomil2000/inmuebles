<main id="main">

  <!-- ======= Intro Single ======= -->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?= __('Apartment') ?></h1>
            <span class="color-text-a"><?= __('These are the properties that best suit your needs') ?></span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="home"><?= __('Home') ?></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?= __('Apartment') ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single-->

  <!-- =======  Blog Grid ======= -->
  <section class="news-grid grid">
    <div class="container">
      <div class="row">

        <?php
        if (count($inmuebles)) {
          foreach ($inmuebles as $key => $inmueble) {
            $precio = array();
            // var_dump($habitaciones);
        ?>
            <div class="col-md-4">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b" style="height: 25vh;">
                  <img src="<?= $galeriaCtrl->getDest($inmueble['id']) ?>" alt="" class="img-b img-fluid" height="100%">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <!-- <a href="#" class="category-b">Travel</a> -->
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="<?= RutaCtrl::url() ?>inmueble/<?= $inmueble['id'] ?>">
                          <?= $inmueble['nombre'] ?>
                        </a>
                      </h2>
                      <span class="date-b">
                        <?= $localizationCtrl->getByid(array('id' => $inmueble['localizacion_id']))[0]['nombre'] ?>
                      </span>
                    </div>
                    <div class="card-date">
                      <span class="date-b">
                        <?= $inmueble['precio'] ?>€/mes
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
        } else {
          ?>
          <h3><?= __('There are no properties available') ?></h3>
        <?php
        }
        ?>

      </div>

      <!-- <div class="row d-flex">
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
      </div> -->
    </div>
  </section><!-- End Blog Grid-->

</main><!-- End #main -->