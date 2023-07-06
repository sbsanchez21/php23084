<?php 
$user=$_POST["user"];
$pass=$_POST["pass"];

try {
    require_once("../dao/UsuarioDAO.php");
    $usuDAO=new UsuarioDAO();
    $insOk=$usuDAO->addUsuario($user,$pass);

    if ($insOk) {
        header("Location: ../view/listadoUsuarios.php?mensaje="); 
    } else {
        header("Location: ../view/addUsuario.php?mensaje=Error%20al%20agregar%20usuario"); 
    }
} catch (\Throwable $th) {
    header("Location: ../view/addUsuario.php?mensaje=Error%20al%20agregar%20usuario"); 
}



?>