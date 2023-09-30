<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.2.1
 */

/**
 * Database `librería_alejandría`
 */

/* `librería_alejandría`.`autores` */
$autores = array(
  array('id_autor' => '1','nombre' => 'Brandon Sanderson','libros' => 'El Camino de los Reyes','géneros' => 'Fantasía'),
  array('id_autor' => '2','nombre' => 'Suzanne Collins','libros' => 'Los Juegos del Hambre','géneros' => 'Ciencia Ficción'),
  array('id_autor' => '3','nombre' => 'Kass Morgan','libros' => 'Los 100','géneros' => 'Ciencia Ficción'),
  array('id_autor' => '4','nombre' => 'Juliet Marillier','libros' => 'El Hijo de la Profecía','géneros' => 'Fantasía')
);

/* `librería_alejandría`.`lectura` */
$lectura = array(
  array('id_usuario' => '3','id_lectura' => '4','hora_última_visita' => '2023-09-29 17:59:09','nro_página' => '92','id_libro' => '3'),
  array('id_usuario' => '2','id_lectura' => '5','hora_última_visita' => '2023-09-29 17:59:09','nro_página' => '142','id_libro' => '2'),
  array('id_usuario' => '1','id_lectura' => '6','hora_última_visita' => '2023-09-29 18:00:37','nro_página' => '623','id_libro' => '4')
);

/* `librería_alejandría`.`libros` */
$libros = array(
  array('título' => 'El Hijo de la Profecía','autor' => 'Juliet Marilliet','edición' => '1ra edición: julio de 2007','género' => 'Fantasía','id_libro' => '1','id_autor' => '4'),
  array('título' => 'Los Juegos del Hambre','autor' => 'Suzanne Collins','edición' => '9na reimpresión: septiembre de 2013','género' => 'Ciencia Ficción','id_libro' => '2','id_autor' => '2'),
  array('título' => 'Los 100','autor' => 'Kass Morgan','edición' => '1ra edición: noviembre de 2014','género' => 'Ciencia Ficción','id_libro' => '3','id_autor' => '3'),
  array('título' => 'El Camino de los Reyes','autor' => 'Brandon Sanderson','edición' => '1ra edición: octubre de 2021','género' => 'Fantasía','id_libro' => '4','id_autor' => '1')
);

/* `librería_alejandría`.`usuario` */
$usuario = array(
  array('id_usuario' => '1','nombre' => 'Milagros','apellido' => 'Lopez Vilaclara','email' => 'lopezvmilagros@gmail','contraseña' => '111111111'),
  array('id_usuario' => '2','nombre' => 'Clara','apellido' => 'Franco','email' => 'clarafranco@gmail.com','contraseña' => 'Clara3'),
  array('id_usuario' => '3','nombre' => 'Gustavo Nahuel','apellido' => 'Río','email' => 'riogustavo2001@gmail.com','contraseña' => '2011_2001')
);
