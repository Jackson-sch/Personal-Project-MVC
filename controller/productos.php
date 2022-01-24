<?php


require_once("../config/conexion.php");
require_once("../models/productos.php");

$productos = new Producto();

switch ($_GET["op"]) {
  case 'listar_productos':
    $datos = $productos->get_productos();
    $data = array();
    foreach ($datos as $row) {
      $sub_array = array();
      $sub_array[] = $row["Cod_Prod"];
      $sub_array[] = $row["Nom_Prod"];
      $sub_array[] = $row["Concent"];
      $sub_array[] = $row["Nom_Form_Farm"];
      $sub_array[] = $row["Nom_Form_Farm_Simplif"];
      $sub_array[] = $row["Presentac"];
      $sub_array[] = '<a href="#" name="update" id="' . $row["Id"] . '" class="text-primary"><i class="fa fa-edit"></i></a>              <a href="#" name="delete" id="' . $row["Id"] . '" class="text-danger"><i class="fa fa-trash"></i></a>';
      $data[] = $sub_array;
    }

    $results = array(
      "sEcho" => 1,
      "iTotalRecords" => count($data),
      "iTotalDisplayRecords" => count($data),
      "aaData" => $data
    );
    echo json_encode($results);

    break;
  }