<?php
    session_start();
    
    if(isset($_SESSION['nombre'])){
        echo '
            <script>
                alert("Cerrando sesion 🌞");
                window.location = "../Index.php";
            </script>
        ';
        session_destroy(); 
    }

?>