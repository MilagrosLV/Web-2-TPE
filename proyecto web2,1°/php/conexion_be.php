<?php 
 $conexion = mysqli_connect("localhost","root","","registro_inicio");
 
 
 if($conexion){
    echo 'Conectado exitosamente a la Base de Datos';
 }else{
    echo 'no se ha podido conectar a la Base de Datos';
 }
 
?>