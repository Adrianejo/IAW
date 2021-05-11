<?php
/**
 * Pares y nones - pares-y-nones.php
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
    Pares y nones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Pares y nones</h1>

  <p>Actualice la página para mostrar otra partida.</p>

  <table>
    <tr>
      <th colspan="2">Jugador 1<br>
        (pares)</th>
      <th colspan="2">Jugador 2<br>
        (nones)</th>
    </tr>
<?php

$jugador1 = rand(0,5);
$jugador2 = rand(0,5);
$total= $jugador1 + $jugador2;

if($total%2 == 0){
  //numero par
  $imagenpar = "gana";
  $imagenimpar = "pierde";
}else{
  //número impar
  $imagenimpar = "gana";
  $imagenpar = "pierde";
}

echo "<tr>
      <td><img src='img/".$imagenpar.".svg' ></td>
      <td><img src='img/".$jugador1.".svg' ></td>
      <td><img src='img/".$jugador2.".svg' </td>
      <td><img src='img/".$imagenimpar.".svg'></td>
      </tr>";
?>
  </table>

  <a href="pares-y-nones.php">Volver a jugar</a></br>
  <a href="pares-y-nones.php?reset=true">Reiniciar partida</a>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>