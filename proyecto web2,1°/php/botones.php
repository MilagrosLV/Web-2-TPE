<?php
require_once 'biblioteca_admin.php';

// Recopila los datos del formulario (sustituye los nombres de los campos según tu formulario)
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$autor = $_POST['autor'];
$imagen = $_POST['imagen'];

// Inserta los datos en la base de datos
$sql = "INSERT INTO libros (titulo, descripcion, autor, imagen) VALUES ('$titulo', '$descripcion', '$autor', '$imagen')";

if ($conn->query($sql) === TRUE) {
    echo "Libro agregado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Recopila los datos del formulario de edición (sustituye los nombres de los campos según tu formulario)
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$autor = $_POST['autor'];
$imagen = $_POST['imagen'];

// Actualiza los datos en la base de datos
$sql = "UPDATE libros SET titulo='$titulo', descripcion='$descripcion', autor='$autor', imagen='$imagen' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Libro actualizado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Recopila los elementos seleccionados (sustituye los nombres de los campos según tu formulario)
$elementos = $_POST['elementos']; // Supongamos que es un array de IDs de elementos

// Elimina los elementos de la base de datos
foreach ($elementos as $elemento) {
    $sql = "DELETE FROM libros WHERE id = $elemento";

    if ($conn->query($sql) === TRUE) {
        echo "Elemento con ID $elemento eliminado con éxito.<br>";
    } else {
        echo "Error al eliminar el elemento con ID $elemento: " . $conn->error . "<br>";
    }
}
?>

