<?php

class Conectar{
  protected $db;

  protected function Conexion(){
    try{
      //Conexion a base de datos con PDO
      $conectar = $this->db = new PDO('mysql:host=localhost;dbname=interacciones', 'root', '');
      return $conectar;
    }catch(Exception $e){
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }
  }

  public function set_names(){
    return $this->db->query("SET NAMES 'utf8'");
  }
}