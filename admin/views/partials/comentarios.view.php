<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Comentarios</h1>
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
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>fecha</th>
                                    <th>Abierto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($comentarios as $key => $comentario) {
                                ?>
                                    <tr onclick='window.location="index.php?ruta=comentario&id=<?= $comentario["id"] ?>"'>
                                        <a href="">

                                            <td scope="row">
                                                <?php

                                                if (!$comentario['Abierto']) {
                                                ?>
                                                    <span class="badge text-bg-warning">New</span>
                                                <?php
                                                }
                                                ?>
                                                <?= $comentario['id'] ?>
                                            </td>
                                            <td><?= $comentario['nombre'] ?></td>
                                            <td><?= Funciones::dateFormat($comentario['fecha'], "d/m/Y H:m") ?></td>
                                            <td><?= $comentario['Abierto'] ? 'Abierto' : 'Sin abrir' ?></td>
                                        </a>
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
                        <h4 class="modal-title">Añadir usuarios</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Crear ubicacion</button>
                        </form>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancelar </button>
                        <!-- <button type="button" class="btn btn-primary">Guardar Usuario</button> -->
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>

<script src="views/dist/js/datatable.js"></script>