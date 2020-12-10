<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre una tirada de dados entre 1 y 6,
 * al azar, y coloque la ficha en la posición correspondiente.
 *
 * La posición de la ficha cx depende del valor obtenido en el dado:
 * La posición se puede calcular a partir del valor del dado mediante la fórmula: $posicion = 100 * $dado - 50
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
    Avance de ficha.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>

  <h1>Avance de ficha</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>
  <form action="dado.php" method="POST" enctype="multipart/form-data">
  <select name="numeros">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
  </select>
  <input type="submit" value="Enviar" name="enviar">
  </form>

<?php
if (isset($_POST['enviar'])){
$_POST['numeros'];
$dado = $_POST['numeros'];
$img = "img/".$dado.".svg";
$carta = $_POST['numeros'];
$img2 = "img/c".$carta.".svg";;
?>

<img class="dado" src="<?php echo $img; ?>">
<img class="carta" src="<?php echo $img2; ?>">

<?php
}
?>

  <footer>
    <p>Adrian</p>
  </footer>
</body>
</html>
