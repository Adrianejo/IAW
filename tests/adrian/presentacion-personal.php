<!DOCTYPE html>
<html lang="sp">
	
<?php 
 ?>
    <head>
        <title>Presentacion personal</title>
        <style type="text/css">
      body{
            background-color:#f5f5f5;   
            max-width: 700px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;         
        }
        h1{
            color: #83c860;
            font-weight: normal;
            font-size: 40px;
            font-family: Arial; 
        }
        h2 {
            color: #83c860;
            font-weight: normal;
            font-size: 30px;
            font-family: Arial;
            }
        img {
            border: 1px solid #ddd;
            float: right;
            border-radius: 4px;
            padding: 5px;
            width: 150px;
            }  

</style>

    </head>

    <body>

  <?php
  $nombre = "adrian";
  $apellido = "menaza";
  $edad = "20";
  $foto_url = "<img src=https://fotofigaredo.files.wordpress.com/2015/01/foto-carnet.jpg>";
  $Curso1 = "Bachiller de ciencias sociales";
  $Curso2 = "Administracion de Sistemas Informaticos en Red";

  echo "Nombre: $nombre"
  echo "Apellido: $apellido"
  echo "Edad: $edad"
  echo "Foto: $foto_url"

  echo "<h2>Estudios</h2><br>";
  echo  "- $Curso1 <br>";
  echo  "- $Curso2 <br>";
?>

<h2>Contacto</h2>

<?php
  if($_POST){
      echo "<p>El mensaje dice: ".$_POST['opinion']."</p>";
  }
?>

<br><br>
<form action="presentacion-personal.php" method="post" name="contacto" id ="contacto" >
  <br>
  <textarea cols="50" rows="5" name="opinion"></textarea>
  <br>
  <br>
  <input type="submit" value="Enviar formulario">
  <input type="Reset" value="Borrar datos">
</form>
</body>
</html>


</html>