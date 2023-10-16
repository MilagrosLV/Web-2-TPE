<?php 

session_start();

$Correo = $_POST['Correo'];
$Contraseña =$_POST['Contraseña'];
$conexion = mysqli_connect("localhost","root","","registro_inicio");

$verificar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$Correo' and contraseña='$Contraseña'" );

if(mysqli_num_rows($verificar_login) > 0){
    $_SESSION['usuario'] = $correo;
    header("location: index.php");
    exit; 
    } else{
    echo '
    <script>
    alert("Los datos de usuarios no se registraron. Intente otra vez o registrese en la pagina");
    window.location = "ingreso.php";
    </script>
    ';
    exit;  
}

?>