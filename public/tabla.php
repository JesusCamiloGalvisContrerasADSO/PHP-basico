<?php
require __DIR__ . "/../clases/aprendiz.php";

$aprendiz = new Aprendiz();

$aprendiz->Listar();

var_dump($persona);
?>

<table>
  <thead>
    <tr>id</tr>
    <tr>nombre</tr>
    <tr>apellido</tr>
    <tr>genero</tr>
    <tr>edad</tr>
  </thead>
  <tbody>
    <?php
    foreach ($persona as $key => $value) {
    ?>
      <tr>
        <td>
          <?php $value("id"); ?>
        </td>
        <td>
          <?php $value("nombre"); ?>
        </td>
        <td>
          <?php $value("apellido"); ?>
        </td>
        <td>
          <?php $value("genero"); ?>
        </td>
        <td>
          <?php $value("edad"); ?>
        </td>
        <td>
          <form action="" method="">
            <button type="submit">Eliminar</button>
          </form>
        </td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>