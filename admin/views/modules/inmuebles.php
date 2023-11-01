<?php

$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$localizacionesCtrl = new localizacionesCtrl('localizacion');
$localizaciones = $localizacionesCtrl->getAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inmueblesCtrl->insertImg(array('nombre', 'precio', 'localizacion_id', 'imagen'), $_POST);
}


$inmuebles = $inmueblesCtrl->raw("SELECT i.* FROM `inmuebles` i LEFT JOIN habitaciones h ON i.id LIKE h.inmueble_id WHERE i.nombre LIKE '%%' AND localizacion_id LIKE '%' GROUP BY i.id;");


include('views/partials/inmuebles.view.php');
