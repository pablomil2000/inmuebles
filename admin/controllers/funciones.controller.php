<?php

class Funciones
{

    static public function encript($str, $algor = 'sha512')
    {
        return hash($algor, $str);
    }

    static public function isLogin($name = 'user', $redirect = 'login')
    {
        if (!isset($_SESSION[$name])) {

            if (!is_null($redirect)) {
                header('location:' . $redirect);
?>
                <script>
                    document.location.href = '<?php echo $redirect; ?>';
                </script>
            <?php
            }
        }
        return true;
    }

    static public function isGuest($name = 'user', $redirect = 'home')
    {
        if (isset($_SESSION[$name])) {

            if (!is_null($redirect)) {
                header('location:' . $redirect);
            ?>
                <script>
                    document.location.href = '<?php echo $redirect; ?>';
                </script>
        <?php
            }
        }
        return true;
    }


    static public function dateFormat($fecha, $formato = 'd/m/Y')
    {
        return date($formato, strtotime($fecha));
    }

    // Funciones::sweetAlert2(array('icon' => 'success', 'title' => '', 'text' => ''));
    static public function sweetAlert2($datos)
    {
        ?>
        <script>
            Swal.fire({
                icon: '<?= $datos['icon'] ?>',
                title: '<?= $datos['title'] ?>',
                text: '<?= $datos['text'] ?>',

            }).then((result) => {
                console.log(result);
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
}
