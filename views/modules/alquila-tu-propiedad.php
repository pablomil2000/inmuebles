<?php

// var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error = 1;

    $datos['nombre'] = Validar::vlt_String($_POST['nombre']);
    $datos['apellido'] = Validar::vlt_String($_POST['apellido']);
    $datos['email'] = Validar::vlt_Email($_POST['email']);
    $datos['tel'] = Validar::vlt_Int($_POST['tel']);
    $datos['asunto'] = Validar::vlt_String($_POST['asunto']);
    $datos['text'] = Validar::vlt_String($_POST['mensaje']);

    if ($datos['nombre'] && $datos['apellidos'] && $datos['email'] && $datos['tel']) {
        $error = 0;
    }

    // var_dump($datos);

    $contactoCtrl = new ContactoCtrl('newclient');

    if ($error == 0 && $contactoCtrl->insert(
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
        // Show a success message
        Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Gracias por tu comentario', 'text' => 'Uno de nuestros agentes se pondra en contacto contigo lo antes posible'));
    } else {
        // Show an error message
        $code = Funciones::dateFormat(date("F j, Y, g:i a"), "dmyHis");
        Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'Algo ha salido mal', 'text' => 'Ponte en contacto con nosotros para comprobar el codigo de error: ' . $code));
        // Log the error
        $logs = new LogController();
        $logs->log($code, $_GET['url'], $datos);
    }
}

include('views/partials/alquila-tu-propiedad.view.php');
