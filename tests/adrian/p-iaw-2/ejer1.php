<html>
  <body>
    <form action="ejercicio1post.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="tipo_formulario" value="fiestuki">
      Nombre de la fiesta: <input type="text" name="nombre">
      <br></br>
      Numero de personas: <input type="number" name="edad">
      <br></br>
      Privada: <input type="radio" name="tipo_fiesta" value="Si" checked> Si
      <input type="radio"  name="tipo_fiesta" value="No"> No
      <br></br>
      Tipo de musica:
      <select name="musica">
        <option value="pop">POP</option>
        <option value="rock">ROCK</option>
        <option value="jazz">JAZZ</option>
        <option value="indie">INDIE</option>
      </select>
      <br></br>
      Espacios disponibles: <input type="checkbox" name="extra[]" value="barras" > Barras
      <input type="checkbox"  name="extra[]" value="escenarios" checked> Escenarios
      <input type="checkbox"  name="extra[]" value="jardin"> Jardin
      <input type="checkbox"  name="extra[]" value="zona_chill" > Zona Chill
      <br></br>
      Otros comentarios de interes:
      <textarea name="comentarios" cols="40" rows="6">
      </textarea>
      <br></br>
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>