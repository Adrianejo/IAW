<html>
    <head>
        <title> Ejer1 </title>
    </head>
    <body>
      <?php

        if($_POST['enviar']){

            $a=$_POST['valora'];
            $b=$_POST['valorb'];
            function getGratherValue($a,$b){
                if($a > $b){
                    echo $a." es mayor que ".$b;
                }else{
                    echo $b." es mayor que ".$a;
                }
            }
            getGratherValue($a, $b);
        }else{
      ?>
      <form action="ejer1.php" method="POST" enctype="multipart/form-data">

        Valor a: <input type="number" name="valora"></br>

        Valor b: <input type="number" name="valorb"></br>

        <input type="submit" name="enviar" value="Enviar">
      </form>
      <?php
        }
      ?>
    </body>
</html>