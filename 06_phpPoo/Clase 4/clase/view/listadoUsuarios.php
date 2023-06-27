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

        <a href="addUsuario.php" class="btn btn-primary my-4">
            Agregar Usuario
        </a>
        

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
                    //ip o nombre server, usuario db, pass db, nom db
                    //$ delcara una variable
                    $conn=new mysqli("localhost", "root","","cacproyecto");         

                    //hacemos una consulta la db y colocamos el resultado en la var $query
                    $query=$conn->query("SELECT * FROM usuarios");        

                    //transforma el resultado $query array de array asociativo
                    while ($usuario=$query->fetch_assoc()) {
                        //$listalumnos es un array asociativo
                        $listUsuarios[]=$usuario;
                    }

                    //obtengo la cant de usuarios
                    $cantUsuarios=count($listUsuarios);

                    //recorro el array $listUsuarios para generar html 
                    for ($i=0; $i < $cantUsuarios; $i++) { 
                        echo "<tr>";    

                        echo "<td>";    
                        echo $listUsuarios[$i]["idusuario"];
                        echo "</td>";

                        echo "<td>";    
                        echo $listUsuarios[$i]["usuario"];
                        echo "</td>";

                        echo "<td>";    
                        echo $listUsuarios[$i]["clave"];
                        echo "</td>";

                        echo "<td>";    
                        echo "<a href='editar.php'><i class='bi bi-pencil-fill' ></i></a>";
                        echo "<i class='bi bi-trash3-fill' onclick='eliminar()'></i>";
                        echo "</td>";
                        
                        echo "</tr>";
                    }

                    //cerrar conexión
                    $conn->close();
                ?>                  
                
                

            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="js/listUsu.js"></script>
</body>

</html>