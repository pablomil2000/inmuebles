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
                        <li class="breadcrumb-item"><a href="<?= DOMAIN ?>home">Home</a></li>
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
                <h3>Editar habitacion</h3>
            </div>
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data" class="row form-switch">
                    <div class="mb-3 col-12">
                        <label for="username" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required value="<?= $habitacion[0]['nombre'] ?>">
                    </div>

                    <div class="mb-3 col-12">
                        <label for="precio" class="form-label">Texto introduccion</label>
                        <input class="form-control" type="text" name="text_intro" value="<?= $habitacion[0]['text_intro'] ?>">
                    </div>

                    <div class="mb-3 col-8">
                        <label for="precio" class="form-label">Texto</label>
                        <textarea name="text" class="form-control" id="summernote" cols="30" rows="10"><?= $habitacion[0]['text'] ?></textarea>
                    </div>

                    <div class="mb-3 col-4 container">
                        <label for="precio" class="form-label">Características</label>
                        <ul class="form-check form-switch">
                            <li>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" <?= $habitacion[0]['doble'] ? 'checked' : '' ?> name="doble">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Habitacion doble</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" <?= $habitacion[0]['banio'] ? 'checked' : '' ?> name="banio">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Baño privado</label>

                            </li>
                            <li>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" <?= $habitacion[0]['terraza'] ? 'checked' : '' ?> name="terraza">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Terraza</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" <?= $habitacion[0]['calefaccion'] ? 'checked' : '' ?> name="calefaccion">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Calefaccion</label>
                            </li>
                            <li>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" <?= $habitacion[0]['piscina'] ? 'checked' : '' ?> name="piscina">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Piscina</label>
                            </li>

                            <li>
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" <?= $habitacion[0]['mixto'] ? 'checked' : '' ?> name="mixto">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Piso mixto</label>
                            </li>

                            <li>
                                <label class="form-check-label" for="flexSwitchCheckDefault">Planta</label>
                                <select name="piso" class="form-select">
                                    <option value="0">Bajo</option>
                                    <?php
                                    for ($i = 1; $i <= 15; $i++) {
                                    ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                    <?php
                                    }
                                    ?>
                                    <option value="999">Ultima planta</option>
                                </select>
                            </li>
                        </ul>

                    </div>

                    <div class="mb-3 col-12">
                        <label for="precio" class="form-label">Precio</label>
                        <input class="form-control" type="number" name="precio" min="0" value="<?= $habitacion[0]['precio'] ?>">
                    </div>

                    <div class="mb-3 col-6">
                        <label for="zona_id" class="form-label">Zona</label>
                        <select class="form-control" name="zona_id">
                            <?php
                            foreach ($localizaciones as $key => $zona) {

                            ?>
                                <option value="<?= $zona['id'] ?>" <?= $habitacion[0]['zona_id'] == $zona['id'] ? 'selected' : '' ?>><?= $zona['nombre'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="password" class="form-label">¿Disponible?</label>
                        <input name="disponible" <?= $habitacion[0]['disponible'] ? 'checked' : '' ?> type="checkbox" class="btn-check" id="btn-check-outlined" autocomplete="off">
                        <label class="btn btn-outline-success" id="text-buton" for="btn-check-outlined">Disponible</label><br>
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
                                                <a href="<?= DOMAIN ?>destacar/<?= $galeria['id'] ?>"><i class="fa-regular fa-star"></i></a>
                                            <?php
                                            }
                                            ?>
                                            <a href="<?= DOMAIN ?>deleteimage/<?= $galeria['id'] ?>"><i class="fa-solid fa-trash"></i></a>
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
            <div class="card-footer">
                <!-- Footer -->
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<script>
    //chante text btn-check-outlined and class

    const btnCheck = document.getElementById('btn-check-outlined');
    const btnCheckLabel = document.querySelector('#text-buton');

    btnCheck.addEventListener('change', () => {
        if (btnCheck.checked) {
            btnCheckLabel.textContent = 'Disponible';
            btnCheckLabel.classList.remove('btn-outline-danger');
            btnCheckLabel.classList.add('btn-outline-success');
        } else {
            btnCheckLabel.textContent = 'No disponible';
            btnCheckLabel.classList.remove('btn-outline-success');
            btnCheckLabel.classList.add('btn-outline-danger');
        }
    });

</script>

<script src="<?= RutaCtrl::url() ?>views\dist\js\summernotes.js"></script>