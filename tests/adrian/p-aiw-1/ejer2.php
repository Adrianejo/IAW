<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            $tabla = 3;
            echo "Calcularemos la tabla del ".$tabla."<br>";     
            for ($i = 1; $i <= 10; $i++ ){
                $multiplicar = $i * $tabla;
                echo $multiplicar."<br>";
            }       
        ?>
    </body>
</html>