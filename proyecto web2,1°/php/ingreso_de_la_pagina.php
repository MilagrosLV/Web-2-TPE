<!DOCTYPE html>
<html lang="en">

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
            <a class="registro" href="../ingreso/index.php"><h3>administrador</h2></a>
            </div>
        </div>
        <div class="inferior">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="../php/ingreso_de_la_pagina.php"><h4>inicio</h4></a></li>
                        <li><a href="../php/bibloteca.php"><h4>biblioteca</h4></a></li>
                        <li><a href="#"><h4>generos</h4></a>
                            <ul>
                                <li><a href="../php/bibloteca.php#aventuras">
                                        <h4>aventuras</h4>
                                    </a></li>
                                <li><a href="../php/bibloteca.php#misterios">
                                        <h4>misterios</h4>
                                    </a></li>
                                <li><a href="../php/bibloteca.php#Romances">
                                        <h4>romances</h4>
                                    </a></li>
                            </ul>
                        </li>
                        <li><a href="../php/compras.php">
                                <h4>carrito de compras</h4>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        </header>
    <div class="contenido-principal">
        <div class="contenedor">
            <h1>Bienvenido a la Biblioteca de Alejandría</h1>
            <p>La Biblioteca de Alejandría te da la bienvenida a su plataforma de lectura en línea. Somos una biblioteca
                virtual comprometida con proporcionar acceso a una amplia variedad de libros y recursos para enriquecer
                tu experiencia de lectura.</p>
            <p>Nuestra colección abarca desde clásicos de la literatura hasta obras contemporáneas en una amplia gama de
                géneros. Explora nuestras secciones y descubre historias emocionantes, conocimientos profundos y
                aventuras inolvidables.</p>
            <img src="../images/pagina/bg.jpg" alt="Imagen de la biblioteca" class="borde-especial" />
            <p>Ya seas un ávido lector en busca de tu próximo libro favorito o un estudiante buscando recursos para tu
                investigación, la Biblioteca de Alejandría está aquí para satisfacer tus necesidades de lectura y
                aprendizaje en línea.</p>
            <p>Explora nuestro catálogo, busca por género, autor o palabra clave, y disfruta de la comodidad de acceder
                a una biblioteca completa desde la comodidad de tu hogar.</p>
            <p>¡Esperamos que disfrutes de tu tiempo en nuestra biblioteca virtual y que encuentres inspiración en las
                páginas de nuestros libros!</p>
            <button class="editar-libro" onclick="editarLibro(this)">Editar</button>
        </div>
    </div>
    <script src="../js/Editar_Libros.js"></script>
    <script src="../js/carrito.js"></script>
    <footer>
        <h5>esta pagina fue creada para ser una libreria virtual para leer y recomendar libro (fue creada el dia
            05/10/2023)</h5>
    </footer>
</body>

</html>