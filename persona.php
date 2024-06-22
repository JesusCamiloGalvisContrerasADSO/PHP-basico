<?php

class Persona{
  protected $nombre;
  protected $apellido;
  protected $genero;
  protected $edad;

  public function __construct(
    ){
      
  }

  public function getNombre(){
    return strtolower($this->nombre) ;
  }
  public function getApellido(){
    return $this-> apellido;
  }
  public function getGenero(){
    return $this-> genero;
  }
  public function getEdad(){
    return $this-> edad;
  }

  public function setNombre($nombre){
    $this-> nombre = $nombre;

  }
  public function setApellido($apellido){
    $this-> apellido = $apellido;

  }
  public function setGenero($genero){
    $this-> genero = $genero;

  }
  public function setEdad($edad){
    $this-> edad = $edad;
  
  }
  //Metodos
  public function Guardar()
  {
    echo "Se almacenaron los datos: <br> " .$this-> nombre. "<br> ".$this-> apellido. "<br> ".$this-> genero. " <br>" .$this-> edad;
  }
}

