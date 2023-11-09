<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Inmuebles</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="home" class="text-decoration-none">Home</a></li>
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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAlta">
                    Añadir inmueble
                </button>
            </div>
            <div class="card-body">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Localizacion</th>
                            <th>Alquiler</th>
                            <th>¿Disponible?</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($inmuebles as $key => $inmueble) {
                        ?>
                            <tr>
                                <td scope="row"><?= $inmueble['id'] ?></td>
                                <td><?= $inmueble['nombre'] ?></td>
                                <td>
                                    <img src="<?= RutaCtrl::url2() ?>views/images/inmuebles/<?= $inmueble['imagen'] ?>" alt="<?= $inmueble['nombre'] ?>" height="150px">
                                </td>
                                <td><?= $localizacionesCtrl->getById(array('id' => $inmueble['localizacion_id']))[0]['nombre'] ?></td>
                                <td><?= $inmueble['precio'] ?> €/mes</td>
                                <td>
                                    <?php
                                    if ($inmueble['disponible']) {
                                    ?>
                                        <button type="button" class="btn btn-outline-success">Disponible</button>
                                    <?php
                                    } else {
                                    ?>
                                        <button type="button" class="btn btn-outline-danger">No disponible</button>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="editinmuebles/<?= $inmueble['id'] ?>"><i class="fa-solid fa-pencil"></i></a>
                                    <a class="text-danger" href="deleteinmuebles/<?= $inmueble['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
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


<!-- Ventana modal con el formulario de alta -->
<div class="modal fade" id="modalAlta">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Añadir inmueble</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" min="0" class="form-control" id="precio" name="precio" value="">
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Texto</label>
                        <textarea name="text" class="form-control" id="summernote" cols="30" rows="10"></textarea>
                        <div id="precio" class="form-text"></div>
                    </div>


                    <div class="mb-3">
                        <label for="password" class="form-label">Localizacion</label>
                        <select class="form-control" aria-label="Default select example" name="localizacion_id">
                            <?php
                            foreach ($localizaciones as $key => $localizacion) {
                            ?>
                                <option value="<?= $localizacion['id'] ?>"><?= $localizacion['nombre'] ?></option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <!-- <input class="form-control" type="file" name="img" id=""> -->
                    </div>
                    <button type="submit" class="btn btn-primary">Crear inmueble</button>
                </form>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancelar </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script src="<?= RutaCtrl::url() ?>views/dist/js/datatable.js"></script>