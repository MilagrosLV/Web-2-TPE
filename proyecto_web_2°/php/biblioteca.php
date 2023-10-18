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
            <a class="registro" href="../php/index.php"><h3>Ingreso Administrativo</h2></a>
            </div>
        </div>
        <div class="inferior">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="../php/ingreso.php"><h4>inicio</h4></a></li>
                        <li><a href="../php/biblioteca.php"><h4>biblioteca</h4></a></li>
                        <li><a href="#"><h4>generos</h4></a>
                            <ul>
                                <li><a href="../php/biblioteca.php#aventuras">
                                        <h4>aventuras</h4>
                                    </a></li>
                                <li><a href="../php/biblioteca.php#misterios">
                                        <h4>misterios</h4>
                                    </a></li>
                                <li><a href="../php/biblioteca.php#Romances">
                                        <h4>romances</h4>
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="contenido-principal">
        <div class="contenedor">
            <h1>Biblioteca</h1>
            <p>La biblioteca virtual proporciona acceso en línea a una vasta colección de libros digitales, revistas y
                recursos educativos.</p>
            <p>Explora y disfruta de la lectura desde cualquier lugar a través de tu dispositivo conectado a internet.
            </p>
            <p id="aventuras">Accede a una gran variedad de contenidos, realiza búsquedas avanzadas y disfruta de la
                comodidad de una
                biblioteca en línea.</p>
            <img src="../images/pagina/biblioteca.png" alt="Imagen de la biblioteca" class="foto-de-libro" />
        </div>
        <div class="contenedor">
            <h2>Aventuras</h2>
            <img src="../images/fantasias/literatura-fantastica.jpg">
            <p>En el género de aventuras, los personajes se embarcan en emocionantes viajes llenos de peligros y
                desafíos, explorando mundos desconocidos y enfrentándose a situaciones extraordinarias.</p>
        </div>
        <div class="contenedor">
            <div class="libro">
                <div class="portada-libro">
                    <img src="../images/fantasias/libro1.jpg" alt="Portada del libro" class="foto-de-libro1">
                </div>
                <div class="informacion-libro">
                    <h2>Juego de tronos</h2>
                    <p>Tras el largo verano, el invierno se acerca a los Siete Reinos. Lord Eddard Stark, señor de
                        Invernalia, deja sus dominios para unirse a la corte del rey Robert Baratheon el Usurpador,
                        hombre díscolo y otrora guerrero audaz cuyas mayores aficiones son comer, beber y engendrar
                        bastardos. Eddard Stark desempeñará el cargo de Mano del Rey e intentará desentrañar una maraña
                        de intrigas que pondrá en peligro su vida... y la de los suyos. En un mundo cuyas estaciones
                        duran décadas y en el que retazos de una magia inmemorial y olvidada surgen en los rincones más
                        sombrios y maravillosos, la traición y la lealtad, la compasión y la sed de venganza, el amor y
                        el poder hacen del juego de tronos una poderosa trampa que atrapa en sus fauces a los
                        personajes... y al lector.</p>
                </div>
            </div>
        </div>
        <div class="contenedor">
            <div class="libro">
                <div class="portada-libro">
                    <img src="../images/fantasias/libro4.jpg" alt="Portada del libro" class="foto-de-libro2">
                </div>
                <div class="informacion-libro">
                    <h2>La quinta estación</h2>
                    <p>La quinta estación (título original en inglés: The Fifth Season) es una novela de ficción
                        especulativa escrita por la autora estadounidense N. K. Jemisin y publicada en agosto de 2015
                        por la editorial Orbit Books. La edición en español ha sido publicada en mayo de 2017 por
                        Ediciones B dentro de su sello NOVA. La obra recibió en 2016 el premio Hugo a la mejor novela, y
                        fue finalista en la misma categoría del premio Nébula y del premio Mundial de Fantasía. Junto
                        con sus dos continuaciones El portal de los obeliscos y El cielo de piedra forma la llamada
                        "Trilogía de la Tierra Fragmentada"..</p>
                </div>
            </div>
            
        </div>
        <div class="contenedor">
            <div class="libro">
                <div class="portada-libro">
                    <img src="../images/fantasias/libro5.jpg" alt="Portada del libro" class="foto-de-libro3">
                </div>
                <div class="informacion-libro">
                    <h2>Los jovenes de la elite</h2>
                    <p>Comienza la explosiva saga de fantasía número 1 del New York Times. Los supervivientes de la
                        fiebre de la sangre, una enfermedad que arrasó Kenettra hace diez años, son admirados y temidos
                        a partes iguales.</p>
                </div>
            </div>
            
        </div>
    </div>
    <footer>
        <h5>esta pagina fue creada para ser una libreria virtual para leer y recomendar libro (fue creada el dia
            05/10/2023)</h5>
    </footer>
</body>

</html>