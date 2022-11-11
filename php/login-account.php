<?php

    session_start();
    
    include 'conexion.php';

        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $q = mysqli_query($conexion, 
        "SELECT * FROM `usuarios` WHERE `nombre` = '$nombre' && `email` = '$email' && `pass` = '$pass' ");

        if (mysqli_num_rows($q) > 0) {
            $_SESSION['nombre'] = $nombre;
            $_SESSION['email'] = $email;
            header("location: ../pages/TiendaOnline/Tienda.php");
            exit();

        }else{
            echo '
            <script>
            alert("Datos Inexistentes ☹️. Verifique sus datos por favor.");
            window.location = "../Index.php";
            </script>
            ';
            exit();
        }

?>