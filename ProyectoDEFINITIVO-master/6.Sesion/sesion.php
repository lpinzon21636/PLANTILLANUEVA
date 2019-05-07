<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesión</title>
</head>
<body>
    <?php
        $users = [
          'santiago@j.com' => '1234', 'natalia@j.com' => '4321', 'daniela@j.com' => '9876',
        ];

        if ($_POST['correo']== "" || $_POST['correo']== "") {
            echo "no hay datos";
            header('location:../5.inicio_sesion/inicio_sesion.php');
        }
        if (isset($users[$_POST['correo']])){
            if ($users[$_POST['correo']]== $_POST['contrasena']){
                session_start();
                echo "Conectado";
            } else {
                echo 'Contraseña incorrecta';
                //header('location:../5.inicio_sesion/inicio_sesion.php');
            }
        } else {
            echo 'Datos incorrectos';
            //header('location:../5.inicio_sesion/inicio_sesion.php');
        }

    ?>
</body>
</html>
