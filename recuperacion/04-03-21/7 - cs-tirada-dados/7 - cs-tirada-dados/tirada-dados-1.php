<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada dados (Formulario).
    Con sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>
<?php

 $dado1 = rand(1, 6);
 $dado2 = rand(1, 6);
 $dado3 = rand(1, 6);

 $_SESSION['dado1'] = $dado1;
 $_SESSION['dado2'] = $dado2;
 $_SESSION['dado3'] = $dado3;


echo "<img src='img/".$dado1.".svg' >";
echo "<img src='img/".$dado2.".svg' >"; 
echo "<img src='img/".$dado3.".svg' >";
?>
<p>
  <a href="tirada-dados-1.php">Volver a tirar</a>
<p>
</p>
  <a href="tirada-dados-2.php">Resumen de la tirada con sesión</a>
</p>
<footer>
  <p>Escriba aquí su nombre</p>
</footer>
</body>
</html>