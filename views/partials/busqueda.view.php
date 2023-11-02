<?php
// var_dump($_POST['type']);
if (!isset($_POST['type']) || (isset($_POST['type']) && $_POST['type'] == 'inmuebles')) {
?>
    <style>
        .room {
            display: none;
        }
    </style>
<?php
}
?>

<script>
    const cambiarAction = (f) => {
        document.getElementById("form").action = f.Type.value;

        element1 = document.getElementsByClassName("room");

        if (f.Type.value === "habitaciones") {
            for (let index = 0; index < element1.length; index++) {
                const element = element1[index];
                console.log(element);
                element.classList.remove("d-none");
                element.classList.add("d-block");
            }

            // document.getElementsByClassName("room").classList.add("d-block");
        } else {
            for (let index = 0; index < element1.length; index++) {
                const element = element1[index];
                element.classList.remove("d-block");
                element.classList.add("d-none");
            }
            // document.getElementsByClassName("room").classList.add("d-none");
        }
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
        <div class="col-md-6 mb-2 room">
            <div class="form-group mt-3">
                <label class="pb-2" for="bedrooms">Habitacion doble</label>
                <select class="form-control form-select form-control-a" id="bedrooms" name="doble">
                    <option value="%">Elegir</option>
                    <option value="0" <?= isset($_POST['doble']) && $_POST['doble'] == '0' ? 'selected' : '' ?>>No</option>
                    <option value="1" <?= isset($_POST['doble']) && $_POST['doble'] == '1' ? 'selected' : '' ?>>Si</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mb-2 room">
            <div class="form-group mt-3">
                <label class="pb-2" for="terraza">Terraza</label>
                <select class="form-control form-select form-control-a" id="terraza" name="terraza">
                    <option value="%">Elegir</option>
                    <option value="1" <?= isset($_POST['terraza']) && $_POST['terraza'] == '1' ? 'selected' : '' ?>>Si</option>
                    <option value="0" <?= isset($_POST['terraza']) && $_POST['terraza'] == '0' ? 'selected' : '' ?>>No</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mb-2 room">
            <div class="form-group mt-3">
                <label class="pb-2" for="banio">Baño privado</label>
                <select class="form-control form-select form-control-a" id="banio" name="banio">
                    <option value="%">Elegir</option>
                    <option value="1" <?= isset($_POST['banio']) && $_POST['banio'] == '1' ? 'selected' : '' ?>>Si</option>
                    <option value="0" <?= isset($_POST['banio']) && $_POST['banio'] == '0' ? 'selected' : '' ?>>No</option>
                </select>
            </div>
        </div>

        <div class="col-md-6 mb-2 room">
            <div class="form-group mt-3">
                <label class="pb-2" for="piscina">Piscina</label>
                <select class="form-control form-select form-control-a" id="piscina" name="piscina">
                    <option value="%">Elegir</option>
                    <option value="1" <?= isset($_POST['piscina']) && $_POST['piscina'] == '1' ? 'selected' : '' ?>>Si</option>
                    <option value="0" <?= isset($_POST['piscina']) && $_POST['piscina'] == '0' ? 'selected' : '' ?>>No</option>
                </select>
            </div>
        </div>

        <div class="col-md-6 mb-2 room">
            <div class="form-group mt-3">
                <label class="pb-2" for="calefaccion">Calefaccion</label>
                <select class="form-control form-select form-control-a" id="calefaccion" name="calefaccion">
                    <option value="%">Elegir</option>
                    <option value="1" <?= isset($_POST['calefaccion']) && $_POST['calefaccion'] == '1' ? 'selected' : '' ?>>Si</option>
                    <option value="0" <?= isset($_POST['calefaccion']) && $_POST['calefaccion'] == '0' ? 'selected' : '' ?>>No</option>
                </select>
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="price">Precio maximo</label>
                <select class="form-control form-select form-control-a" id="price" name="minPrice">
                    <option value="%">Unlimite</option>

                    <?php
                    for ($i = 200; $i <= 600; $i = $i + 50) {
                    ?>
                        <option <?= isset($_POST['minPrice']) && $_POST['minPrice'] == $i ? 'selected' : '' ?> value="<?= $i ?>"><?= $i ?> €</option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="col-md-12">
            <button type="submit" class="btn btn-b"><i class="bi bi-search"></i> Buscar </button>
        </div>
    </div>
</form>