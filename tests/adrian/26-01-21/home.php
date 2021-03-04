<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres cuadrados contiguos con un lado entre 50 y 150 píxeles, al azar.
 *
 * Crea 3 dif con width, height y fondos distintos. Cambia el widht y el heigh con un random
 *
 * @author Escriba aquí su nombre
 *
 */
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    DATABASE MENU
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>OPCIONES DATABASE</h1>

  <ol>
    <li>
      <a href="crear_equipo.php">Crear tabla equipo</a>
      <?php
        if(isset($_SESSION['crear_tabla_equipo'])){
          if($_SESSION['crear_tabla_equipo']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="insertar_datos_equipo.php">Insertar datos equipo</a>
      <?php
        if(isset($_SESSION['insertar_tabla_equipo'])){
          if($_SESSION['insertar_tabla_equipo']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
      <a href="crear_jugador.php">Crear tabla de jugador</a>
      <?php
        if(isset($_SESSION['crear_tabla_jugador'])){
          if($_SESSION['crear_tabla_jugador']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
      <a href="insertar_datos_jugador.php">Insertar datos de jugador</a>
      <?php
        if(isset($_SESSION['insertar_datos_jugador'])){
          if($_SESSION['insertar_datos_jugador']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="resetear.php">Resetear la base de datos</a>
      <?php
        if(isset($_SESSION['resetear_base_de_datos'])){
          if($_SESSION['resetear_base_de_datos']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="resetear.php">Insertar datos de equipo por defecto</a>
      <?php
        if(isset($_SESSION['Insertar datos de equipo formulario'])){
          if($_SESSION['Insertar datos de equipo formulari']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
  </ol>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>