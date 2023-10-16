<?php

$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');

$habitacionesCtrl = new habitacionCtrl('habitaciones');

$sql = 'SELECT i.* FROM `inmuebles` i JOIN habitaciones h ON i.id LIKE h.inmueble_id ';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql .= ' WHERE ';
    // var_dump($_POST);

    if (isset($_POST['keyword'])) {
        $sql .= " i.nombre LIKE '%" . $_POST['keyword'] . "%' AND";
    }
    if (isset($_POST['zona'])) {
        $sql .= " localizacion_id LIKE '" . $_POST['zona'] . "' AND";
    }
    if (isset($_POST['minPrice']) && $_POST['minPrice'] != '%') {
        $sql .= " precio <= '" . $_POST['minPrice'] . "' AND";
    }

    $sql = substr($sql, 0, -3);
}


$sql .= ' GROUP BY i.id';
var_dump($sql);
$inmuebles = $inmuebleCtrl->raw($sql)->fetchAll();



// var_dump($habitaciones);

include('views/partials/inmuebles.view.php');
