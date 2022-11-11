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
    <title>S-MART | Productos.</title>

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
            <a href="./Shop.php">Tienda Smart</a>
            <a href="../Ofertas/Ofertas.html">Ofertas</a>
            <a href="../Sucursales/Sucursales.html">Sucursales</a>
        </nav>

        <div class="icon">
            <a href="../usuario/user-info.php"><i class="fa-solid fa-user"><?php echo "<p>$usuario</p>";?></i></a>
            <a><i class="fa-solid fa-cart-shopping"><p>Carrito</p></i></a>
        </div>

    </header>

    <!-- Final del header -->

    <!-- Tarjetas de Productos -->

    <!-- Body de la pagina -->

    <div class="container" style="padding: 7rem 2rem;">

        <h1 class="heading" id="fruver">Frutas y Verduras</h1>

        <div class="products-container">
        <!-- Frutas y verduras -->
            <div class="product" data-name="p-1">
                <img src="../../img/1.png" alt="">
                <h3>Fresas 454 g</h3>
                <div class="price">$79.00</div>
            </div>

            <div class="product" data-name="p-2">
                <img src="../../img/2.png" alt="">
                <h3>Cebolla blanca / kg</h3>
                <div class="price">$39.90/kg</div>
            </div>

            <div class="product" data-name="p-3">
                <img src="../../img/3.png" alt="">
                <h3>Jitomate bola / kg</h3>
                <div class="price">$32.90/kg</div>
            </div>

            <div class="product" data-name="p-4">
                <img src="../../img/4.png" alt="">
                <h3>Berenjena / Kg</h3>
                <div class="price">$59.00/kg</div>
            </div>

            <div class="product" data-name="p-5">
                <img src="../../img/5.png" alt="">
                <h3>Brócoli / Kg</h3>
                <div class="price">$39.90/kg</div>
            </div>

            <div class="product" data-name="p-6">
                <img src="../../img/6.png" alt="">
                <h3>Papa blanca / Kg</h3>
                <div class="price">$37.90/kg</div>
            </div>

            <div class="product" data-name="p-7">
                <img src="../../img/papaya.png" alt="">
                <h3>Papaya maradol / Kg</h3>
                <div class="price">$24.90/kg</div>
            </div>

            <div class="product" data-name="p-8">
                <img src="../../img/limon.png" alt="">
                <h3>Limón agrio en malla 1 kg</h3>
                <div class="price">$25.00</div>
            </div>

            <div class="product" data-name="p-9">
                <img src="../../img/uvas.png" alt="">
                <h3>Uva blanca sin semilla / Kg</h3>
                <div class="price">$52.00/kg</div>
            </div>

            <div class="product" data-name="p-10">
                <img src="../../img/peras.png" alt="">
                <h3>Pera de anjou / Kg</h3>
                <div class="price">$34.90/kg</div>
            </div>

        </div>

        <!-- Modales flotantes -->
    <div class="products-preview">
    <!-- Frutas y verduras -->
        <div class="preview" data-target="p-1">
            <i class="fas fa-times"></i>
            <img src="../../img/1.png" alt="">
            <h3>Fresas</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$79.00</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
            </div>
        </div>

        <div class="preview" data-target="p-2">
            <i class="fas fa-times"></i>
            <img src="../../img/2.png" alt="">
            <h3>Cebolla blanca</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$39.90/kg</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
            </div>
        </div>

        <div class="preview" data-target="p-3">
            <i class="fas fa-times"></i>
            <img src="../../img/3.png" alt="">
            <h3>Jitomate bola / kg</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$32.90/kg</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
            </div>
        </div>

        <div class="preview" data-target="p-4">
            <i class="fas fa-times"></i>
            <img src="../../img/4.png" alt="">
            <h3>Berenjena / Kg</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$59.00/kg</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
            </div>
        </div>

        <div class="preview" data-target="p-5">
            <i class="fas fa-times"></i>
            <img src="../../img/5.png" alt="">
            <h3>Brócoli / Kg</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$39.90/kg</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
            </div>
        </div>

        <div class="preview" data-target="p-6">
            <i class="fas fa-times"></i>
            <img src="../../img/6.png" alt="">
            <h3>Papa blanca / Kg</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$37.90/kg</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
            </div>
        </div>

        <div class="preview" data-target="p-7">
            <i class="fas fa-times"></i>
            <img src="../../img/papaya.png" alt="">
            <h3>Papaya maradol / Kg</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$24.90/kg</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
            </div>
        </div>

        <div class="preview" data-target="p-8">
            <i class="fas fa-times"></i>
            <img src="../../img/limon.png" alt="">
            <h3>Limón agrio en malla 1 kg</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$25.00</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
            </div>
        </div>

        <div class="preview" data-target="p-9">
            <i class="fas fa-times"></i>
            <img src="../../img/uvas.png" alt="">
            <h3>Uva blanca sin semilla / Kg</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$52.00/kg</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
            </div>
        </div>

        <div class="preview" data-target="p-10">
            <i class="fas fa-times"></i>
            <img src="../../img/peras.png" alt="">
            <h3>Pera de anjou / Kg</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$34.90/kg</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
            </div>
        </div>

        <!-- Belleza -->

        <div class="preview" data-target="p-11">
            <i class="fas fa-times"></i>
            <img src="../../img/shampoo.png" alt="">
            <h3>Shampoo Head & Shoulders control caspa</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$99.00</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
            </div>
        </div>

        <div class="preview" data-target="p-12">
            <i class="fas fa-times"></i>
            <img src="../../img/crema.png" alt="">
            <h3>Crema corporal Nivea</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$89.00</div>
            <div class="buttons">
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i> Añadir al carrito</a>
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
                        <li><a href="./tienda.php#home">Inicio</a></li>
                        <li><a href="./tienda.php#about">Sobre Nosotros</a></li>
                        <li><a href="./tienda.php#contact">Contacto</a></li>
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