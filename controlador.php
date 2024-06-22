<?php
if ($_SERVER['REQUEST_METHOD'] === "GET") {
  $nombre = $_GET['nombre'];
  $apellido = $_GET['apellido'];
  $genero = $_GET['genero'];
  $edad = $_GET['edad'];

  require_once("aprendiz.php");
  $aprendiz = new Aprendiz();
  $aprendiz->setNombre($nombre);
  $aprendiz->setApellido($apellido);
  $aprendiz->setGenero($genero);
  $aprendiz->setEdad($edad);

  $aprendiz-> Guardar();

  echo "es get";

}
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  require_once("aprendiz.php"); 

if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $genero = $_POST['genero'];
  $edad = $_POST['edad'];

  $persona = new Aprendiz();
  $persona->setNombre($nombre);
  $persona->setApellido($apellido);
  $persona->setGenero($genero);
  $persona->setEdad($edad);

  $persona->Guardar();

  echo "es post";
}
}
