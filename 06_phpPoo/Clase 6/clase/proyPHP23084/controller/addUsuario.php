<?php 
$user=$_POST["user"];
$pass=$_POST["pass"];

try {
    // todo: validar si user y pass son correctos
    $conexion=new mysqli("localhost","root","","cacproyecto");
    if ($conexion->query("INSERT INTO usuarios (usuario, clave) VALUES ('$user','$pass')")) {
        header("Location: ../view/listadoUsuarios.php?mensaje="); 
    } else {
        header("Location: ../view/addUsuario.php?mensaje=Error%20al%20agregar%20usuario"); 
    }
} catch (\Throwable $th) {
    header("Location: ../view/addUsuario.php?mensaje=Error%20al%20agregar%20usuario"); 
}



?>