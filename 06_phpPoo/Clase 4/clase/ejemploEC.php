<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        // como declarar un variable
        // es debilmente tipado, puedo declarar sin tipos num, string, y cambiarlos
        $entero = 2021;
        $entero="Juan";
        $entero=2020;
        $real = 4.2;
        $mensaje = "Feliz año $entero";
        echo $mensaje;

        $mensaje = 'Feliz año $entero';
        echo $mensaje;

        echo "<br>";
        $edad=33;
        echo $edad;
        echo "<br>";
        $edad="Treinta y tres";
        echo $edad;

        $edad = "33";
        settype($edad, "integer");
        echo "<br>";
        echo $edad + 3;

        $edad = 45;
        echo "<br>";
        echo gettype($edad);
        $edadString = (string) $edad;
        echo "<br>";
        echo $edadString;
        echo "<br>";
        echo gettype($edadString);


        // ambito de variables
        $variableGlobal = "pepe"; 
        $variableGlobal2 = "juan";
        function mifuncion(){ 
            $variableLocal = "Roxana";
            
            echo "<br>"; 
            echo $variableLocal;
            echo "<br>"; 
            // echo $variableGlobal;
            //estoy dentro de la función, para aceder a las variables utilizo $GLOBALS 
            echo $GLOBALS["variableGlobal"]; 
            echo "<br>"; 
            echo $GLOBALS["variableGlobal2"]; 
        }

        mifuncion();        

        echo "<br>"; 
        phpinfo();

        echo "<br>"; 
        echo $_SERVER["MYSQL_HOME"];

        echo "<br>"; 
        // var_dump($GLOBALS);

        
        //arrays con índice numérico
        $edad=12;
        $meses = [
            "enero",
            "febrero",
            "marzo",
            "abril",
        ];

        echo "<br>";
        for ($i=0; $i < count($meses); $i++) { 
            echo "<br>";
            echo $meses[$i];
        }
        

        $numeroMes = [
            "enero" => "1",
            "febrero" => "2",
            "marzo" => "3",
            "abril" => "4",
        ];

        echo "<br>";
        echo $numeroMes["febrero"];


         // matrices o arrays multidimensionales
        $pais=[
            "argentina" => [
                "nombre"=>"República Argentina",
                "lengua"=>"Castellano",
                "moneda"=>"Pesos"
                ],
            "francia" => [
                "nombre"=>"Francia",
                "lengua"=>"Francés",
                "moneda"=>"Euro"
            ]
        ];
        echo "<br>";
        echo $pais["argentina"]["moneda"];
        echo "<br>";
        echo $pais["francia"]["lengua"];


         //funciones de array
        $monedas = [
            "argentina" => "pesos",
            "francia" => "euro",
            "japón" => "yen"
        ];
        asort($monedas);
        echo "<br>";
        echo "funciones de arrays";
        echo "<br>";
        var_dump($monedas);
        
        ksort($monedas);
        echo "<br>";
        var_dump($monedas);

        echo "<br>";
        echo count($monedas);

    ?>

</body>
</html>