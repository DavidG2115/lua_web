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
    <title>Terminos y condiciones</title>
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
                <h2>Terminos y condiciones</h2>
            </div>



            <h2>1. Aceptación de los términos y condiciones</h2>
            <p>Al acceder y utilizar nuestro sitio web, aceptas los siguientes términos y condiciones en su totalidad.
                Si no estás de acuerdo con alguno de estos términos, te recomendamos que no utilices nuestra plataforma.
            </p>

            <h2>2. Uso del sitio web</h2>
            <h3>2.1. Contenido informativo</h3>
            <p>El contenido de este sitio web es solo para fines informativos y promocionales. No garantizamos la
                exactitud, integridad o actualidad de la información proporcionada.</p>
            <h3>2.2. Responsabilidad del usuario</h3>
            <p>No nos hacemos responsables de cualquier pérdida o daño causado por la confianza en la información
                contenida en este sitio web.</p>
            <h3>2.3. Uso prohibido</h3>
            <p>Queda prohibido el uso no autorizado o ilegal de este sitio web, incluyendo pero no limitado a: acceso no
                autorizado, introducción de virus informáticos, intentos de modificar, corromper o robar datos.</p>

            <h2>3. Compra de productos</h2>
            <h3>3.1. Información de compra</h3>
            <p>Al realizar una compra a través de nuestro sitio web, aceptas proporcionar información precisa y completa
                necesaria para el procesamiento del pedido.</p>
            <h3>3.2. Aceptación de pedidos</h3>
            <p>Nos reservamos el derecho de rechazar o cancelar cualquier pedido por cualquier motivo, incluyendo pero
                no limitado a: información de pago incorrecta, sospecha de fraude o incumplimiento de estos términos y
                condiciones.</p>
            <h3>3.3. Precios y disponibilidad</h3>
            <p>Los precios y la disponibilidad de los productos están sujetos a cambios sin previo aviso.</p>

            <h2>4. Envío y entrega</h2>
            <h3>4.1. Plazos de entrega</h3>
            <p>Nos esforzaremos por enviar los productos adquiridos lo antes posible, sin embargo, no garantizamos
                plazos de entrega exactos y no nos hacemos responsables de los retrasos causados por circunstancias
                fuera de nuestro control.</p>
            <h3>4.2. Riesgo de pérdida o daño</h3>
            <p>El riesgo de pérdida o daño de los productos pasa al comprador en el momento de la entrega.</p>

            <h2>5. Devoluciones y reembolsos</h2>
            <h3>5.1. Política de devoluciones</h3>
            <p>Aceptamos devoluciones de productos en su estado original y sin usar dentro de un plazo de X días desde
                la entrega, sujeto a ciertas condiciones y restricciones. Te recomendamos leer nuestra política de
                devoluciones para más detalles.</p>
            <h3>5.2. Proceso de reembolso</h3>
            <p>Los reembolsos se procesarán dentro de un plazo razonable después de recibir y verificar los productos
                devueltos.</p>

            <h2>6. Propiedad intelectual</h2>
            <h3>6.1. Derechos de autor</h3>
            <p>Todo el contenido presente en este sitio web, incluyendo pero no limitado a textos, imágenes, logotipos,
                gráficos y software, está protegido por derechos de autor y otros derechos de propiedad intelectual.</p>
            <h3>6.2. Restricciones de uso</h3>
            <p>No se permite la reproducción, distribución, modificación o uso no autorizado de dicho contenido sin
                nuestro consentimiento previo por escrito.</p>

            <h2>7. Limitación de responsabilidad</h2>
            <h3>7.1. Exclusión de responsabilidad</h3>
            <p>En la máxima medida permitida por la ley aplicable, no seremos responsables de ningún daño directo,
                indirecto, incidental, consecuente o especial, incluyendo pérdida de beneficios o interrupción del
                negocio, derivados del uso o imposibilidad de uso de nuestro sitio web o de los productos adquiridos a
                través del mismo.</p>



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

    <?php else: ?>
        <h1>Por favor inicia sesion o registrate</h1>

        <a href="login.php">Ingresar</a> o
        <a href="signup.php">Registrate</a>
    <?php endif; ?>

</body>

</html>