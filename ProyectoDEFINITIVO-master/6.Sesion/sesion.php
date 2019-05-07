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
            //Método que permite redireccionar a la página de inicio en caso de
            //que datos de usuario estén vacíos
            header('location:/PLANTILLANUEVA/ProyectoDEFINITIVO-master/5.Inicio_Sesion/inicio_sesion.php');
        }
        if (isset($users[$_POST['correo']])){
            if ($users[$_POST['correo']]== $_POST['contrasena']){
                /**session_start();
                setcookie('correo',$_POST['correo'], time()+120);
                setcookie('contraseña',$_POST['contrasena'], time()+120);
                echo "Conectado";**/

                //Métodos que permiten guardar cookies en el browser
                //Cookie para almacenar la sesión
                setcookie("PHPSESSID", $_COOKIE[session_name()],time()+300);
                //Cookie para almacenar el correo
                setcookie("Correo", $_POST['correo'], time()+300);
                //Cookie para almacenar la contraseña
                setcookie("Contraseña", $_POST['contrasena'], time()+300);
                echo "sesion iniciada";
            } else {
                echo 'Contraseña incorrecta';

            //Método que permite redireccionar a la página de inicio en caso de
            //que datos de usuario estén incorrectos
            header('location:/PLANTILLANUEVA/ProyectoDEFINITIVO-master/5.Inicio_Sesion/inicio_sesion.php');

            }
        } else {
            echo 'Datos incorrectos';

            //Método que permite redireccionar a la página de inicio en caso de
            //que datos de usuario estén incorrectos

            header('location:/PLANTILLANUEVA/ProyectoDEFINITIVO-master/5.Inicio_Sesion/inicio_sesion.php');

        }

    ?>
</body>
</html>
