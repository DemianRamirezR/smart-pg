<?php
    include '../../php/conexion.php';
    session_start();

    $usuario = $_SESSION['nombre'];

    //echo "<h2>Hola $usuario :)</h2>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S-MART | Tienda.</title>

    <link rel="icon" type="image/x-icon" href="../../img/s-mart-Flogo.png">
    <link rel="stylesheet" href="../../css/shop.css">
    <script src="../../libraries/f42030a039.js"></script>

</head>

<body>
    <!-- Inicio del Header  -->

    <header class="header">

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fa-solid fa-bars"></label>

        <a href="./Tienda.php" id="logo"><img src="../../img/logo normal.png" class="logo-inicio" alt title="Inicio"></a>

        <nav class="navbar">
            <a href="./Tienda.php">Inicio</a>
            <a href="../Ofertas/Ofertas.html">Ofertas</a>
            <a href="../Sucursales/Sucursales.html">Sucursales</a>
        </nav>

        <div class="icon">
            <a href="../usuario/user-info.php"><i class="fa-solid fa-user"><?php echo "<p>$usuario</p>";?></i></a>
            <a><i class="fa-solid fa-cart-shopping"><p>Carrito</p></i></a>
        </div>

    </header>

    <!-- Final del header -->

    <!-- Comienzo 'SECCION DE INICIO'  -->

    <section class="home" id="home">

        <div class="capa"></div>
        
        <div class="container">
            <h3>Tienda Smart</h3>
        </div>

    </section>

    <!-- Final 'SECCION DE INICIO' -->

    <!-- Body de la pagina -->

    <div class="container">

        <h1 class="heading">Categorías</h1>

        <div class="products-container">

            <div class="product" >
                <a href="../Articulos/productos-fruver.php">
                <img src="../../img/comida-sana.png" alt="">
                <h3>Frutas y verduras</h3>
                </a>
            </div>

            <div class="product" >
                <a href="./productos.php#belleza">
                <img src="../../img/tratamiento-de-belleza.png" alt="">
                <h3>Belleza</h3>
                </a>
            </div>

            <div class="product" >
                <a href="./productos.php">
                <img src="../../img//camion-de-abarrotes.png" alt="">
                <h3>Abarrotes</h3>
                </a>
            </div>

            <div class="product" >
                <a href="./productos.php">
                <img src="../../img/un-pan.png" alt="">
                <h3>Panaderia</h3>
                </a>
            </div>

            <div class="product" >
                <a href="./productos.php">
                <img src="../../img/cerveza.png" alt="">
                <h3>Bebidas y Licores</h3>
                </a>
            </div>

            <div class="product" >
                <a href="./productos.php">
                <img src="../../img/productos-lacteos.png" alt="">
                <h3>Lácteos</h3>
                </a>
            </div>

            <div class="product" >
                <a href="./productos.php">
                <img src="../../img/carne.png" alt="">
                <h3>Carnes</h3>
                </a>
            </div>

            <div class="product" >
                <a href="./productos.php">
                <img src="../../img/helado.png" alt="">
                <h3>Congelados</h3>
                </a>
            </div>

            <div class="product" >
                <a href="./productos.php">
                <img src="../../img/productos.png" alt="">
                <h3>Limpieza para el Hogar</h3>
                </a>
            </div>

            <div class="product" >
                <a href="./productos.php">
                <img src="../../img/tendedero.png" alt="">
                <h3>Cuidado de la Ropa</h3>
                </a>
            </div>

            <div class="product" >
                <a href="./productos.php">
                <img src="../../img/mascota.png" alt="">
                <h3>Mascotas</h3>
                </a>
            </div>

            <div class="product" >
                <a href="./productos.php">
                <img src="../../img/bebe.png" alt="">
                <h3>Bebés</h3>
                </a>
            </div>

        </div>

    </div>

    <!-- /Body de la pagina -->

    <!-- FOOTER -->

    <footer class="footer">
        <div class="foot-container">
            <div class="foot-row">
                <!-- Columna 1 Enlaces-->
                <div class="footer-col">
                    <h4>Enlaces rápidos</h4>
                    <ul>
                        <li><a href="../TiendaOnline/tienda.php#home">Inicio</a></li>
                        <li><a href="../TiendaOnline/tienda.php#about">Sobre Nosotros</a></li>
                        <li><a href="../TiendaOnline/tienda.php#contact">Contacto</a></li>
                    </ul>
                </div>
                <!-- Columna 2 Extras-->
                <div class="footer-col">
                    <h4>Enlaces extras</h4>
                    <ul>
                        <li><a href="./pages/Ofertas/Ofertas.html">Ofertas</a></li>
                        <li><a href="./pages/Sucursales/Sucursales.html">Sucursales</a></li>
                        <li><a href="./pages/TiendaOnline/Tienda.php">Tienda Online</a></li>
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
    <script src="../../js/cards.js"></script>

</body>

</html>