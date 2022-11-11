<?php
    //Link : http://localhost/smart/php/registro.php
    error_reporting(0);

    include 'conexion.php';

    if(isset($_POST["submit"])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $numtel = $_POST['numtel'];
        $pass = $_POST['pass'];

        $query = "INSERT INTO  usuarios(nombre,email,direccion,numtel,pass)
                  VALUES('$nombre','$email','$direccion','$numtel','$pass')";
    }

    //Verificamos que el correo no se repita en la base de datos:

        $verify_em = mysqli_query($conexion,
         "SELECT * FROM usuarios WHERE email='$email' ");

         if (mysqli_num_rows($verify_em) > 0) {
            echo '
            <script>
                alert("Su Correo ya esta registrado. Intente de nuevo 😕");
                window.location = "../Index.php";
            </script>
            ';
            exit();
         }

         //Verificamos que el Nombre no se repita en la base de datos:
            $verify_nm = mysqli_query($conexion,
            "SELECT * FROM usuarios WHERE nombre='$nombre' ");
   
            if (mysqli_num_rows($verify_nm) > 0) {
               echo '
               <script>
                   alert("Su Nombre ya esta registrado. Intente de nuevo 😕");
                   window.location = "../Index.php";
               </script>
               ';
               exit();
            }

    $ejecutar = mysqli_query($conexion,$query);

    //Si se ejecuta entonces ('alerta') y me devuelve al index
    if ($ejecutar) {
        echo '
            <script>
            alert("Cuenta creada con éxito 😎");
            window.location = "../Index.php";
            </script>
            ';
    }else{
        //Sino se ejecuta entonces ('alerta de error') y me devuelve al index
        echo '
            <script>
            alert("Ocurrio un error. Intentalo de nuevo 😕");
            window.location = "../Index.php";
            </script>
            ';
    }

    mysqli_close($conexion);
?>