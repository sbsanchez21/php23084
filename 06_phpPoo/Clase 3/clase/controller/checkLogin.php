<?php 
    $user=$_POST["user"];
    $pass=$_POST["pass"];
    // $_GET["user"]

    // echo $user;
    // echo $pass;

    $conn=new mysqli("localhost","root","","cacproyecto");
    $result=$conn->query("SELECT * FROM usuarios WHERE usuario='$user' AND clave='$pass'");

    if ($result->fetch_assoc()) {
        echo "ingreso";
    } else {
        echo "user y pass incorrectos";
    }
    

?>