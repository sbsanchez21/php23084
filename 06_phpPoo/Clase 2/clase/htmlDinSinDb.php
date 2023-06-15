<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="css/htmlEstatico.css">

</head>

<body>
    <h3 class="text-center fs-3 m-3">Listado de Alumnos</h3> 
    <div class="container">
        <table class="table table-primary" onclick="alert('hola')">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td>1</td>
                    <td>Juan</td>
                    <td>Perez</td>
                    <td>jperez@gmail.com</td>
                </tr> -->

                <!-- creamos las filas dinámicamente con los datos de un array -->
                <?php 
                // simulamos el acceso a la DB tabla alumnos
                
                $alumnos[0][0] = "Juan";
                $alumnos[0][1] = "Suarez";
                $alumnos[0][2] = "15654665465";
                $alumnos[0][3] = "jsuarez@gmail.com";
                
                $alumnos[1][0] = "Pedro";
                $alumnos[1][1] = "Rodriguez";
                $alumnos[1][2] = "15654665465";
                $alumnos[1][3] = "jsuarez@gmail.com";

                $alumnos[2][0] = "Brian";
                $alumnos[2][1] = "Rodriguez";
                $alumnos[2][2] = "15654665465";
                $alumnos[2][3] = "jsuarez@gmail.com";                
                
                $cantAlumnos=count($alumnos); 
                $cantCol=count($alumnos[0]);

                for ($i=0; $i < $cantAlumnos; $i++) { 
                    echo "<tr>";
                    for ($j=0; $j < $cantCol; $j++) { 
                        echo "<td>";
                        echo $alumnos[$i][$j];
                        echo "</td>";
                    }
                    echo "</tr>";
                }                
                ?>
            </tbody>
        </table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <script src="js/htmlEstatico.js"></script>    
</body>

</html>