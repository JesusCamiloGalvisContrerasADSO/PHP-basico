<?php
  include_once('persona.php');
  class aprendiz extends Persona{
    protected $db;
    protected $connection;

    public function __construct(){
      parent::__construct();
    }
  }

// class aprendiz extends Persona
// {
//   protected $db;
//   protected $conection;

//   public function __construct()
//   {
//     parent::__construct();
//     $this->db = new Database();
//   }
// }
