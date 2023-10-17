<?php

include 'conexion_be.php';

$Titulo = $_POST['titulo'];
$Descripcion = $_POST['descripcion'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; 
    $Titulo = $_POST['titulo'];
    $Descripcion = $_POST['descripcion'];

    $query = "UPDATE libros 
              SET titulo = '$Titulo', descripcion = '$Descripcion' 
              WHERE id = $id";

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
        <script>
            alert("Los datos del libro fueron actualizados exitosamente");
            window.location = "../php/ingreso.php";
        </script>
        ';
    } else {
        echo '
        <script>
            alert("Los datos del libro no se actualizaron y hubo un error");
            window.location = "../php/ingreso.php";
        </script>
        ';
    }

    mysqli_close($conexion);
}
?>