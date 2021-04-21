<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Datos personales 1 (Formulario).
    Controles en formularios (2). Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Datos personales 1 (Formulario)</h1>

  <form action="controles-formularios-2-01-2.php" method="post">
    <p><label>Escriba su nombre: <input type="text" name="nombre" size="20" maxlength="20"></label></p>

    <p><label>Escriba sus apellidos: <input type="text" name="apellidos" size="40" maxlength="40"></label></p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
<?php
if (isset($_SESSION['nombre'])) {
  echo "El nombre es: ".$_SESSION['nombre']. " </br>";
}
else {
  echo "<p style='color:#FF0000'>Debes poner algo en este campo</p>";
}
if (isset($_SESSION['apellidos'])) {
  echo "El apellido es: ".$_SESSION['apellidos']. " </br>";
}
else {
  echo "<p style='color:#FF0000'>Debes poner algo en este campo</p>";
}


?>
  </form>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
