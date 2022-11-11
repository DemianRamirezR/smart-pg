<?php
    include '../../php/conexion.php';
    session_start();

    $usuario = $_SESSION['nombre'];

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
    <title>S-MART | El rey de las Ofertas.</title>

    <link rel="icon" type="image/x-icon" href="../../img/s-mart-Flogo.png">

    <!-- kit link de font awesome  -->
    <script src="../../libraries/f42030a039.js" crossorigin="anonymous"></script>

    <!-- link de css personalizado  -->
    <link rel="stylesheet" href="../../css/general.css">

</head>

<body>

    <!-- Inicio del Header  -->

    <header class="header">

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fa-solid fa-bars"></label>

        <a href="../../Index.php" id="logo"><img src="../../img/logo normal.png" class="logo-inicio" alt title="Inicio"></a>

        <nav class="navbar">
            <a href="Tienda.php">Inicio</a>
            <a href="Shop.php">Tienda Smart</a>
            <a href="#">Ofertas</a>
        </nav>

        <div class="icon">
            <a href="../usuario/user-info.php"><i class="fa-solid fa-user"><?php echo "<p>$usuario</p>";?></i></a>
        </div>

    </header>

    <!-- Final del header -->

    <!-- Comienzo 'SECCION DE INICIO'  -->

    <section class="home" id="home">
        <div class="capa"></div>
        <div class="container">
            <h3>Ven a S-Mart!!</h3>
            <span>Y aprovecha los descuentos loquisimos en todos los departamentos de la tienda ⭐.</span><br>
            <span class="span2">Visita tu perfil dando click en este icono -> <i class="fa-solid fa-user"></i>.</span><br>
            
        </div>

    </section>

    <!-- Final 'SECCION DE INICIO' -->

    <!-- Comienzo 'SECCION SOBRE NOSOTROS'  -->

    <section class="about" id="about">

        <h1 class="heading">Sobre nosotros</h1>

        <div class="row">

            <div class="video-container">
                <video src="../../img/video/Smart-bc_vid.mp4" loop autoplay muted></video>
            </div>

            <div class="content">
                <h3>¿Por qué elegirnos?</h3>
                <p>Recuerda, S-Mart es el único supermercado que, en la mayoría de sus sucursales, una vez que abre sus
                    puertas, no las vuelve a cerrar.</p>
                <p>Estamos obsesionados en brindarte una experiencia única en tus envíos.
                    Si no estás 100% satisfecho te damos un reembolso.</p>
                <p>Tecnología, experiencia y liderazgo para brindarte un servicio superior a todo lo conocido. Compra
                    fácil, rápido y seguro.</p>
            </div>

        </div>

    </section>

    <!-- Final 'SECCION SOBRE NOSOTROS'  -->

    <!-- Comienzo 'TARJETAS CON ICONS'  -->

    <section class="icons-container">

        <div class="icons">
            <img src="../../img/icon-1.png" alt="">
            <div class="info">
                <h3>Entrega gratis</h3>
                <span>En todos sus pedidos.</span>
            </div>
        </div>

        <div class="icons">
            <img src="../../img/icon-3.png" alt="">
            <div class="info">
                <h3>Ofertas y regalos</h3>
                <span>Con algunos productos.</span>
            </div>
        </div>

        <div class="icons">
            <img src="../../img/icon-4.png" alt="">
            <div class="info">
                <h3>Pagos Seguros</h3>
                <span>Protegidos por paypal</span>
            </div>
        </div>

    </section>

    <!-- Final 'TARJETAS CON ICONS'  -->

    <!-- CONTACTO  -->

    <section class="contact" id="contact">

        <h1 class="heading">Nuestro Contacto </h1>

        <div class="row">

            <form action="../../php/contacto.php" method="POST">

                <center>
                    <h2>Mandanos un correo! 😊</h2>
                </center>

                <input type="text" name="nombre" placeholder="Nombre Completo" class="box" required>

                <input type="email" name="Email" placeholder="Correo Electronico" class="box" required>

                <input type="tel" name="Telefono" placeholder="Número Telefónico" class="box" required>
                
                <input type="text" name="Sucursal" placeholder="Sucursal" class="box" required>

                <input type="text" name="Tema" placeholder="Tema" class="box" required>

                <textarea name="Comentarios" class="box"
                    placeholder="Deje un comentario sobre nuestra pagina o describa su problema para poder ayudar."
                    cols="30" rows="10" required></textarea>

                <button type="submit" name="enviar" class="btn"><i class="fa-solid fa-paper-plane"></i></button>

            </form>

            <div class="image">
                <img src="../../img/online-groceries-animate.svg" alt="">
            </div>

        </div>

    </section>

    <!-- /CONTACTO -->

    <!-- FOOTER -->
    
    <footer class="footer">
        <div class="foot-container">
            <div class="foot-row">
                <!-- Columna 1 Enlaces-->
                <div class="footer-col">
                    <h4>Enlaces rápidos</h4>
                    <ul>
                        <li><a href="#home">Inicio</a></li>
                        <li><a href="#about">Sobre Nosotros</a></li>
                        <li><a href="#contact">Contacto</a></li>
                    </ul>
                </div>
                <!-- Columna 2 Extras-->
                <div class="footer-col">
                    <h4>Enlaces extras</h4>
                    <ul>
                        <li><a href="../../pages/Ofertas/Ofertas.html">Ofertas</a></li>
                        <li><a href="../../pages/Sucursales/Sucursales.html">Sucursales</a></li>
                        <li><a href="./Shop.php">Tienda Online</a></li>
                    </ul>
                </div>
                <!-- Columna 3 Iconos-->
                <div class="footer-col">
                    <h4>Conéctate con S-Mart en:</h4>
                    <div class="social-links">
                        <a href="https://bit.ly/3Taui2s"><i class="fa-brands fa-facebook facebook"></i></a>
                        <a href="https://bit.ly/3D2vBLj"><i class="fa-brands fa-twitter twitter"></i></a>
                        <a href="https://bit.ly/3g17uDx"><i class="fa-brands fa-pinterest pinterest"></i></a>
                        <a href="https://bit.ly/3VzcyiS"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <section class="footer-bottom">
        <div class="credit">
            &copy; Copyright CBTIS 128 - 5-I | Proyecto BD 2022 |<span> Ramirez Ramirez Jose Demian</span> |
            <span>Delgado Valenzuela Josue Ezekiel</span> | Todos los derechos reservados
        </div>
    </section>

    <!-- /FOOTER -->
    
    <script src="../../js/menu.js"></script>

</body>

</html>