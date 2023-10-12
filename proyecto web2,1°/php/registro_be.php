<?php

include 'conexion_be.php';

$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Usuario = $_POST['Usuario'];
$Contraseña =$_POST['Contraseña'];

$query = "INSERT INTO usuarios(Nombre_completo, Correo_Eletronico, Usuarios, Contraseñas) 
          VALUES('$Nombre','$Correo','$Usuario','$Contraseña')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Los datos de usuario fueron guardados exitosamente");
    window.location = "../index.php";
    </script>
    ';
}else{
    echo '
    <script>
    alert("Los datos de usuario no fueron guardados y entonce hubo un error");
    window.location = "../index.php";
    </script>
    ';
}
mysqli_close($conexion);
?>