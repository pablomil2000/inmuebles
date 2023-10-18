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
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required value="<?= $inmuebles[0]['nombre'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Localizacion</label>
                        <select class="form-control" aria-label="Default select example" name="localizacion_id">
                            <?php
                            foreach ($localizaciones as $key => $localizacion) {
                            ?>
                                <option value="<?= $localizacion['id'] ?>" <?= $inmuebles[0]['localizacion_id'] == $localizacion['id'] ? 'selected' : '' ?>><?= $localizacion['nombre'] ?></option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="file" name="img" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar inmueble</button>
                </form>

            </div>
            <!-- /.card-body -->
            <div class="card-footer row">
                <!-- Footer -->
                <?php

                foreach ($habitaciones as $key => $habitacion) {
                ?>
                    <div class="card col-3 m-3 p-2">
                        <img class="card-img-top" src="<?= $galeryCtrl->getDest($habitacion['id']) ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?= $habitacion['nombre'] ?></h5>
                            <p class="card-text"><?= $habitacion['text_intro'] ?></p>
                            <a href="<?= DOMAIN ?>edithabitaciones/<?= $habitacion['id'] ?>" class="btn btn-outline-primary">Ver mas <i class="fa-solid fa-pencil"></i></a>

                        </div>
                    </div>
                <?php
                }
                ?>


            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>