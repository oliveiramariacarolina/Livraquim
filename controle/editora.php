<?php
  include_once ("../banco/Banco.php");
  if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];

    $banco = new Banco();
    $sql = "INSERT INTO editora(nome,cnpj,telefone) VALUES ('$nome','$cnpj','$telefone')";
    if($banco->executar($sql)){
        header("Location:../view/sucesso_cadastro.php");
    }else{
        header("Location:../view/falha_cadastro.php");
    }
  }
?>