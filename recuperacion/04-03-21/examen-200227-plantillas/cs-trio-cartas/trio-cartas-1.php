<?php
session_start();
if (!isset($_SESSION['carta1'])) {
  $carta1 = rand(1,10);
  $_SESSION['carta1'] = $carta1;
}
if (!isset($_SESSION['carta2'])) {
  $carta2 = rand(1,10);
  $_SESSION['carta2'] = $carta2;
}
if (!isset($_SESSION['carta3'])) {
  $carta3 = rand(1,10);
  $_SESSION['carta3'] = $carta3;
}
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

?>
<p>Haga clic en una de las cartas para cambiarla. El juego termina cuando obtenga tres cartas iguales.</p>

<p>
  <button type="submit" name="cambia" value="1">
    <img src="<?php echo "img/c".$_SESSION['carta1'].".svg"; ?>" alt="4" width="140" height="140">
  </button>
  <button type="submit" name="cambia" value="2">
    <img src="<?php echo "img/c".$_SESSION['carta2'].".svg"; ?>" alt="4" width="140" height="140">
  </button>
  <button type="submit" name="cambia" value="3">
    <img src="<?php echo "img/c".$_SESSION['carta3'].".svg"; ?>" alt="4" width="140" height="140">
  </button>

</p>
<p>Cambios de cartas realizados: 3</p>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
