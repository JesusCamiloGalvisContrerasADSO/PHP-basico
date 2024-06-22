<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>

<body>
  <form action="controlador.php" method="POST">
    <div>
      <label for="nombre">Nombre</label>
      <input type="text" id="Nombre" name="nombre">
    </div>
    <div>
      <label for="apellido">Apellido</label>
      <input type="text" id="Apellido" name="apellido">
    </div>
    <div>
      <label for="genero">Genero</label>
      <select name="genero" id="Genero">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
    </div>
    <div>
      <label for="edad">Edad</label>
      <input type="number" id="Edad" name="edad">
    </div>
    <button type="submit">Enviar</button>
  </form>
</body>

</html>