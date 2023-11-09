<?php

$id = explode("/", $_GET["url"])[1];

$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$localizacionesCtrl = new localizacionesCtrl('localizacion');
$galeriaCtrl  = new galeria_inmueblesCtrl('galeria_inmuebles');
$caractCtrl = new caractCtrl('caracteristicas');
$caractPropiedadCtrl = new caractpropiedadCtrl('caracteristicas_inmueble');
$Funciones = new Funciones();

$caracts = $caractCtrl->getById(array('piso' => 1));


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $datos['nombre'] = $_POST['nombre'];
    $datos['text'] = $_POST['text'];
    $datos['precio'] = $_POST['precio'];

    foreach ($caracts as $key => $caract) {
        if (isset($_POST['caract-' . $caract['id']])) {
            $caractPropiedadCtrl->update2(array('value' => (int)1), "caracteristica_id = " . $caract['id'] . " AND inmuble_id = $id");
        } else {
            $caractPropiedadCtrl->update2(array('value' => (int)0), "caracteristica_id = " . $caract['id'] . " AND inmuble_id = $id");
        }
    }

    $update = $inmueblesCtrl->update($datos, $id);

    // var_dump($_FILES['img']);

    if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
        if (!is_dir("../views/images/inmuebles/$id")) {
            mkdir("../views/images/inmuebles/$id");
        }

        $datos2['name'] = $Funciones->uploadImage("../views/images/inmuebles/$id/");
        $datos2['habitacion_id'] = $id;

        $imagen = $galeriaCtrl->insert(array('name', 'inmueble_id'), $datos2);

        Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Inmueble actualizada', 'text' => '', 'redirect' => RutaCtrl::url('inmuebles')));
    }
}



$inmuebles = $inmueblesCtrl->getById(array('id' => $id));
$galerias = $galeriaCtrl->rawSql(" Where inmueble_id like $id ", " ORDER BY destacada DESC", '');
$localizaciones = $localizacionesCtrl->getAll();

$inmuebles = $inmueblesCtrl->getById(array('id' => $id));

if (empty($inmuebles)) {
    Funciones::JsRedirect(RutaCtrl::url() . '404');
}
$localizaciones = $localizacionesCtrl->getAll();


include('views/partials/editinmueble.view.php');
