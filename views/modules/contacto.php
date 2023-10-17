<?php

// var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $datos['nombre'] = Validar::vlt_String($_POST['nombre']);
    $datos['apellidos'] = Validar::vlt_String($_POST['apellido']);
    $datos['email'] = Validar::vlt_Email($_POST['email']);
    $datos['tel'] = Validar::vlt_Int($_POST['tel']);
    $datos['asunto'] = Validar::vlt_String($_POST['asunto']);
    $datos['text'] = Validar::vlt_String($_POST['mensaje']);

    var_dump($datos);

    $contactoCtrl = new ContactoCtrl('contacto');

    if ($contactoCtrl->insert(
        array(
            'nombre',
            'apellido',
            'email',
            'tel',
            'asunto',
            'text',
        ),
        $datos
    )) {
        Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Gracias por tu comentario', 'text' => 'Uno de nuestros agentes se pondra en contacto contigo lo antes posible'));
    } else {
        Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'Algo a salido mal', 'text' => 'ponte en contacto con algun responsable para comprobar el error code: ' . Funciones::dateFormat(date("F j, Y, g:i a"), "dmyhis")));
    }
}

include('views/partials/contacto.view.php');
