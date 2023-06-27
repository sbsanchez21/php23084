<?php 
    $user=$_POST["user"];
    $pass=$_POST["pass"];
    // $_GET["user"]

    // echo $user;
    // echo $pass;

    $conn=new mysqli("localhost","root","","cacproyecto");
    $result=$conn->query("SELECT * FROM usuarios WHERE usuario='$user' AND clave='$pass'");

    if ($result->fetch_assoc()) {
        header("Location: ../view/inicio.php"); 
    } else {
        header("Location: ../view/error.php"); 
    }
    

?>
