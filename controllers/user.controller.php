<?php

class UserCtrl extends CrudCtrl
{
    public function login($name = 'usuario', $pws = 'password')
    {
        $usuario = Validar::vlt_String($_POST[$name]);
        // $password = Funciones::encript($_POST[$pws]);
        $password = $_POST[$pws];
        var_dump($password);
        if ($usuario != '' && $password != '') {
            $resultado = $this->getById(array($name => $usuario));
            if (!empty($resultado)) {
                $resultado = $this->getById(array($name => $usuario, $pws => $password));
            }
            var_dump($resultado);
            if (!empty($resultado)) {
                // Funciones::sweetAlert2(array("icon" => "success", 'title' => 'Welcome', 'text' => '', 'redirect' => 'loginConfirm'));
                $_SESSION['admin'] = $resultado[0]['id'];

                $this->update(array('lastLogin' => date('Y-m-d')), $resultado[0]['id']);

                Funciones::JsRedirect("admin");
                return true;
            }
            Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'Datos incorrectos', 'text' => ''));
            return false;
        }
    }
}
