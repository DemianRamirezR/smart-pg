<?php
    include 'conexion.php';


    // <------ Recibimos datos del formulario " CONTACTO " ------> 

    $nombre = $_POST['nombre'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
    $Sucursal = $_POST['Sucursal'];
    $Tema = $_POST['Tema'];
    $Comentarios = $_POST['Comentarios'];

    // <------ Mostramos datos del formulario " CONTACTO " ------> 
    /*echo "Los datos son los siguientes:,<br>";
    echo "$nombre, $Email, $Telefono, $Sucursal, $Tema y $Comentarios";*/

    // <------ Conectamos ahora a la base de datos para insertar del formulario a " BD CONTACTO " ------> 

    $Insertar = "INSERT INTO contacto (nombre,Email,Telefono,Sucursal,Tema,Comentarios) VALUES('$nombre','$Email','$Telefono','$Sucursal','$Tema','$Comentarios') ";

    mysqli_query($conexion, $Insertar);

    // <-------- Comprobamos el enviar formulario -------->

    //Para comprobar:
    if ($conexion->connect_errno) {
        echo '
        <script>
            alert("Hubo un error al enviar su formulario. ❌");
            window.location = "../Index.php";
        </script>
        ';
        exit();
    } else {
        echo '
        <script>
            alert("Su formulario de contacto fue enviado correctamente. En breve recibir una respuesta por parte de un trabajador via Email. 📩");
            window.location = "../Index.php";
        </script>
        ';
        exit();
    }

?>