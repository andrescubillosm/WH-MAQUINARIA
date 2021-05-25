<php?

$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_de_datos = "contactenos";

$enlace = mysqli_connect ($servidor, $usuario, $clave, $base_de_datos);

if ( !$enlace){
    echo"Error en la conexion del servidor";
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Consultoria tecnologica para PYMES, POS,
        inventarios, paginas web, big data, data analytics Colombia">
    <meta name="keywords" content="Paginas web, desarrollo, inventarios, Big Data,
        Data analytics ">
    <title>WH Maquinaria</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat:wght@300;400&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="shortcut icon" type="image/icon" href="assets\car.svg">
    <script type="text/javascript" src="./javascript.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="/path/to/flickity.css" media="screen">
</head>

<body>



    <header>
        <div class="contenedor-logo">
            <img src="assets\logo.png" width="250px" alt="" position="center">
        </div>
        <div class="nav">
            <nav>
                <ul class="menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="servicios.html">Servicios</a></li>
                    <li><a href="productos.html">Catalogo</a></li>
                    <li><a href="acerca de nosotros.html">Quienes somos</a></li>
                    <li><a href="contactenos.html">Contactenos</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="section-intro">
        <div class="container-fluid">
            <br>
            <h5 position="center"> Encuentre máquinaria para la industria de alimentos, embutidoras, clipeadoras,
                molinos, cutters nuevas y usadas, asi como tambien repuestos y partes nuevas y de segunda mano, sino no
                encuentra lo que busca contactenos y lo importamos por usted. </h5>

        </div>
    </div>


    <div class="container-add">
        <h2 class="container__title">Contactenos</h2><br>
        <form action="insertar.php" method="POST" class="container__form">
            <label for="" class="container__label">nombre</label>
            <input type="text" class="container__input">
            <label for="" class="container__label">apellidos</label>
            <input type="text" class="container__input">
            <label for="" class="container__label">telefono</label>
            <input type="number" class="container__input">
            <label for="" class="container__label">e-mail</label>
            <input type="text" class="container__input">
            <label for="" class="container__label">informacion</label>
            <input type="text" class="container__input">
            <input class="container__submit" type="submit" value="Enviar">
        </form>
    </div>








    <!-- The content of your page would go here. -->

    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="assets\logo.png">
            <h3>WH <span>Maquinaria y Servicios</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">Blog</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">© 2021 WH Maquinaria y Servicios</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Bogotá, Colombia</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>Tel: +57 3003454833</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:whmaquinaria@gmail.com">whmaquinaria@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Sobre nosotros</span>
                Tenemos más de 10 años de experiencia en la Industria de Alimentos carnicos y trabajamos con las
                empresas mas reconocidas de Bogotá.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>





















<script src="js\slider.js"></script>
</body>

</html>