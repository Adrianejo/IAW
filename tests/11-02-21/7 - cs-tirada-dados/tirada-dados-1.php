<?php
/**
 * Tirada dados - tirada-dados-1.php
 *
 * @author Escriba aquí su nombre
 */

print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada dados (Formulario).
    Con sesiones.
    Adrian Menaza
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>
<?php
session_start ();

//reset
if(isset($_GET["reset"])){
  $_SESSION["tiradas"] = array();
}

  $dado1= rand (1,6);
  $dado2= rand (1,6);
  $dado3= rand (1,6);
  $total= $dado1 + $dado2 + $dado3;


  $_SESSION['dado1'] = $dado1;
  $_SESSION['dado2'] = $dado2;
  $_SESSION['dado3'] = $dado3;
//asi se hace este array
  $_SESSION['tiradas'][] = $total;

  echo "<p>";
    echo "<img src='img/".$dado1.".svg' alt=".$dado1." width='140' height='140'>";
    echo "<img src='img/".$dado2.".svg' alt=".$dado2." width='140' height='140'>";
    echo "<img src='img/".$dado3.".svg' alt=".$dado3." width='140' height='140'>";
  echo "</p>";
//foreach para hacer funcionar el array
  echo "<ol>";
    foreach ($_SESSION['tiradas'] as $key => $value) {
      echo "<li> El valor de esta tirada fue ".$value."</li>";
}
echo "</ol>";

echo "El total de los dados: $total";

?>
<p>
  <a href="tirada-dados-1.php">Volver a tirar</a><br>
</p>
<p>
  <a href="tirada-dados-1.php?reset">Reset</a><br>
</p>
<footer>
  <p>Adrian Menaza</p>
</footer>
</body>
</html>
