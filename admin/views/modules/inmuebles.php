<?php

$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$localizacionesCtrl = new localizacionesCtrl('localizacion');
$localizaciones = $localizacionesCtrl->getAll();
$Funciones = new Funciones();

$caractCtrl = new caractCtrl('caracteristicas');
$caractPropiedadCtrl = new caractpropiedadCtrl('caracteristicas_inmueble');
$caracts = $caractCtrl->getById(array('piso' => 1));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $inmueblesCtrl->insert(array('nombre', 'precio', 'text', 'localizacion_id'), $_POST);

    // if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
    //     if (!is_dir("../views/images/inmuebles/$id")) {
    //         mkdir("../views/images/inmuebles/$id");
    //     }
    //     $datos2['name'] = $Funciones->uploadImage("../views/images/inmuebles/$id/");
    //     $datos2['inmueble_id'] = $id;
    //     $galeriaCtrl->insert(array('name', 'inmueble_id'), $datos2);
    // }

    // $id = $inmueblesCtrl->insertImg(array('nombre', 'precio', 'text', 'localizacion_id', 'imagen'), $_POST);
    foreach ($caracts as $key => $caract) {
        $caractPropiedadCtrl->insert(array('caracteristica_id', 'inmuble_id'), array($caract['id'], $id));
    }
}


$inmuebles = $inmueblesCtrl->getAll();



include ('views/partials/inmuebles.view.php');
