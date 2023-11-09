<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Habitaciones</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3>Editar inmuebles</h3>
            </div>
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data" class="row">
                    <div class="mb-3 col-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required value="<?= $inmuebles[0]['nombre'] ?>">
                    </div>

                    <div class="mb-3 col-6">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" min="0" class="form-control" id="precio" name="precio" value="<?= $inmuebles[0]['precio'] ?>">
                        <!-- <div id="precio" class="form-text">Si el piso no se alquila completo, dejar vacio.</div> -->
                    </div>

                    <div class="mb-3 col-6">
                        <label for="precio" class="form-label">Texto</label>
                        <textarea name="text" class="form-control" id="summernote" cols="30" rows="10"><?= $inmuebles[0]['text'] ?></textarea>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="precio" class="form-label">Características</label>
                        <ul class="form-check form-switch">

                            <?php
                            foreach ($caracts as $key => $caract) {
                                $result = $caractPropiedadCtrl->getByid(array('caracteristica_id' => $caract['id'], "inmuble_id" => $id));
                            ?>
                                <li>
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" <?= $result[0]['value'] ? 'checked' : '' ?> name="caract-<?= $caract['id'] ?>">
                                    <label class="form-check-label" for="flexSwitchCheckDefault"><?= $caract['nombre'] ?></label>
                                </li>
                            <?php
                            }
                            ?>

                        </ul>

                        <div class="mb-3 col-6">
                            <label for="disponible" class="form-label">¿Disponible?</label>
                            <input name="disponible" <?= $inmuebles[0]['disponible'] ? 'checked' : '' ?> type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                            <label class="btn btn-outline-success" for="btn-check-outlined">Disponible</label><br>
                        </div>
                        <div class="mb-3">
                            <label for="Localizacion" class="form-label">Localizacion</label>
                            <select class="form-control" aria-label="Default select example" name="localizacion_id" id="Localizacion">
                                <?php
                                foreach ($localizaciones as $key => $localizacion) {
                                ?>
                                    <option value="<?= $localizacion['id'] ?>" <?= $inmuebles[0]['localizacion_id'] == $localizacion['id'] ? 'selected' : '' ?>><?= $localizacion['nombre'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>




                    <div class="mb-3 col-6">
                        <input class="form-control" type="file" name="img" id="">
                    </div>

                    <div class="mb-3 col-6">
                        <div class="d-flex">
                            <?php
                            foreach ($galerias as $key => $galeria) {
                            ?>
                                <div class="card m-3" style="width: 18rem;">
                                    <img class="card-img-top" src="<?= $galeriaCtrl->getImage($id, $galeria['name']) ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <?php

                                            if ($galeria['destacada']) {
                                            ?>
                                                <i class="fa-solid fa-star text-primary"></i>
                                            <?php
                                            } else {
                                            ?>
                                                <a href="<?= DOMAIN ?>destacarInmueble/<?= $galeria['id'] ?>"><i class="fa-regular fa-star"></i></a>
                                            <?php
                                            }
                                            ?>
                                            <a href="<?= DOMAIN ?>deleteimageInmueble/<?= $galeria['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                                        </p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar inmueble</button>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<!-- <script src="<?= RutaCtrl::url() ?>views\dist\js\summernotes.js"></script> -->