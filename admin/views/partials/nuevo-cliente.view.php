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
                    <div class="card-header d-flex justify-content-evenly ">
                        <h3><?= $comentario[0]['asunto'] ?></h3>
                        <p><b><i class="fa-solid fa-calendar-days"></i> fecha:</b> <?= Funciones::dateFormat($comentario[0]['fecha'], "d/m/Y H:m") ?></p>
                    </div>
                    <div class="card-body">
                        <?= $comentario[0]['text'] ?>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer d-flex justify-content-evenly">
                        <!-- Footer -->
                        <p><b><i class="fa-solid fa-user"></i> Autor:</b> <?= $comentario[0]['nombre'] . ' ' . $comentario[0]['apellido'] ?></p>
                        <p><b><i class="fa-solid fa-envelope"></i> Email:</b> <?= $comentario[0]['email'] ?></p>
                        <p><b><i class="fa-solid fa-phone"></i> Phone:</b> <?= $comentario[0]['tel'] ?></p>
                        <a href="<?= RutaCtrl::url('nuevos-clientes') ?>">Volver</a>
                        <a href="<?= RutaCtrl::url('nuevos-clientes/' . $id . '/delete') ?>">Eliminar</a>
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