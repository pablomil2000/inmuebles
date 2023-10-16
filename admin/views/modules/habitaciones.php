<?php

$habitacionCtrl = new habitacionCtrl('habitaciones');
$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$Funciones = new Funciones();
$galeriaCtrl = new galeriaCtrl('galeria');
$localizacionCtrl = new localizacionesCtrl('localizacion');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // var_dump($_POST);
    $datos['nombre'] = $_POST['nombre'];
    $datos['inmueble_id'] = $_POST['inmueble_id'];
    $datos['precio'] = $_POST['precio'];
    $datos['text_intro'] = $_POST['text_intro'];
    $datos['text'] = $_POST['text'];
    // die();

    $id = $habitacionCtrl->insert(array('nombre', 'inmueble_id', 'precio', 'text_intro', 'text'), $datos);
    if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
        if (!is_dir("../views/images/habitacion/$id")) {
            mkdir("../views/images/habitacion/$id");
        }
        $datos2['name'] = $Funciones->uploadImage("../views/images/habitacion/$id/");
        $datos2['inmueble_id'] = $id;
        $datos2['destacada'] = true;
        $galeriaCtrl->insert(array('name', 'habitacion_id', 'destacada'), $datos2);
    }
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Habitacion creada', 'text' => ''));
}

$inmuebles = $inmueblesCtrl->getAll();
$habitaciones = $habitacionCtrl->getAll();


include('views/partials/habitaciones.view.php');
