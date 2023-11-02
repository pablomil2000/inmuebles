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
                            <h1>Nuevos clientes</h1>
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
                                    <tr onclick='window.location="<?= RutaCtrl::url() ?>nuevo-cliente/<?= $comentario["id"] ?>"'>
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
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>

<script src="views/dist/js/datatable.js"></script>