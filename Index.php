<?php
    
    session_start();

    if (isset($_SESSION['nombre'])) {
        header("location: ./pages/TiendaOnline/Tienda.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S-MART | El rey de las Ofertas.</title>

    <link rel="icon" type="image/x-icon" href="./img/s-mart-Flogo.png">
    <link rel="stylesheet" href="./css/form.css">
    <script src="./libraries/f42030a039.js"></script>

</head>

<body>
    <!-- Inicio del Header  -->

    <header class="header">

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fa-solid fa-bars"></label>

        <a href="Index.php" id="logo"><img src="./img/logo normal.png" class="logo-inicio" alt title="Inicio"></a>

        <nav class="navbar">
            <a href="Index.php">Inicio</a>
            <a href="#">Ofertas</a>
        </nav>

        <div class="icon">
            <a><i class="fa-solid fa-star"></i></a>
        </div>

    </header>

    <!-- Final del header -->

    <!-- Body de la pagina -->

        <main>

            <div class="contenedor-todo">

                <div class="caja-trasera">
                    
                    <div class="caja-trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión y comienza a comprar!</p>
                        <button id="btn-sesion">Iniciar Sesión</button>
                    </div>

                    <div class="caja-trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn-registro">Regístrarse</button>
                    </div>

                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor-login-reg">
                    <!--Login-->
                    <form action="./php/login-account.php" method="POST" class="form-login">

                        <h2>Iniciar Sesión</h2>
                        <input type="text" name="nombre" placeholder="Nombre">
                        <input type="text" name="email" placeholder="Correo Electronico">
                        <input type="password" name="pass" placeholder="Contraseña">
                        <button type="submit">Entrar</button>

                    </form>

                    <!--Register-->
                    <form action="./php/registro.php" method="POST" class="form-register">

                        <h2>Regístrarse</h2>
                        <input type="text" name="nombre" placeholder="Nombre Completo" required>
                        <input type="text" name="email" placeholder="Correo Electronico" required>
                        <input type="text" name="direccion" placeholder="Dirección" required>
                        <input type="tel" name="numtel" placeholder="Número de Teléfono" required>
                        <input type="password" name="pass" placeholder="Contraseña" required>
                        <button type="submit" name="submit">Regístrarse</button>

                    </form>

                </div>

            </div>

        </main>

    <!-- /Body de la pagina -->

    <!-- FOOTER -->
    
    <footer class="footer">
        <div class="foot-container">
            <div class="foot-row">
                <!-- Columna 1 Enlaces-->
                <div class="footer-col">
                    <h4>Enlaces rápidos</h4>
                    <ul>
                        <li><a href="./pages/TiendaOnline/Tienda.php#home">Inicio</a></li>
                        <li><a href="./pages/TiendaOnline/Tienda.php#about">Sobre Nosotros</a></li>
                        <li><a href="./pages/TiendaOnline/Tienda.php#contact">Contacto</a></li>
                    </ul>
                </div>
                <!-- Columna 2 Extras-->
                <div class="footer-col">
                    <h4>Enlaces extras</h4>
                    <ul>
                        <li><a href="#">Ofertas</a></li>
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
    <script src="./js/form.js"></script>
    
</body>
</html>