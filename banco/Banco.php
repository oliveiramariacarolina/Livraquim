<?php
  class banco extends PDO{

    public $base;
    public $conex;

    public function __construct(){
      $this->conex = new PDO('mysql:host=localhost;dbname=livraria',"root","");
    }
    
    public function executar($sql){
      //usada geralmente para inserir dados
      if ($this->conex->query($sql)) {
        return true;
      }else{
        return false;
      }
    }

    public function consultar($sql){
      //usada quando preciso pegar as informações das linhas das tabelas
      $resultado = $this->conex->query($sql);
      $num_linhas = $resultado->rowCount();
      if ($num_linhas>0) {
        //FETCH significa BUSCAR 
        return $resultado->fetch(PDO::FETCH_ASSOC);
      } 
      else {
        return false;
      }
      
    }
  }
?>