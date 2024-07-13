<?php
require __DIR__ . '../libs/database.php';
class Persona
{
  protected $id;
  protected $nombre;
  protected $apellido;
  protected $genero;
  protected $edad;

  protected $db;
  protected $connection;

  public function __construct()
  {
    $this->db = new Database();
    $this->connection   = $this->db->getConnection();
  }

  public function getId()
  {
    return $this->id;
  }
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getApellido()
  {
    return $this->apellido;
  }
  public function getGenero()
  {
    return $this->genero;
  }
  public function getEdad()
  {
    return $this->edad;
  }

  public function setNombre($nombre)
  {
    $this->nombre = strtolower($nombre);
  }
  public function setApellido($apellido)
  {
    $this->apellido = strtolower($apellido);
  }
  public function setGenero($genero)
  {
    $this->genero = strtolower($genero);
  }
  public function setEdad($edad)
  {
    $this->edad = $edad;
  }

  // Metodos
  public function Guardar()
  {
    $sql = "INSERT INTO aprendiz(nombre, apellido, genero, edad) VALUES (:nombre, :apellido, :genero, :edad)";
    $stm = $this->connection->prepare($sql);
    $stm->bindParam(':nombre', $this->nombre);
    $stm->bindParam(':apellido', $this->apellido);
    $stm->bindParam(':genero', $this->genero);
    $stm->bindParam(':edad', $this->edad);
    $stm->execute();

    // ejecutamos la consulta 
    if($stm -> execute()){
      return $this->connection->lastInsertId();
    }else{
      return $this->connection->errorInfo();
    }

  }

  public function Listar()
  {
    $sql = "SELECT * FROM aprendiz";
    $stm = $this->connection->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
  }


  // public function Listar(){
    //   $sql = "SELECT * FROM tb_aprendiz";
    //   $stm = $this->connection->prepare($sql);
    //   $stm->execute();
    //   return $stm->fetchAll();
    // }
    // public function Eliminar(){
    //   $sql = "DELETE * FROM tb_aprendiz where id = :id";
    //   $stm = $this->connection->prepare($sql);
    //   $stm->execute();
    //   return $stm->fetchAll();
    // }
    // public function modificar($tabla){
    //   $sql = "UPDATE $tabla SET  nombre = :nombre, apellido = :apellido, genero = :genero, edad = :edad where id = :id";
    //   $stm = $this->connection->prepare($sql);
    //   $stm->binParam(':nombre', $this->nombre);
    //   $stm->binParam(':apellido', $this->apellido);
    //   $stm->binParam(':genero', $this->genero);
    //   $stm->binParam(':edad', $this->edad);
    //   $stm->binParam(':id', $this->id);
    //   $stm->execute();
    //   if($stm->execute()){
    //     return true;
    //   }else{
    //     return false;
    //   }


    //   repare($sql); 
    // }
}
