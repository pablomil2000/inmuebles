<?php

$habitacionesCtrl = new habitacionCtrl('habitaciones');
$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');
$galeriaCtrl = new GaleriaCtrl('galeria');
// $habitaciones = $habitacionesCtrl->getAll();

$sql = 'SELECT h.* FROM `inmuebles` i JOIN habitaciones h ON i.id LIKE h.inmueble_id ';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql .= ' WHERE ';
    // var_dump($_POST);

    // Filtros busqueda
    if (isset($_POST['keyword'])) {
        $sql .= " h.nombre LIKE '%" . $_POST['keyword'] . "%' AND";
    }
    if (isset($_POST['zona'])) {
        $sql .= " localizacion_id LIKE '" . $_POST['zona'] . "' AND";
    }
    if (isset($_POST['minPrice']) && $_POST['minPrice'] != '%') {
        $sql .= " precio <= '" . $_POST['minPrice'] . "' AND";
    }

    $sql = substr($sql, 0, -3);
}

// $sql .= ' GROUP BY i.id';
var_dump($sql);
$habitaciones = $habitacionesCtrl->raw($sql)->fetchAll();


include('views/partials/habitaciones.view.php');
