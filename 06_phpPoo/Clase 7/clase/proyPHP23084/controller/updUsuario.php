<?php 
$id=$_POST["id"];
$user=$_POST["user"];
$pass=$_POST["pass"];

try {
    // todo: validar si user y pass son correctos
    $conexion=new mysqli("localhost","root","","cacproyecto");
    $okUpd=$conexion->query("UPDATE usuarios SET usuario='$user', clave='$pass' WHERE idusuario=$id");
    if ($okUpd) {
        header("Location: ../view/listadoUsuarios.php?mensaje="); 
    } else {
        header("Location: ../view/editUsuario.php?id=$id&mensaje=Error%20al%20modificar%20usuario"); 
    }
} catch (\Throwable $th) {
    header("Location: ../view/editUsuario.php?id=$id&mensaje=Error%20al%20modificar%20usuario"); 
}



?>