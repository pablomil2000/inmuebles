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
            console.log('alert');
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

    static function uploadImage($targetDir)
    {
        if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
            $result = false;
            $msg = '';

            $fileName = Funciones::RandomString() . ".png";
            $targetFilePath = $targetDir .  $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            // Verificar si el archivo es una imagen
            $allowTypes = array('jpg', 'jpeg', 'png', 'gif');
            if (in_array($fileType, $allowTypes)) {
                // Mover el archivo subido al directorio de destino
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)) {
                    $result = true;
                } else {
                    $msg = "Hubo un error al subir el archivo.";
                }
            } else {
                $msg = "Solo se permiten subir archivos de imagen (jpg, jpeg, png, gif).";
            }

            if ($result) {
                Funciones::sweetAlert2(array("icon" => "success", 'title' => 'Imagen subida', 'text' => ''));
                return  $fileName;
            } else {
                Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'Datos incorrectos', 'text' => $msg));
            }
        } else {
            return 'default.png';
        }
    }

    static function deleteImage($targetImg)
    {
        return unlink($targetImg);
    }

    static function deleteFolder($targetDir)
    {
        return rmdir($targetDir);
    }
}
