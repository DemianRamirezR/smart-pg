<?php

// <------ Conexion a base de datos ------> 

$host = "localhost";    // sera el valor de nuestra BD 
$usuariodb = "root";    // sera el valor de nuestra BD 
$clavedb = "";    // sera el valor de nuestra BD 
$basededatos = "smart";   // sera el valor de nuestra BD 
//Lista de Tablas:

//Otro metodo de conexion:
$conexion = mysqli_connect($host, $usuariodb, $clavedb, $basededatos);
//Metodo de conexion original del maestro:
//new mysqli($host, $usuariodb, $clavedb, $basededatos);

// <-------- Comprobamos el enviar formulario -------->

//Para comprobar:
/*if ($conexion->connect_errno) {
    echo '
    <script>
        alert("Hubo un error. ❌");
    </script>
    ';
    exit();
} else {
    echo '
    <script>
        alert("Se ha conectado correctamente. 📩");
        window.location = "../Index.php";
    </script>
    ';
    exit();
}*/

?>