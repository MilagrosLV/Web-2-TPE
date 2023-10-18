<?php 

session_start();

$Correo = $_POST['Correo'];
$Contraseña =$_POST['Contraseña'];
$conexion = mysqli_connect("localhost","root","","registro_inicio");

$verificar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo_Eletronico='$Correo' and Contraseñas='$Contraseña'" );

if(mysqli_num_rows($verificar_login) > 0){
    echo '
    <script>
    alert("Los datos de usuarios no se registraron. Intente otra vez registrese en la pagina");
    header(window.location= "../php/index.php");
    </script>
    '; 
    } else{
        $_SESSION['Correo_Eletronico'] = $correo;
        $_SESSION['Contraseñas'] = $Contraseña;
    echo '
    <script>
    alert("Los datos de usuarios se registraron correctamente");
    window.location = "../php/ingreso_admin.php";
    </script>
    ';
    exit;  
}

?>