<?php
/**
 * Muestra cartas - muestra-cartas.php
 *
 * @author Escriba aquí su nombre
 *
 */
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
$dado= rand(1,6);

for ($i=0; $i <$cantidad ; $i++) { 
  echo  "<img src='img/".$dado.".svg' >";
}

?>

  <footer>
    <p>Adrian Menaza</p>
  </footer>
</body>
</html>
