<?php

$id = explode("/", $_GET["url"])[1];
$UserCtrl = new UserCtrl('usuarios');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datos['nombre'] = Validar::vlt_String($_POST['nombre']);

    if (isset($_POST['password']) && $_POST['password'] != '') {
        $datos['password'] = Funciones::encript($_POST['password']);
    }

    $UserCtrl->update($datos, $id);
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Cambios guardados', 'text' => '', 'redirect' => RutaCtrl::url('usuarios')));
}

$usuarios = $UserCtrl->getById(array('id' => $id));

include('views/partials/edituser.view.php');
