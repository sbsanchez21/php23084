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
    <h3 class="text-center fs-3 m-3">listado alumnos</h3>

    <div class="table-responsive">
        <table class="table table-primary" onclick="alert('hola')">
            <thead>
                <tr>
                    <th scope="col">Column 1</th>
                    <th scope="col">Column 2</th>
                    <th scope="col">Column 3</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">Item</td>
                    <td>Item</td>
                    <td>Item</td>
                </tr>
                <!-- lo que está dentro de estas etiquetas es lenguaje php -->
                <?php 
                    // se conecta a la db y trae los datos del usuario
                    echo "<p>Hola PHP Juan Perez</p>";
                 
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