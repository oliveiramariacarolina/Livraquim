<?php

  require_once("../banco/Banco.php");
  
  
  function mostaAutor(){
    $banco = new Banco();
    
    $sql = "select*from autor";
  
    $resultado = $banco->consultar($sql);

    return $resultado;
  }
?>