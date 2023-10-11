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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAlta">
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
                                <td><img src="../views/images/inmuebles/<?= $inmueble['imagen'] ?>" alt="<?= $inmueble['nombre'] ?>" height="150px"></td>
                                <td><a href="index.php?ruta=editinmuebles&id=<?= $inmueble['id'] ?>"><i class="fa-solid fa-pencil"></i></a></td>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <label for="password" class="form-label">Localizacion</label>
                        <select class="form-control" aria-label="Default select example" name="localizacion">
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