<?php

$id = explode("/", $_GET["url"])[1];

$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$localizacionesCtrl = new localizacionesCtrl('localizacion');
$galeryCtrl = new galeriaCtrl('galeria');
$caractCtrl = new caractCtrl('caracteristicas');
$caractPropiedadCtrl = new caractpropiedadCtrl('caracteristicas_inmueble');
$caracts = $caractCtrl->getById(array('piso' => 1));


$inmuebles = $inmueblesCtrl->getById(array('id' => $id));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // var_dump($_POST);
    foreach ($caracts as $key => $caract) {
        if (isset($_POST['caract-' . $caract['id']])) {
            $caractPropiedadCtrl->update2(array('value' => (int)1), "caracteristica_id = " . $caract['id'] . " AND inmuble_id = $id");
        } else {
            $caractPropiedadCtrl->update2(array('value' => (int)0), "caracteristica_id = " . $caract['id'] . " AND inmuble_id = $id");
        }
    }

    $inmueblesCtrl->updateImg($inmuebles, array('nombre', 'imagen', 'text', 'disponible', 'precio', 'localizacion_id'), $_POST);
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Inmueble actualizada', 'text' => '', 'redirect' => RutaCtrl::url('inmuebles')));
}

$inmuebles = $inmueblesCtrl->getById(array('id' => $id));
$localizaciones = $localizacionesCtrl->getAll();


include('views/partials/editinmueble.view.php');
