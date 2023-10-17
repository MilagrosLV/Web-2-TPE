<?php
include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];  // Assuming you have an ID for each book

    $query = "DELETE FROM libros WHERE id = $id";

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {
        echo '
        <script>
            alert("El libro fue borrado exitosamente");
            window.location = "../php/ingreso.php";
        </script>
        ';
    } else {
        echo '
        <script>
            alert("El libro no se borró y hubo un error");
            window.location = "../php/ingreso.php";
        </script>
        ';
    }
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    echo "ID de libro no válido";
}
mysqli_close($conexion);
?>
