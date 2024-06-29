<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formualrio</title>
</head>

<body>
  <form action="controladores/controlador.php" method="POST">
    <div>
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre">
    </div>
    <div>
      <label for="apellido">Apellido</label>
      <input type="text" id="apellido" name="apellido">
    </div>
    <div>
      <label for="genero">Genero</label>
      <input type="text" id="genero" name="genero">
    </div>
    <div>
      <label for="edad">Edad</label>
      <input type="text" id="edad" name="edad">
    </div>
    <button type="submit">Enviar</button>
  </form>
</body>

</html>