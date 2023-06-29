<?php 
    $user=$_POST["user"];
    $pass=$_POST["pass"];
    // $_GET["user"]

    // echo $user;
    // echo $pass;

    try {
        $conn=new mysqli("localhost","root","","cacproyecto");
        $result=$conn->query("SELECT * FROM usuarios WHERE usuario='$user' AND clave='$pass'");
    
        if ($result->fetch_assoc()) {
            header("Location: ../view/inicio.php"); 
        } else {
            header("Location: ../view/login.php?mensaje=Usuario%20o%20contraseña%20incorrectos."); 
        }

    } catch (\Throwable $th) {
        header("Location: ../view/login.php?mensaje=Usuario%20o%20contraseña%20incorrectos."); 
    }

    

?>
