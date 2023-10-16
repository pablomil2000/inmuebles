<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hahbitaciones</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Hahbitaciones</li>
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
                    Añadir hahbitaciones
                </button>

            </div>
            <div class="card-body">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Inmueble</th>
                            <th>Zona</th>
                            <th>Disponible</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($habitaciones as $key => $habitacion) {
                        ?>
                            <tr>
                                <td scope="row"><?= $habitacion['id'] ?></td>
                                <td><?= $habitacion['nombre'] ?></td>
                                <td><img src="<?= $galeriaCtrl->getDest($habitacion['id']) ?>" alt="<?= $habitacion['nombre'] ?>" height="150px"></td>
                                <td><?= $habitacion['precio'] ?> €</td>
                                <td>
                                    <?php
                                    $inmueble = $inmueblesCtrl->getById(array('id' => $habitacion['inmueble_id']));
                                    ?>
                                    <p class="row"><?= $inmueble[0]['nombre'] ?></p>
                                    <p class="row"><img src="../views/images/inmuebles/<?= $inmueble[0]['imagen'] ?>" alt="<?= $inmueble[0]['nombre'] ?>" height="150px"></p>
                                </td>
                                <td>
                                    <?php
                                    $localizacion = $localizacionCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));
                                    ?>
                                    <p class="row"><?= $localizacion[0]['nombre'] ?></p>
                                </td>
                                <td>
                                    <?php
                                    if ($habitacion['disponible']) {
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
                                    <a href="index.php?ruta=edithabitaciones&id=<?= $habitacion['id'] ?>"><i class="fa-solid fa-pencil"></i></a>
                                    <a class="text-danger" href="index.php?ruta=deletehabitaciones&id=<?= $habitacion['id'] ?>"><i class="fa-solid fa-trash"></i></a>
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
                <h4 class="modal-title">Añadir hahbitaciones</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre</label>
                        <input type="text_intro" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Texto introduccion</label>
                        <input class="form-control" type="text" name="text_intro" min="0">
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Texto</label>
                        <textarea name="text" class="form-control" id="" cols="30" rows="10">

                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input class="form-control" type="number" name="precio" min="0">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Inmueble</label>
                        <select class="form-control" name="inmueble_id">
                            <?php
                            foreach ($inmuebles as $key => $inmueble) {
                            ?>
                                <option value="<?= $inmueble['id'] ?>"><?= $inmueble['nombre'] ?></option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="file" name="img" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear inmueble</button>
                </form>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script src="views/dist/js/datatable.js"></script>