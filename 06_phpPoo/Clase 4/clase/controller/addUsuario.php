<?php 
$user=$_POST["user"];
$pass=$_POST["pass"];

// todo: validar si user y pass son correctos
$conexion=new mysqli("localhost","root","","cacproyecto");
if ($conexion->query("INSERT INTO usuarios (usuario, clave) VALUES ('$user','$pass')")) {
    header("Location: ../view/confirmacion.php?mensaje=El%20usuario%20fue%20agreado%20con%20exito"); 
} else {
    echo "error";
}


?>