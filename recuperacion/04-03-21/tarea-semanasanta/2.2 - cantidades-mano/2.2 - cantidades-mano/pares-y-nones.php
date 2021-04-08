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

<?php
$player1= rand(1,5);
$player2= rand(1,5);

if ($player1 > $player2) {
  echo $gana1 = "gana";
  echo $pierde2 = "pierde";
}
elseif ($player1 < $player2) {
  echo $gana2 = "gana";
  echo $pierde1 = "pierde";
}
else {
  echo $gana1 = "gana";
  echo $gana2 = "gana";
}
?>
<table>
    <tr>
      <th colspan="2">Jugador 1<br></th>
      <th colspan="2">Jugador 2<br></th>
    </tr>
    <tr>
    <td><img src=<?php echo "img/".$gana1.".svg";?></td>
    <td><img src=<?php echo "img/".$player1.".svg";?></td>
    <td><img src=<?php echo "img/".$player2.".svg";?></td>
    <td><img src=<?php echo "img/".$gana2.".svg";?></td>
    </tr>
  </table>

  <a href="pares-y-nones.php">Volver a jugar</a></br>
  <a href="pares-y-nones.php?reset=true">Reiniciar partida</a>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>