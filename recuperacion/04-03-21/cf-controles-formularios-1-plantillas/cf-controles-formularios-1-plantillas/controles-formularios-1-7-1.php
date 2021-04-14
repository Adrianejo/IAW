<?php
/**
 * Controles en formularios (1) 7-1 - controles-formularios-1-7-1.php
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
    Colores 2 (Formulario).
    Controles en formularios (1). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Colores 2 (Formulario)</h1>

  <form action="controles-formularios-1-7-2.php" method="get">
    <p>Elija los colores a cambiar:<br>
<?php
$color = rand(0, 360);
echo "  <br><input type=\"checkbox\" name=\"fondo\" value=\"hsl($color, 100%, 90%)\"> Color del fondo de la página<br>";
echo "  <br><input type=\"checkbox\" name=\"letra\" value=\"hsl($color, 100%, 30%)\"> Color de la letra de la página</br>";

?>
    </p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
