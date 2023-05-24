
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
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Contacto</title>
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
    <?php if (!empty($user)): ?>
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
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="icon-cart"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
						/>
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
							<svg
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								stroke-width="1.5"
								stroke="currentColor"
								class="icon-close"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M6 18L18 6M6 6l12 12"
								/>
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

        <section>
            <div class="container">
                <div class="numeros">
                    <h2>Envios a toda la republica</h2>
                    <p>Telefonos: 4412345678 / 4498765432</p>
                    <p>Email: clientes@InfoSys.com</p>
                    <p>Horario de atención: Lunea a Viernes: 09:00am - 06:00pm, Sabados: 09:00am - 02:00pm </p>
                </div>
            </div>
    
            <div class="maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1061.7861161731241!2d-101.1601786281741!3d19.689031151676105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d120728d4b03b%3A0xda7b0b8ee81f95cf!2sAv.%20Lic.%20Enrique%20Ram%C3%ADrez%20Miguel%20%23676%20Col%2C%20Chapultepec%20Oriente%2C%2058260%20Morelia%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1681880451260!5m2!1ses-419!2smx"
                    width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="info_maps">
                    <h2>Sucursal Morelia</h2>
                    <p>Av. Lic. Enrique Ramírez Miguel, Chapultepec Oriente, 58270 Morelia, Mich.</p>
                    <p>Horario de atención: Lunea a Viernes: 09:00am - 06:00pm, Sabados: 09:00am - 02:00pm </p>
                </div>
            </div>
    
            <div class="maps">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5354.593019993963!2d-103.41354657129334!3d20.710789073428025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af03ca8704dd%3A0xcc4202a7175eec40!2sBlvrd%20Puerta%20de%20Hierro%202085%2C%20Puerta%20de%20Hierro%2C%2045116%20Zapopan%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1681881019844!5m2!1ses-419!2smx"
                    width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="info_maps">
                    <h2>Sucursal Guadalajara</h2>
                    <p>Blvrd Puerta de Hierro 2085, Puerta de Hierro, 45116 Zapopan, Jal.</p>
                    <p>Horario de atención: Lunea a Viernes: 09:00am - 06:00pm, Sabados: 09:00am - 02:00pm </p>
                </div>
            </div>
        </section>
    </body>
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


</section>
<div class="copyright-bar">
    <div class="container-bar">
        <div class="col-sm-12 no-padding">
            <div class="clearfix payment-methods">
                <img class="pull-right img-responsive" src="https://ddtech.mx/assets/img/logos-pagos.png?1583611042"
                    alt="">
            </div>
        </div>
    </div>
</div>

<div class="last">
    <p>Informatics Systems de Mexico IS © 2023</p>

</div>
</footer>
<?php else: ?>
        <h1>Por favor inicia sesion o registrate</h1>

        <a href="login.php">Ingresar</a> o
        <a href="signup.php">Registrate</a>
    <?php endif; ?>
</html>