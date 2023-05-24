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
	<section>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Tienda</title>
		<link rel="stylesheet" href="styles.css" />
		
	</head>
	<body>
	<?php if (!empty($user)): ?>
		<header>
			<a title="InfoSys" class="navbar" alt="InfoSys" href="index.php">
                <img class="img-responsive center-block" src="logoP2.png" alt=""></a>
				
				<ul class="navbar">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="#">Tarjetas de Video</a></li>
					<li><a href="procesadores.php">Procesadores</a></li>
					<li><a href="mothers.php">Motherboards</a></li>
					<li><a href="almacenamiento.php">Almacenamiento</a></li>
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

	</section>

		<section id="info">		
		<div class="container-items">
			<div class="item">
				<figure>
					<img
						src="imagenes/Graficas/art1.png"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de video Radeon RX 6400 6GB GDDR6 </h2>
					<p class="price">$3999</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="imagenes/Graficas/art2.png"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de video Radeon RX 6600 8GB GDDR6 </h2>
					<p class="price">$4999</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="imagenes/Graficas/art3.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de video NVIDIA RTX 3060</h2>
					<p class="price">$6499</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="imagenes/Graficas/g5.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de Video Asus NVIDIA Geforce RTX 3060</h2>
					<p class="price">$7299</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
			<div class="item">
				<figure>
					<img
						src="imagenes/Graficas/g6.png"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de video GeForce RTX 4070 ASUS DUA</h2>
					<p class="price">$12799</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
            <div class="item">
				<figure>
					<img
						src="imagenes/Graficas/g7.png"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de video Intel Arc A750</h2>
					<p class="price">$5199</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
            <div class="item">
				<figure>
					<img
						src="imagenes/Graficas/g8.png"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de video GeForce RTX 4070 ASUS TUF </h2>
					<p class="price">$13999</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
            <div class="item">
				<figure>
					<img
						src="imagenes/Graficas/g9.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de Video Power, AMD Radeon RX 6650XT </h2>
					<p class="price">$9299</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
            <div class="item">
				<figure>
					<img
						src="imagenes/Graficas/g10.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de video NVIDIA GeForce RTX 4090 24GB</h2>
					<p class="price">$17500</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
            <div class="item">
				<figure>
					<img
						src="imagenes/Graficas/g11.jpg"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de Video NVIDIA Geforce RTX 4080</h2>
					<p class="price">$29000</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
            <div class="item">
				<figure>
					<img
						src="imagenes/Graficas/g12.png"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de Video NVIDIA Quadro T400 2GB GDDR6</h2>
					<p class="price">$3499</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
            <div class="item">
				<figure>
					<img
						src="imagenes/Graficas/g13.png"
						alt="producto"
					/>
				</figure>
				<div class="info-product">
					<h2>Tarjeta de video Radeon RX 6900 XT 16GB GDDR6 </h2>
					<p class="price">$37999</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>
            
		</div>

	</section>
		<script src="index.js"></script>
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