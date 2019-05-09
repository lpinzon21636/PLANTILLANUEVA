<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesión</title>
</head>
<body>
    <?php
    /**
    *Tupla de usuarios
    **/
        $users = [
          'santiago@j.com' => '1234', 'natalia@j.com' => '4321', 'daniela@j.com' => '9876',
        ];
    /**
    *Condicional para validar los usuarios ingresados en el formulario
    **/

        if ($_POST['correo']== "" || $_POST['correo']== "") {
            echo "no hay datos";
            /**
            * Header permite redireccionar página al index
            * Si los datos del usuario no fueron escritos
            **/
            header('location:/PLANTILLANUEVA/ProyectoDEFINITIVO-master/5.Inicio_Sesion/inicio_sesion.php');
        }
        if (isset($users[$_POST['correo']])){
            if ($users[$_POST['correo']]== $_POST['contrasena']){
                /**
                *SetCookies que permite almacenar las cookies en la página web, almacena
                *el nombre de la sesión
                **/
                setcookie("PHPSESSID", $_COOKIE[session_name()],time()+300);
                /**
                *Setcookie que permite almacenar el correo del usuario
                *en la página web
                **/
                setcookie("Correo", $_POST['correo'], time()+300);
                /**
                *SetCookie que permite almacenar la contraseña del usuario
                +en la página web
                **/
                setcookie("Contraseña", $_POST['contrasena'], time()+300);
                header('location:/PLANTILLANUEVA/ProyectoDEFINITIVO-master/6.Sesion/1.home.php');
            } else {
                echo 'Contraseña incorrecta';

            /**
            *Header permite redireccionar la página al index del formulario
            *si la contraseña de usuario fue incorrecta
            **/
            header('location:/PLANTILLANUEVA/ProyectoDEFINITIVO-master/5.Inicio_Sesion/inicio_sesion.php');

            }
        } else {
            echo 'Datos incorrectos';

            /**
            *Header permite redireccionar la página al index del formulario
            *si los datos ingresados fueron incorrectos
            **/

            header('location:/PLANTILLANUEVA/ProyectoDEFINITIVO-master/5.Inicio_Sesion/inicio_sesion.php');

        }

    ?>
</body>
</html>
