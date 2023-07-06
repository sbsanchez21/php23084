<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <?php 
        require_once("menu.php")
    ?>  
    <div class="container">

        <h3 class="text-center fs-3 my-4 ">Modificar Usuario</h3>

        <?php 
            $id=$_GET["id"];
            // echo $id;
            try {
                $conn=new mysqli("localhost", "root","","cacproyecto");         
                $result=$conn->query("SELECT * FROM usuarios WHERE idusuario=$id");        

                if ($usuario=$result->fetch_assoc()) {
                   $user=$usuario["usuario"];
                   $pass=$usuario["clave"];
                } else {
                    // todo:redireccionar a página de error
                    header("Location: ../view/listadoUsuarios.php?mensaje=Error%20al%20modificar%20usuario"); 
                }
            } catch (\Throwable $th) {
                header("Location: ../view/listadoUsuarios.php?mensaje=Error%20al%20modificar%20usuario"); 
            }
        
        ?>

        <div class="d-flex justify-content-center">
            <form action="../controller/updUsuario.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="email" name="user" id="user" onkeyup="validarUsu()" value="<?php echo $user;?>" class="form-control mb-3" required placeholder="usuario">
                <input type="text" name="pass" id="pass" onkeyup="defFortaleza()" value="<?php echo $pass;?>"  class="form-control mb-3" required placeholder="contraseña">
                <input type="password" name="repPass" id="repPass" onkeydown="compararPass()" value="<?php echo $pass;?>"  class="form-control mb-3" required placeholder="reingrese la contraseña">
                <input type="submit" value="Guardar" class="btn btn-primary mb-3">
                <div id="mensaje"></div>
            </form>

        </div>

        <?php 
            $mensaje=$_GET["mensaje"];
            if ($mensaje!="") {
                echo "<div class='text-danger text-center m-2'>";
                echo $mensaje;
                echo "</div";
            }
        
        ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="js/registro.js"></script>

</body>

</html>