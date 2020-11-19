<html> 
    <head>
        <title>Ejercicio FOR</title>
    </head>
    <body>
        <h1>Sin Usar Funciones</h1>
        <?php
            $email = "florindo.lopdeleduca.jcyl.es";

            for ($i=0; $i < 10; $i++) { 
                echo str_replace("@",$i."@", $email)."<br>";
            }
        ?>
        </br>
    </body>
</html> 