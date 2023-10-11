<script>
    const cambiarAction = (f) => {
        document.getElementById("form").action = f.Type.value;
    }
</script>


<form class="form-a" method="post" action="inmuebles" id="form">
    <div class="row">
        <div class="col-md-12 mb-2">
            <div class="form-group">
                <label class="pb-2" for="Type">Keyword</label>
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword" name="keyword">
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="Type">Type</label>
                <select class="form-control form-select form-control-a" id="Type" onchange="cambiarAction(this.form)">
                    <option value="inmuebles">Inmueble</option>
                    <option value="habitaciones">Habitacion</option>
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
                        <option value="<?= $localizacio['id'] ?>"><?= $localizacio['nombre'] ?></option>
                    <?php
                    }
                    ?>

                </select>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="bedrooms">Bedrooms</label>
                <select class="form-control form-select form-control-a" id="bedrooms">
                    <option>Any</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="garages">Garages</label>
                <select class="form-control form-select form-control-a" id="garages">
                    <option>Any</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="bathrooms">Bathrooms</label>
                <select class="form-control form-select form-control-a" id="bathrooms">
                    <option>Any</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                </select>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
                <label class="pb-2" for="price">Min Price</label>
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