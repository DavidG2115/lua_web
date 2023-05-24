<?php
session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nosotros</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
<?php if (!empty($user)): ?>
    <section>
        <header>
            <a title="InfoSys" class="navbar" alt="InfoSys" href="index.php">
                <img class="img-responsive center-block" src="logoP2.png" alt=""></a>

            <ul class="navbar">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="graficas.php">Tarjetas de Video</a></li>
                <li><a href="graficas.php">Procesadores</a></li>
                <li><a href="mothers.php">Motherboards</a></li>
                <li><a href="mothers.php">Almacenamiento</a></li>
                <li><a href="logout.php"> Salir</a></li>
            </ul>

            <div class="container-icon">
                <div class="container-cart-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="icon-cart">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                    <div class="count-products">
                        <span id="contador-productos">0</span>
                    </div>
                </div>

                <div class="container-cart-products hidden-cart">
                    <div class="row-product hidden">
                        <div class="cart-product">
                            <div class="info-cart-product">
                                <span class="cantidad-producto-carrito">1</span>
                                <p class="titulo-producto-carrito">Zapatos Nike</p>
                                <span class="precio-producto-carrito">$80</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="icon-close">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>

                    <div class="cart-total hidden">
                        <h3>Total:</h3>
                        <span class="total-pagar">$200</span>
                    </div>
                    <p class="cart-empty">El carrito está vacío</p>
                </div>
            </div>
            <ul class="navbar" id="usuario">
                    <li><a>Hola
                            <?= $user['email']; ?>
                        </a> </li>
                        <li><a href="logout.php"> Salir</a></li>
                </ul>
        </header>
    </section>
    <br><br><br><br><br>

    <section class="Nosotros" id="info">
        <div class="cont">

            <div class="acerca_de">
                <h2>Acerca de Nosotros</h2>
            </div>

            <p>Informatics Systems es una empresa 100% mexicana dedicada a la venta de produtos de tecnologia.
                Ofrecemos una amplia gama de productos, desde dispositivos electrónicos, accesorios y equipos para el
                hogar
                y la oficina, hasta gadgets de vanguardia. Nuestra plataforma de comercio electrónico proporciona una
                experiencia de compra rápida y segura para nuestros clientes.
            </p>


            <div class="mision_vision">
                <h3>Misión</h3>
                <p>Nuestra misión es ofrecer productos de tecnología de alta calidad y vanguardia que mejoren la vida de
                    las
                    personas y simplifiquen su día a día. Buscamos constantemente innovar y mantenernos actualizados con
                    las
                    últimas tendencias y avances en el campo de la tecnología, para brindar a nuestros clientes
                    soluciones
                    tecnológicas confiables y de vanguardia que satisfagan sus necesidades.</p>

                <h3>Visión</h3>
                <p>Nuestra visión es convertirnos en el líder global en la venta en línea de productos de tecnología,
                    reconocidos por nuestra calidad, servicio al cliente excepcional y capacidad para adaptarnos a las
                    necesidades cambiantes del mercado. Buscamos establecer relaciones duraderas con nuestros clientes,
                    basadas en la confianza y la satisfacción, y ser la opción preferida para quienes buscan productos
                    de
                    tecnología innovadores y confiables.</p>

            </div>

            <div class="valores">
                <h3>Valores de la empresa</h3>
                <h4>Calidad y servicio</h4>
                <p>Realizar el máximo esfuerzo en atención a nuestros clientes, tratando de cumplir las expectativas con
                    calidad y trato humano bajo la premisa de ganar-ganar.</p>

                <h4>Trabajo en equipo</h4>
                <p>En Informatics Systems creemos que trabajando juntos, podemos alcanzar metas más ambiciosas y obtener
                    resultados excepcionales</p>
                <h4>Servicio al cliente</h4>
                <p>En Informatics Systems consideramos de vital importancia ofrecer excelencia en el servicio,
                    proporcionado a nuestros clientes “lo que el cliente necesita, en donde lo necesita y cuando lo
                    necesita”.</p>
            </div>

        </div>


    </section>


    <script src="tienda.js"></script>



    <!-- footer -->
    <section class="contact" :id="contact">
        <div class="main-contact">
            <div class="contact-content">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="nosotres.php#">Nosotros</a></li>
                <li><a href="contacto.php">Contacto</a></li>

            </div>
            <div class="contact-content">
                <li><a href="terminos.php">Terminos y condiciones</a></li>
               
            </div>

            <div class="contact-content">
                <li><a href="https://www.facebook.com/">Facebook</a></li>
                <li><a href="https://www.instagram.com/">Instagram</a></li>
                <li><a href="https://twitter.com/?lang=es">Twitter</a></li>
            </div>
        </div>

        <div class="action">
            <form>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="submit" name="submit" value="submit" required>
            </form>

        </div>



        <div class="copyright-bar">
            <div class="container-bar">
                <div class="col-sm-12 no-padding">
                    <div class="clearfix payment-methods">
                        <img class="pull-right img-responsive"
                            src="https://ddtech.mx/assets/img/logos-pagos.png?1583611042" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="last">
            <p>Informatics Systems de Mexico IS © 2023</p>
        </div>
    </section>
    </footer>

</body>
<?php else: ?>
        <h1>Por favor inicia sesion o registrate</h1>

        <a href="login.php">Ingresar</a> o
        <a href="signup.php">Registrate</a>
    <?php endif; ?>
</html>