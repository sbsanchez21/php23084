<?php 
    $user=$_POST["user"];
    $pass=$_POST["pass"];
    // $_GET["user"]

    // echo $user;
    // echo $pass;

    try {
        //traigo el DAO para validar usuario
        require_once("../dao/UsuarioDAO.php");

        //creo una instancia del dao para consultarle
        $usuDAO=new UsuarioDAO();
        //ejecuto el método validarUsu del DAO
        $usuValido=$usuDAO->validarUsuYPass($user,$pass);

        //si el usuario es valido
        if ($usuValido) {
            header("Location: ../view/inicio.php"); 
        } else {
            header("Location: ../view/login.php?mensaje=Usuario%20o%20contraseña%20incorrectos."); 
        }

    } catch (\Throwable $th) {
        header("Location: ../view/login.php?mensaje=Usuario%20o%20contraseña%20incorrectos."); 
    }

    

?>
