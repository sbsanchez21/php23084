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

        <h3 class="text-center fs-3 my-4 ">Listado de Usuarios</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
            Agregar Usuario
        </button>

        <?php 
            $mensaje=$_GET["mensaje"];
            if ($mensaje!="") {
                echo "<div class='text-danger text-center m-2'>";
                echo $mensaje;
                echo "</div";
            }
        
        ?>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- me contecto a la db, traigo los usuarios y genero html dinámicamente -->
                <?php 
                    require_once("../dao/UsuarioDAO.php");
                    require_once("../model/Usuario.php");

                    $usuDAO=new UsuarioDAO();
                    $listUsuObj=$usuDAO->listarUsuarios();

                    foreach($listUsuObj as $usuObj) {
                        echo "<tr>";    

                        echo "<td>";    
                        $idUser=$usuObj->getIdUsuario();
                        echo $idUser;
                        echo "</td>";

                        echo "<td>";    
                        $user=$usuObj->getUsuario();
                        echo $user;
                        echo "</td>";

                        echo "<td>";    
                        $pass=$usuObj->getClave();
                        echo $pass;
                        echo "</td>";

                        echo "<td>";    
                        echo "<a href='editUsuario.php?id=$idUser&mensaje='><i class='bi bi-pencil-fill m-1' ></i></a>";
                        echo "<a href='#' data-bs-toggle='modal' data-bs-target='#delModal' idUsuario='$idUser' user='$user' ><i class='bi bi-trash3-fill m-1'></i></a>";
                        echo "</td>";
                        
                        echo "</tr>";
                    }

                
                ?>                  


            </tbody>
        </table>
    </div>


    <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminación de Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../controller/delUsuario.php" method="post">
                <input type="hidden" name="idUser" id="idUser">
                <div class="modal-body text-center">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label  fs-6">¿Desea eliminar el usuario?</label>
                            <div id="datosUser" class="text-danger"></div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" value="Eliminar" class="btn btn-primary">
                    
                </div>
            </form>
            </div>
        </div>
    </div>    

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminación de Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex justify-content-center">
            <form action="../controller/addUsuario.php" method="post">
                <input type="email" name="user" id="user" onkeyup="validarUsu()" class="form-control mb-3" required placeholder="usuario">
                <input type="password" name="pass" id="pass" onkeyup="defFortaleza()" class="form-control mb-3" required placeholder="contraseña">
                <input type="password" name="repPass" id="repPass" onkeydown="compararPass()" class="form-control mb-3" required placeholder="reingrese la contraseña">
                <input type="submit" value="Guardar" class="btn btn-primary mb-3">
                <div id="mensaje"></div>
            </form>

        </div>
            </div>
        </div>
    </div>        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="js/listUsu.js"></script>
</body>

</html>