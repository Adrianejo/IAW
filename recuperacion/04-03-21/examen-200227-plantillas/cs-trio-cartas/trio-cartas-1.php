<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Trío de cartas.
    Con sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Trío de cartas</h1>

  <form action="trio-cartas-2.php">
<?php

if (empty($_SESSION['carta1']) & empty($_SESSION['carta2']) & empty($$_SESSION['carta3'])) {
  echo '<img src="img/c'.$_SESSION['carta1'].'.svg" alt="10" width="100" height="100">';
  echo '<img src="img/c'.$_SESSION['carta2'].'.svg" alt="10" width="100" height="100">';
  echo '<img src="img/c'.$_SESSION['carta3'].'.svg" alt="10" width="100" height="100">';
}
?>

  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
