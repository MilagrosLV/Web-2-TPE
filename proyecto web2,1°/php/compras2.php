<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería alejandría</title>
    <link rel="icon" href="../images/pagina/logo2.ico">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/estilos2.css">
</head>

<body>
    <header>
        <div class="superior">
            <div class="logo-pagina">
                <h1>Libreria alejandría</h1>
                <img src="../images/pagina/logo2.jpg"  class="logo">
            </div>
            <div>
            <a class="registro" href="../php/ingreso.php"><h3>Ingreso Administrativo</h2></a>
            </div>
        </div>
        <div class="inferior">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="../php/ingreso2.php"><h4>inicio</h4></a></li>
                        <li><a href="../php/bibloteca2.php"><h4>biblioteca</h4></a></li>
                        <li><a href="#"><h4>generos</h4></a>
                            <ul>
                                <li><a href="../php/bibloteca2.php#aventuras">
                                        <h4>aventuras</h4>
                                    </a></li>
                                <li><a href="../php/bibloteca2.php#misterios">
                                        <h4>misterios</h4>
                                    </a></li>
                                <li><a href="../php/bibloteca2.php#Romances">
                                        <h4>romances</h4>
                                    </a></li>
                            </ul>
                        </li>
                        <li><a href="../php/compras2.php">
                                <h4>carrito de compras</h4>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="contenido-principal">
    <div id="aventura">
        <h2>Aventura</h2>
        <div class="producto">
            <img src="portada_aventura.jpg" alt="Portada del Libro de Aventura">
            <h3>Libro de Aventura 1</h3>
            <p>Precio: $20</p>
            <button class="agregar" data-nombre="Libro de Aventura 1" data-precio="20">Agregar al Carrito</button>
        </div>
        <!-- Agregar más libros de aventura aquí -->
    </div>
    
    <div id="romances">
        <h2>Romances</h2>
        <div class="producto">
            <img src="portada_romance.jpg" alt="Portada del Libro de Romance">
            <h3>Libro de Romance 1</h3>
            <p>Precio: $15</p>
            <button class="agregar" data-nombre="Libro de Romance 1" data-precio="15">Agregar al Carrito</button>
        </div>
        <!-- Agregar más libros de romance aquí -->
    </div>
    
    <div id="misterio">
        <h2>Misterio</h2>
        <div class="producto">
            <img src="portada_misterio.jpg" alt="Portada del Libro de Misterio">
            <h3>Libro de Misterio 1</h3>
            <p>Precio: $25</p>
            <button class="agregar" data-nombre="Libro de Misterio 1" data-precio="25">Agregar al Carrito</button>
        </div>
        <!-- Agregar más libros de misterio aquí -->
    </div>
    
    <div id="carrito">
        <h2>Carrito de Compras</h2>
        <ul id="lista-carrito">
            <!-- Los elementos del carrito se agregarán aquí dinámicamente -->
        </ul>
        <p>Total: $<span id="total">0</span></p>
        <button id="vaciar-carrito">Vaciar Carrito</button>
    </div>
    </div>
    <script src="../js/carrito.js"></script>
    <footer>
        <h5>esta pagina fue creada para ser una libreria virtual para leer y recomendar libro (fue creada el dia
            05/10/2023)</h5>
    </footer>
</body>

</html>
