<?php
    require_once "lib/nusoap.php";
    function getFrutas($datos){
      if($datos== "Frutas"){
        return join(",",array(
          "Manzana",
          "Durazno",
          "Fresa",
          "Naranja",
          "Mango",
          "Uva",
          "Mandarina",
          "Sandia",
          "Pera"));

      }
      else{
          return "No hay frutas";
      }
    }
    $server = new soap_server(); //creamos la instancia de Soap
    $server->register("getFrutas");//Indica el metodo o función a devolver
    if( !isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_get_contents('php://input');
      $server->Service($HTTP_RAW_POST_DATA);
 ?>
