<?php

class Producto extends Conectar{
  //Mostrar todos los productos
  public function get_productos(){
    $conectar = parent::Conexion();
    parent::set_names();
    $sql="SELECT * FROM productos";
    $sql=$conectar->prepare($sql);
    $sql->execute();
    return $resultado=$sql->fetchAll();
  }

  //Mostrar producto por id
  public function get_producto_id($id){
    $conectar = parent::Conexion();
    parent::set_names();
    $sql="SELECT * FROM productos WHERE Id=?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$id);
    $sql->execute();
    return $resultado=$sql->fetchAll();
  }

  //Eliminar producto
  public function delete_producto($id){
    $conectar = parent::Conexion();
    parent::set_names();
    $sql="DELETE FROM productos WHERE Id=?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$id);
    $sql->execute();
    return $resultado=$sql->fetchAll();
  }

  //Insertar Producto
  public function insert_producto($Cod_Prod,$Nom_Prod,$Concent,$Nom_Form_Farm,$Nom_Form_Farm_Simplif,$Presentac){
    $conectar = parent::Conexion();
    parent::set_names();
    $sql="INSERT INTO productos VALUES(?,?,?,?,?,?)";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$Cod_Prod);
    $sql->bindValue(2,$Nom_Prod);
    $sql->bindValue(3,$Concent);
    $sql->bindValue(4,$Nom_Form_Farm);
    $sql->bindValue(5,$Nom_Form_Farm_Simplif);
    $sql->bindValue(6,$Presentac);
    $sql->execute();
    return $resultado=$sql->fetchAll();
  }

  //Editar Producto
  public function edit_producto($id,$Cod_Prod,$Nom_Prod,$Concent,$Nom_Form_Farm,$Nom_Form_Farm_Simplif,$Presentac){
    $conectar = parent::Conexion();
    parent::set_names();
    $sql="UPDATE productos SET Cod_Prod=?, Nom_Prod=?, Concent=?, Nom_Form_Farm=?, Nom_Form_Farm_Simplif=?, Presentac=? WHERE Id=?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1,$Cod_Prod);
    $sql->bindValue(2,$Nom_Prod);
    $sql->bindValue(3,$Concent);
    $sql->bindValue(4,$Nom_Form_Farm);
    $sql->bindValue(5,$Nom_Form_Farm_Simplif);
    $sql->bindValue(6,$Presentac);
    $sql->bindValue(7,$id);
    $sql->execute();
    return $resultado=$sql->fetchAll();
  }
}