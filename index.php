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
<html>

<head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="styles.css" />>
    <link rel="stylesheet" href="estilos.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script defer src="funciones.js"></script>

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />


</head>

<body>

<section id="container-slider">
            <a href="javascript: funcionEjecutar('anterior');" class="arrowPrev"><i
                    class="fas fa-chevron-circle-left"></i></a>
            <a href="javascript: funcionEjecutar('siguiente');" class="arrowNext"><i
                    class="fas fa-chevron-circle-right"></i></a>
            <ul class="listslider">
                <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
                <li><a itlist="itList_1" href="#"></a></li>
                <li><a itlist="itList_2" href="#"></a></li>
                <li><a itlist="itList_3" href="#"></a></li>
                <li><a itlist="itList_4" href="#"></a></li>
                <li><a itlist="itList_5" href="#"></a></li>
            </ul>
            <ul id="slider">
                <li style="background-image: url('imagenes/Carrucel/car1.jpg'); z-index:0; opacity: 1;">
                    <div class="content_slider">
                    </div>
                </li>
                <li style="background-image: url('imagenes/Carrucel/car2.jpg'); ">
                    <div class="content_slider">
                    </div>
                </li>
                <li style="background-image: url('imagenes/Carrucel/car6.jpg'); ">
                    <div class="content_slider">
                    </div>
                </li>
                <li style="background-image: url('imagenes/Carrucel/car3.png'); ">
                    <div class="content_slider">
                    </div>
                </li>
                <li style="background-image: url('imagenes/Carrucel/car4.png'); ">
                    <div class="content_slider">
                    </div>
                </li>
                <li style="background-image: url('imagenes/Carrucel/car5.png'); ">
                    <div class="content_slider">
                    </div>
                </li>
            </ul>
        </section>





    <?php if (!empty($user)): ?>

        <section class="header">
            <header>
                <a title="InfoSys" class="navbar" alt="InfoSys" href="#">
                    <img class="img-responsive center-block" src="logoP2.png" alt=""></a>

                <ul class="navbar">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="graficas.php">Tarjetas de Video</a></li>
                    <li><a href="procesadores.php">Procesadores</a></li>
                    <li><a href="mothers.php">Motherboards</a></li>
                    <li><a href="almacenamiento.php">Almacenamiento</a></li>
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

        


        <section id="info">

        <div id="sugerencias">
                <h2>Sugerencias de la semana</h2>
            </div>
            <div class="container-items">

                <div class="item">
                    <figure>
                        <img src="imagenes/Graficas/g6.png" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2>Tarjeta de video GeForce RTX 4070 ASUS DUA</h2>
                        <p class="price">$12799</p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>

                <div class="item">
				<figure>
					<img src="imagenes/mothers/m3.jpg" alt="producto" />
				</figure>
				<div class="info-product">
					<h2>Tarjeta Madre ASUS PRIME B550M-A WIFI</h2>
					<p class="price">$3099</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>


            <div class="item">
				<figure>
					<img src="imagenes/Almacenamiento/fot4.png" alt="producto" />
				</figure>
				<div class="info-product">
					<h2>Disco duro Wd purple 2TB</h2>
					<p class="price">$1099</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>

            <div class="item">
				<figure>
					<img src="imagenes/procesadores/r7.jpg" alt="producto" />
				</figure>
				<div class="info-product">
					<h2>Procesador AMD RYZEN 7 7700</h2>
					<p class="price">$7299</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>

            <div class="item">
				<figure>
					<img src="imagenes/mothers/m7.jpg" alt="producto" />
				</figure>
				<div class="info-product">
					<h2>Tarjeta Madre Asus ROG STRIX B550-A GAMING</h2>
					<p class="price">$3599</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>

            <div class="item">
				<figure>
					<img src="imagenes/procesadores/p6.jpg" alt="producto" />
				</figure>
				<div class="info-product">
					<h2>Procesador Intel Core i9-12900 5.10GHz </h2>
					<p class="price">$9499</p>
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
					<img src="imagenes/Almacenamiento/fot8.png" alt="producto" />
				</figure>
				<div class="info-product">
					<h2>SSD Adata Legend 800 NVMe, 1TB</h2>
					<p class="price">$849</p>
					<button class="btn-add-cart">Añadir al carrito</button>
				</div>
			</div>


            </div>
        </section>



        <!-- footer -->
        <section class="contact " :id="contact">
            <div class="main-contact w-100">
                <div class="contact-content">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotres.php">Nosotros</a></li>
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
        </section>
        <div class="last">
            <p>Informatics Systems de Mexico IS © 2023</p>

        </div>

        <script src="index.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>

        </footer>



    <?php else: ?>
        <h1>Por favor inicia sesion o registrate</h1>

        <a href="login.php">Ingresar</a> o
        <a href="signup.php">Registrate</a>
    <?php endif; ?>
</body>

</html>