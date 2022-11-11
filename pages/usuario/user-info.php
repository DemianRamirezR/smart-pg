<?php

    session_start();
    
    include '../../php/conexion.php';

    $usuario = $_SESSION['nombre'];
    $email = $_SESSION['email'];

    if(!isset($usuario)){
        echo '
               <script>
                   alert("Inicia sesión primero porfavor ó registrate. 😊");
                   window.location = "../../Index.php";
               </script>
            ';
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S-MART | Mi Perfil.</title>
    <link rel="icon" type="image/x-icon" href="../../img/s-mart-Flogo.png">
    <link rel="stylesheet" href="../../css/user.css">
    <script src="../../libraries/f42030a039.js"></script>
</head>

<body>
    <div class="body-container">
        <div class="card" data-tilt>
            <img src="../../img/perfil.png">
            <h2>Nombre: </h2><p><?php echo $usuario; ?></p>
            <h2>Correo Electronico: </h2> <p><?php echo $email; ?></p>
            <a href="../TiendaOnline/Shop.php" class="btn-user">Volver a la Tienda</a>
            <a href="../../php/cerrar_sesion.php" class="btn-user">Cerrar Sesión</a>
        </div>
    </div>
    <script src="../../libraries/vanilla-tilt.js"></script>
</body>

</html>