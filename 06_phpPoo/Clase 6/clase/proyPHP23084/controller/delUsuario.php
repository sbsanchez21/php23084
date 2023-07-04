<?php 
$idUser=$_POST["idUser"];
// echo $idUser;

try {
    
    $conexion=new mysqli("localhost","root","","cacproyecto");
    if ($conexion->query("DELETE FROM usuarios WHERE idusuario=$idUser")) {
        header("Location: ../view/listadoUsuarios.php?mensaje="); 
    } else {
        header("Location: ../view/listadoUsuarios.php?mensaje=Error%20al%20eliminar%20usuario"); 
    }
} catch (\Throwable $th) {
    header("Location: ../view/listadoUsuarios.php?mensaje=Error%20al%20eliminar%20usuario"); 
}



?>