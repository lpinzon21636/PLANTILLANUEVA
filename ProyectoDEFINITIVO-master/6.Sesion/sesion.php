<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sesión</title>
</head>
<body>
    <?php
        $users = [
          'santiago' => '1234', 'natalia' => '4321', 'daniela' => '9876',
        ];

        if (isset($users[$_POST['user']])){
            if ($users[$_POST['user']]== $_POST['password']){
                session_start();
                echo "Conectado";
            } else {
                echo 'Contraseña incorrecta';
                //header('location:i');
            }
        } else {
            echo 'Datos incorrectos';
            //header('location:index.php');
        }

    ?>
</body>
</html>
