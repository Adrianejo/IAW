<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Muestra cartas.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Muestra cartas</h1>

<?php


$cantidad= rand(3,12);
$total=0;

for ($i=0; $i <$cantidad ; $i++) { 
    $dado= rand(1,6);
    echo  "<img src='img/".$dado.".svg' >";
    $total= $dado + $total;
}

echo "<p>He tirado el total de ".$cantidad." dados</p>";

echo "<p>El total de dados es: ".$total."</p>";


?>

  <footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>
