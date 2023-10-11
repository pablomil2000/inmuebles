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
                <h3>Editar habitacion</h3>
            </div>
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data" class="row">
                    <div class="mb-3 col-12">
                        <label for="username" class="form-label">Nombre</label>
                        <input type="text_intro" class="form-control" id="nombre" name="nombre" required value="<?= $habitacion[0]['nombre'] ?>">
                    </div>

                    <div class="mb-3 col-12">
                        <label for="precio" class="form-label">Texto introduccion</label>
                        <input class="form-control" type="text" name="text_intro" value="<?= $habitacion[0]['text'] ?>">
                    </div>

                    <div class="mb-3 col-12">
                        <label for="precio" class="form-label">Texto</label>
                        <textarea name="text" class="form-control" id="" cols="30" rows="10"><?= $habitacion[0]['text'] ?></textarea>
                    </div>

                    <div class="mb-3 col-12">
                        <label for="precio" class="form-label">Precio</label>
                        <input class="form-control" type="number" name="precio" min="0" value="<?= $habitacion[0]['precio'] ?>">
                    </div>

                    <div class="mb-3 col-6">
                        <label for="password" class="form-label">Inmueble</label>
                        <select class="form-control" name="inmueble_id">
                            <?php
                            foreach ($inmuebles as $key => $inmueble) {
                            ?>
                                <option value="<?= $inmueble['id'] ?>" <?= $habitacion[0]['inmueble_id'] == $inmueble['id'] ? 'selected' : '' ?>><?= $inmueble['nombre'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3 col-6">
                        <label for="password" class="form-label">Disponible</label>

                        <label class="btn btn-outline-success" for="success-outlined">
                            <input type="radio" class="btn-check" name="disponible" id="success-outlined" autocomplete="off" <?= $habitacion[0]['disponible'] == 1 ? 'checked' : '' ?> value="1">
                            Disponible
                        </label>

                        <label class="btn btn-outline-danger" for="danger-outlined">
                            <input type="radio" class="btn-check" name="disponible" id="danger-outlined" autocomplete="off" <?= $habitacion[0]['disponible'] != 1 ? 'checked' : '' ?> value="0">
                            No disponible
                        </label>
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
                                                <a href="index.php?ruta=destacar&id=<?= $galeria['id'] ?>"><i class="fa-regular fa-star"></i></a>
                                            <?php
                                            }
                                            ?>
                                            <a href="index.php?ruta=deleteimage&id=<?= $galeria['id'] ?>"><i class="fa-solid fa-trash"></i></a>
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