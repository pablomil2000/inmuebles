<?php
$UserCtrl = new UserCtrl('usuarios');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $UserCtrl->insert(array('nombre', 'password'), array($_POST['nombre'], $_POST['password']));
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Usuario registrado', 'text' => ''));
}



$usuarios = $UserCtrl->getAll();

include('views/partials/usuarios.view.php');
