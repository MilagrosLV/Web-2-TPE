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
            <a class="registro" href="../php/ingreso2.php"><h3>Cerrar sesión</h2></a>
            </div>
        </div>
        <div class="inferior">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="../php/ingreso1.php"><h4>inicio</h4></a></li>
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
            <p>Accede a una gran variedad de contenidos, realiza búsquedas avanzadas y disfruta de la
                comodidad de una
                biblioteca en línea.</p>
                <img src="../images/pagina/bibloteca.png" alt="Imagen de la biblioteca" class="foto-de-libro" />
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
                <div action="../php/ediccion.php" method="POST" class="informacion-libro">
                    <h2 name="titulo">Juego de tronos</h2>
                    <p name="descripcion">as el largo verano, el invierno se acerca a los Siete Reinos. Lord Eddard Stark, señor de
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
            <div class="informacion-autor">
            <img src="../images/autores/autor1.jpg" alt="Foto del autor" class="foto-autor1">
                <span>
                    <h3 class="nombre">George R. R. Martin</h3>
                </span>
            </div>
            <p>George Raymond Richard Martin, conocido como George R. R. Martin y en ocasiones por sus seguidores como
                GRRM, es un escritor y guionista estadounidense de literatura fantástica, ciencia ficción y terror.</p>
            <button class="editar-libro" onclick="editarLibro(this)">Editar</button>
            <button class="borrar-libro" onclick="borrarLibro(this)">Borrar</button>
        </div>
        <div class="contenedor">
            <div class="libro">
                <div class="portada-libro">
                <img src="../images/fantasias/libro4.jpg" alt="Portada del libro" class="foto-de-libro2">
                </div>
                <div action="../php/ediccion.php" method="POST" class="informacion-libro">
                    <h2 name="titulo">La quinta estación</h2>
                    <p name="descripcion">La quinta estación (título original en inglés: The Fifth Season) es una novela de ficción
                        especulativa escrita por la autora estadounidense N. K. Jemisin y publicada en agosto de 2015
                        por la editorial Orbit Books. La edición en español ha sido publicada en mayo de 2017 por
                        Ediciones B dentro de su sello NOVA. La obra recibió en 2016 el premio Hugo a la mejor novela, y
                        fue finalista en la misma categoría del premio Nébula y del premio Mundial de Fantasía. Junto
                        con sus dos continuaciones El portal de los obeliscos y El cielo de piedra forma la llamada
                        "Trilogía de la Tierra Fragmentada"..</p>
                </div>
            </div>
            <div class="informacion-autor">
            <img src="../images/autores/autor5.jpg" alt="Foto del autor" class="foto-autor2">
                <span>
                    <h3 class="nombre">N. K. Jemisin</h3>
                </span>
            </div>
            <p>Nora Keita Jemisin (Iowa City, Iowa, 19 de septiembre de 1972), más conocida como N. K. Jemisin, es una
                escritora estadounidense de ciencia ficción y fantasía. Ha sido la primera persona en ganar
                consecutivamente el premio Hugo a la mejor novela en tres ocasiones (2016, 2017 y 2018) con sus novelas
                La quinta estación, El portal de los obeliscos y El cielo de piedra, pertenecientes las tres a la misma
                trilogía.</p>
            <button class="editar-libro" onclick="editarLibro(this)">Editar</button>
            <button class="borrar-libro" onclick="borrarLibro(this)">Borrar</button>
        </div>
        <div class="contenedor">
            <div class="libro">
                <div class="portada-libro">
                <img src="../images/fantasias/libro5.jpg" alt="Portada del libro" class="foto-de-libro3">
                </div>
                <div action="../php/ediccion.php" method="POST" class="informacion-libro">
                    <h2 name="titulo" >Los jovenes de la elite</h2>
                    <p name="descripcion">Comienza la explosiva saga de fantasía número 1 del New York Times. Los supervivientes de la
                        fiebre de la sangre, una enfermedad que arrasó Kenettra hace diez años, son admirados y temidos
                        a partes iguales.</p>
                </div>
            </div>
            <div class="informacion-autor" id="misterios">
            <img src="../images/autores/autor6.jpg" alt="Foto del autor" class="foto-autor3">
                <span>
                    <h3 class="nombre">Marie Lu</h3>
                </span>
            </div>
            <p>Marie Lu, nacida como Xiwei Lu, es una escritora estadounidense superventas de literatura juvenil,
                conocida por la trilogía Legend y la trilogía Los jóvenes de la élite</p>
            <button class="editar-libro" onclick="editarLibro(this)">Editar</button>
            <button class="borrar-libro" onclick="borrarLibro(this)">Borrar</button>
        </div>
        <div class="contenedor">
            <h2>misterios</h2>
            <img src="../images/misterios/misterio-1.jpg">
            <p>El género de misterios se centra en la resolución de enigmas y crímenes intrigantes. Los personajes
                investigan pistas y secretos oscuros para descubrir la verdad detrás de eventos misteriosos.</p>
        </div>
        <div class="contenedor">
            <div class="libro">
                <div class="portada-libro">
                <img src="../images/misterios/libro6.jpg" alt="Portada del libro" class="foto-de-libro4">
                </div>
                <div action="../php/ediccion.php" method="POST" class="informacion-libro">
                    <h2 name="titulo">El halcón maltés</h2>
                    <p name="descripcion"> La audaz mezcla de realismo descarnado y de sentimientos románticos característica de Dashiell
                        Hammett (1894-1961) alcanza en "El halcón maltés" (1930) su mejor expresión. Una estatuilla con
                        figura de halcón que los caballeros de la Orden de Malta regalaron al emperador Carlos V en 1530
                        ha sido objeto, durante más de cuatro siglos, de robos y extravíos.Cuando tras mil peripecias llega a la ciudad de San Francisco, un grupo de delincuentes trata de apoderarse de ella, lo que
                        da lugar a conflictos, asesinatos y pasiones exacerbadas. A ello contribuye el detective Sam
                        Spade empleando sin escrúpulos la violencia más cruda y propiciando la creación de situaciones
                        arriesgadas e imprevisibles, aunque siempre esclarecedoras.Basada en esta obra, John Huston realizó en 1941 una magistral película protagonizada por Humphrey Bogart, Mary Astor y Peter
                        Lorre. La audaz mezcla de realismo descarnado y de sentimientos románticos característica de Dashiell
                        Hammett (1894-1961) alcanza en "El halcón maltés" (1930) su mejor expresión. Una estatuilla con
                        figura de halcón que los caballeros de la Orden de Malta regalaron al emperador Carlos V en 1530
                        ha sido objeto, durante más de cuatro siglos, de robos y extravíos. Cuando tras mil peripecias llega a la ciudad de San Francisco, un grupo de delincuentes trata de apoderarse de ella, lo que
                        da lugar a conflictos, asesinatos y pasiones exacerbadas. A ello contribuye el detective Sam
                        Spade empleando sin escrúpulos la violencia más cruda y propiciando la creación de situaciones
                        arriesgadas e imprevisibles, aunque siempre esclarecedoras. Basada en esta obra, John Huston
                        realizó en 1941 una magistral película protagonizada por Humphrey Bogart, Mary Astor y Peter
                        Lorre.</p>
                </div>
            </div>
            <div class="informacion-autor">
            <img src="../images/misterios/libro7.jpg" alt="Portada del libro" class="foto-de-libro5">
                <span>
                    <h3 class="nombre">Dashiell Hammett</h3>
                </span>
            </div>
            <p>Samuel Dashiell Hammett fue un escritor estadounidense de novela negra, cuentos cortos y guiones
                cinematográficos, además de activista político. Entre los personajes más recordados que creó se
                encuentran Sam Spade, la pareja de detectives Nick y Nora Charles y el agente de la Continental.</p>
            <button class="editar-libro" onclick="editarLibro(this)">Editar</button>
            <button class="borrar-libro" onclick="borrarLibro(this)">Borrar</button>
        </div>
        <div class="contenedor">
            <div class="libro">
                <div class="portada-libro">
                <img src="../images/misterios/libro7.jpg" alt="Portada del libro" class="foto-de-libro5">
                </div>
                <div action="../php/ediccion.php" method="POST" class="informacion-libro">
                    <h2 name="titulo">Spade & Archer</h2>
                    <p name="descripcion">Joe Gores es autor de dieciséis novelas por las que ha recibido múltiples premios, así como
                        guionista de series de televisión tan populares como Colombo, Remington Steele y Kojak. Con
                        Spade & Archer está cosechando un gran éxito; autores de la talla de James Ellroy se han rendido
                        a la brillantez de esta novela. Una novela de un maestro de la novela de misterio, destinada a
                        convertirse en un clásico por derecho propio. Ahora, por fin, el lector aficionado a la novela
                        negra descubrirá cómo el protagonista de El Halcón Maltés, Sam Spade, se convirtió en lo que es.</p>
                </div>
            </div>
            <div class="informacion-autor">
            <img src="../images/autores/autor8.jpg" alt="Foto del autor" class="foto-autor5">
                <span>
                    <h3 class="nombre">Joe Gores</h3>
                </span>
            </div>
            <p>Joe Gores es autor de dieciséis novelas por las que ha recibido múltiples premios, así como guionista de
                series de televisión tan populares como Colombo, Remington Steele y Kojak. Con Spade & Archer está
                cosechando un gran éxito; autores de la talla de James Ellroy se han rendido a la brillantez de esta
                novela.</p>
            <button class="editar-libro" onclick="editarLibro(this)">Editar</button>
            <button class="borrar-libro" onclick="borrarLibro(this)">Borrar</button>
        </div>
        <div class="contenedor">
            <div class="libro">
                <div class="portada-libro">
                <img src="../images/misterios/libro8.jpg" alt="Portada del libro" class="foto-de-libro6">
                </div>
                <div action="../php/ediccion.php" method="POST" class="informacion-libro">
                    <h2 name="titulo">Cosecha roja</h2>
                    <p name="descripcion">cuando en una pequeña ciudad minera la mortandad se multiplica por diez y los propios coches de
                        la policía sirven para cubrir las fugas de los gángsters, puede decirse que algo no funciona.
                        Cosecha roja es la violenta historia de un detective privado que a las pocas horas de llegar a
                        Personville se sumerge en un baño de sangre, fruto de las batallas entre bandas rivales. Las
                        maniobras y procedimientos de que se sirve el agente de la Continental para restablecer el orden
                        no difieren mucho de los que utilizan los enemigos de la ley.</p>
                </div>
            </div>
            <div class="informacion-autor" id="Romances">
            <img src="../images/autores/autor7.jpg" alt="Foto del autor" class="foto-autor6">
                <span>
                    <h3 class="nombre">Dashiell Hammett</h3>
                </span>
            </div>
            <p>Samuel Dashiell Hammett fue un escritor estadounidense de novela negra, cuentos cortos y guiones
                cinematográficos, además de activista político. Entre los personajes más recordados que creó se
                encuentran Sam Spade, la pareja de detectives Nick y Nora Charles y el agente de la Continental.</p>
            <button class="editar-libro" onclick="editarLibro(this)">Editar</button>
            <button class="borrar-libro" onclick="borrarLibro(this)">Borrar</button>
        </div>
        <div class="contenedor">
            <h2>Romances</h2>
            <img src="../images/romances/romance 1.jpg">
            <p>En el género romántico, las historias se enfocan en las relaciones personales y amorosas entre los
                protagonistas. Estas narrativas exploran temas de pasión, deseo y conexión emocional.</p>
        </div>
        <div class="contenedor">
            <div class="libro">
                <div class="portada-libro">
                <img src="../images/romances/libro3.jpg" alt="Portada del libro" class="foto-de-libro7">
                </div>
                <div action="../php/ediccion.php" method="POST" class="informacion-libro">
                    <h2 name="titulo" >Nosotros en la luna</h2>
                    <p name="descripcion" >as el largo verano, el invierno se acerca a los Siete Reinos. Lord Eddard Stark, señor de
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
            <div class="informacion-autor">
            <img src="../images/autores/autor4.jpg" alt="Foto del autor" class="foto-autor7">
                <span>
                    <h3 class="nombre">Alice Kellen</h3>
                </span>
            </div>
            <p>Alice Kellen es una escritora española de literatura romántica juvenil y adulta. Comenzó su carrera como
                escritora en 2013 con Llévame a cualquier lugar y ha seguido publicando hasta la actualidad, contando ya
                con quince libros en el mercado</p>
            <button class="editar-libro" onclick="editarLibro(this)">Editar</button>
            <button class="borrar-libro" onclick="borrarLibro(this)">Borrar</button>
        </div>
        <div class="contenedor">
            <div class="libro">
                <div class="portada-libro">
                <img src="../images/romances/libro2.jpg" alt="Portada del libro" class="foto-de-libro8">
                </div>
                <div action="../php/ediccion.php" method="POST" class="informacion-libro">
                    <h2 name="titulo" >A dos metros de ti</h2>
                    <p name="descripcion">Dos adolescentes, Stella y Will, se encuentran en un hospital debido a las graves enfermedades
                        que padecen y que amenazan su vida. Poco a poco comienzan a conocerse y enamorarse, pero deberán
                        enfrentarse a las reglas hospitalarias que los alejan.</p>
                </div>
            </div>
            <div class="informacion-autor">
            <img src="../images/autores/autor3.jpg" alt="Foto del autor" class="foto-autor8">
                <span>
                    <h3 class="nombre">Rachael Lippincott</h3>
                </span>
            </div>
            <p>Rachael Lippincott nació en Filadelfia y se crió en el condado de Bucks, Pennsylvania. Tiene una
                licenciatura en escritura inglesa de la Universidad de Pittsburgh. Actualmente reside en Pittsburgh,
                Pensilvania, dividiendo su tiempo entre escribir y dirigir un food truck con su compañero</p>
            <button class="editar-libro" onclick="editarLibro(this)">Editar</button>
            <button class="borrar-libro" onclick="borrarLibro(this)">Borrar</button>
        </div>
        <div class="contenedor">
            <div class="libro">
                <div class="portada-libro">
                <img src="../images/romances/after2.jpg" alt="Portada del libro" class="foto-de-libro9">
                </div>
                <div action="../php/ediccion.php" method="POST" class="informacion-libro">
                    <h2 name="titulo">After</h2>
                    <p name="descripcion" >Tessa Young acaba de llegar a la universidad, y su estable y ordenada vida da un giro busco al
                        conocer al misterioso Hardin Scott, cuyo pasado es algo oscuro. Aunque de entrada se odian,
                        estos polos opuestos se unirán y nada volverá a ser como antes. Tendrán que enfrentarse
                        amultiples pruebas como la inocencia y el descubrimiento sexual, para poder estar juntos.</p>
                </div>
            </div>
            <div class="informacion-autor">
            <img src="../images/autores/autor2.jpg" alt="Foto del autor" class="foto-autor9">
                <span>
                    <h3 class="nombre">Anna Todd</h3>
                </span>
            </div>
            <p>Anna Renee Todd es una escritora estadounidense, conocida por su obra escrita After, saga superventas de
                novelas juveniles, que tuvo como inicio una pasión por el grupo One Direction, en la aplicación Wattpad
            </p>
            <button class="editar-libro" onclick="editarLibro(this)">Editar</button>
            <button class="borrar-libro" onclick="borrarLibro(this)">Borrar</button>
        </div>
    </div>
    </div>
    <script src="../js/funcion_B_E.js"></script>
    <script src="../js/Editar_Libros.js"></script>
    <script src="../js/Borrar_Libros.js"></script>
    <script src="../js/carrito.js"></script>
    <footer>
        <h5>esta pagina fue creada para ser una libreria virtual para leer y recomendar libro (fue creada el dia 05/10/2023)</h5>
    </footer>
</body>

</html>
