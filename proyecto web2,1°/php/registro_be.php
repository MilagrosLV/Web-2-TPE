<?php

include 'conexion_be.php';

$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Usuario = $_POST['Usuario'];
$Contraseña =$_POST['Contraseña'];
$Contraseña =hash('sha512',$Contraseña);

$query = "INSERT INTO usuarios(Nombre_completo, Correo_Eletronico, Usuarios, Contraseñas) 
          VALUES('$Nombre','$Correo','$Usuario','$Contraseña')";

$ejecutar = mysqli_query($conexion, $query);

mysqli_close($conexion); 

if($ejecutar){
    echo '
    <script>
        alert("Los datos de usuario fueron guardados exitosamente");
        window.location = "../php/index.php"
    </script>
    ';
}else{
    echo '
    <script>
    alert("Los datos de usuario no fueron guardados y entonce hubo un error");
    window.Location= "../index.php";
    </script>
    ';
}
?>