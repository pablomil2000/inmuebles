<?php

class Funciones
{

    static public function encript($str, $algor = 'sha512')
    {
        return hash($algor, $str);
    }

    static public function isLogin($name = 'user', $redirect = 'home')
    {
        if (!isset($_SESSION[$name])) {
            header('location:' . $redirect);
        }

        return true;
    }


    static public function dateFormat($fecha, $formato = 'd/m/Y')
    {
        return date($formato, strtotime($fecha));
    }


    static public function sweetAlert2($datos)
    {
?>
        <script>
            Swal.fire({
                icon: '<?= $datos['icon'] ?>',
                title: '<?= $datos['title'] ?>',
                text: '<?= $datos['text'] ?>',

            }).then((result) => {
                <?php
                if (isset($datos['redirect'])) {
                ?>
                    window.location.href = "<?= $datos['redirect'] ?>";
                <?php
                }
                ?>
            })
        </script>
    <?php
    }

    static public function RandomString($long = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < $long; $i++) {
            $randstring .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randstring;
    }

    static public function translateDatePicker($date1)
    {
        $meses = array("Enero," => 1, "Febrero," => 2, "Marzo," => 3, "Abril," => 4, "Mayo," => 5, "Junio," => 6, "Julio," => 7, "Agosto," => 8, "Septiembre," => 9, "Octubre," => 10, "Noviembre," => 11, "Diciembre," => 12);
        $fecha = explode(' ', $date1);
        $date = $fecha[0] . '-' . $meses[$fecha[1]] . '-' . $fecha[2];

        // var_dump($date);
        return $date;
    }

    static function JsRedirect($ruta = 'home')
    {
    ?>

        <script>
            window.location.href = "<?= $ruta ?>";
        </script>


<?php
    }

    static function nameImg($nameMethod = 'random', $tipo = 'png', $dato = 0)
    {
        switch ($nameMethod) {
            case 'random':
                $name = rand();
                break;
            case 'personal':
                $name = $dato;
                break;
            case 'number':
                $name = rand();
                break;
        }

        if ($tipo != NULL) {
            return $name . "." . $tipo;
        } else {
            return $name;
        }
    }

    static function esImg($img)
    {
        if (getimagesize($img)) {
            return true;
        }
        return false;
    }

    public function uploadImg($carpeta, $img, $tipe = array(), $size = null)
    {
        $msg = '';
        if ($this->esImg($_FILES['img']['tmp_name'])) {
            //mover img a la carpeta que le toca
            $tama = $_FILES['img']['size'];
            if ($tama <= $size || $size == null) {
                if (in_array($_FILES['img']['type'], $tipe) || empty($tipe)) {
                    move_uploaded_file($_FILES['img']['tmp_name'], $carpeta . $img);
                    return true;
                }
            }
        }
        return false;
    }
}
