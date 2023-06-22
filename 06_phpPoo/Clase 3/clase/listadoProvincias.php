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
    <div class="container">
        <div class="text-center fs-3 my-3">Listado de Provincias</div>

        <table class="table table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- traer los datos de la tabla provincia y generar una fila x prov -->
                <?php 
                    try {
                        // me contecto a la db de mi pc
                        $conMySql=new mysqli("localhost","root","","cacproyecto");
                        // hago la consulta a la db y coloco el resultado en $result
                        $result=$conMySql->query("SELECT * FROM provincias ORDER BY idprovincia");

                        // todo: generar html desde el while
                        // trasnformo el resultado en una array
                        while ($prov=$result->fetch_assoc()) {
                            $listProv[]=$prov;
                        }

                        // todo: optimizar el código
                        // recorre el array sin utilizar indices
                        foreach($listProv as $prov) {
                            
                        }

                        $cantProv=count($listProv);
                        for ($i=0; $i < $cantProv ; $i++) { 
                            echo "<tr>";

                            echo "<td>";
                            echo $listProv[$i]["idprovincia"];
                            echo "</td>";

                            echo "<td>";
                            echo $listProv[$i]["nombre"];
                            echo "</td>";

                            echo "<td>";    
                            echo "<a href='editar.php'><i class='bi bi-pencil-fill m-1' ></i></a>";
                            echo "<i class='bi bi-trash3-fill m-1' onclick='eliminar()'></i>";
                            echo "</td>";                          

                            echo "</tr>";
                        }


                    } catch (Exception $e) {
                        // echo 'Excepción capturada: ',  $e->getMessage(), "\n";
                        header("Location: error.php"); 
                    }                    

                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>