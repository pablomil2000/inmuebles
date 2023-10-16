<script>
    const cambiarAction = (f) => {
        document.getElementById("form").action = f.Type.value;
    }
</script>


<form class="form-a" method="post" action="<?= isset($_POST['type']) ? $_POST['type'] : 'inmuebles' ?>" id="form">
    <div class="row">
        <div class="col-md-12 mb-2">
            <div class="form-group">
                <label class="pb-2" for="Type">Keyword</label>
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword" name="keyword">
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="Type">Tipo</label>
                <select class="form-control form-select form-control-a" id="Type" onchange="cambiarAction(this.form)" name="type">
                    <option value="inmuebles" <?= isset($_POST['type']) && $_POST['type'] == 'inmuebles' ? 'selected' : '' ?>>Inmueble</option>
                    <option value="habitaciones" <?= isset($_POST['type']) && $_POST['type'] == 'habitaciones' ? 'selected' : '' ?>>Habitacion</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="city">Zona</label>
                <select class="form-control form-select form-control-a" id="city" name="zona">
                    <option value="%">All City</option>

                    <?php
                    foreach ($localizaciones as $key => $localizacio) {
                    ?>
                        <option <?= isset($_POST['zona']) && $_POST['zona'] == $localizacio['id'] ? 'selected' : '' ?> value="<?= $localizacio['id'] ?>"><?= $localizacio['nombre'] ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="bedrooms">Habitacion doble</label>
                <select class="form-control form-select form-control-a" id="bedrooms" name="doble">
                    <option value="%">Elegir</option>
                    <option value="0">No</option>
                    <option value="1">Si</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="garages">Terraza</label>
                <select class="form-control form-select form-control-a" id="garages">
                    <option value="%">Elegir</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="bathrooms">Baño privado</label>
                <select class="form-control form-select form-control-a" id="bathrooms">
                    <option value="%">Elegir</option>
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="price">Precio maximo</label>
                <select class="form-control form-select form-control-a" id="price" name="minPrice">
                    <option value="%">Unlimite</option>

                    <?php
                    for ($i = 100; $i <= 3000; $i = $i + 250) {
                    ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
        </div>
    </div>
</form>