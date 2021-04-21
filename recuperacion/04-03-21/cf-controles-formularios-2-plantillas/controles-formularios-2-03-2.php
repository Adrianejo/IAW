<?php
/**
 * Controles en formularios (2) 3-2 - controles-formularios-2-03-2.php
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
    Datos personales 3 (Resultado).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 3 (Resultado)</h1>

<?php
if(empty($_GET['genero'])) {
  echo "<p style='color:#FF0000'>Debes de rellenar el campo de sexo</p>";
}
elseif(isset($_GET['genero'])) {
  echo "El sexo es : ".$_GET['genero']. " </br>";
}

if(empty($_GET['cine']) & empty($_GET['literartura']) & empty($_GET['musica'])) {
  echo "<p style='color:#FF0000'>No se ha declarado ninguna aficion</p>";
}


if(isset($_GET['cine'])) {
  echo "Le gusta el cine </br>";

}
if(isset($_GET['literatura'])) {
  echo "Le gusta el literatura </br>";

}
if(isset($_GET['musica'])) {
  echo "Le gusta el musica </br>";

}

?>

  <p><a href="controles-formularios-2-03-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
