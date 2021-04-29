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

 $dado1 = $_SESSION['dado1'];
 $dado2 = $_SESSION['dado2'];
 $dado3 = $_SESSION['dado3'];


echo "<img src='img/".$dado1.".svg' >";
echo "<img src='img/".$dado2.".svg' >"; 
echo "<img src='img/".$dado3.".svg' >";
?>
<p>Valor Total conseguido: <?php echo $dado1 + $dado2 + $dado3; ?></p>
<p>
  <a href="tirada-dados-1.php">Volver a tirar</a>
</p>
<form action="tirada-dados-2.php">
<footer>
  <p>Escriba aquí su nombre</p>
</footer>
</body>
</html>