<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Listado de Base de Datos</h1>

    <!-- programo en php -->
    <?php
        // Variables de la conexion a la DB
        $mysqli = new mysqli("localhost", "root", "", "cacproyecto"); //localhost
        //$postgres = new postgres("localhost", "root", "", "ventas"); //localhost

        // ejecutamos consulta sql en mysql
        $query = $mysqli->query("SELECT * from usuarios order by usuario");

        // devuelve false si $query está vacío
        // devuelve true si $query no está vacío y retorna un array asociativo
        while ($resultado = $query->fetch_assoc()) {
            $usuarios[] = $resultado;
        }

    ?>
    <ul>
        <?php
        $long = count($usuarios);
        for ($i = 0; $i < $long; $i++) {
        ?>
            <li>
                <?php 
                    echo $usuarios[$i]['idusuario'];
                    echo " - ";
                    echo $usuarios[$i]['usuario'];
                ?>
            </li>
        <?php
        }
        ?>
    </ul>
    <!--    
    <ul>
        <li>S</li>
        <li>M</li>
        <li>L</li>
        <li>XL</li>
    </ul>
    -->

</body>

</html>