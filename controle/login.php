<?php

    require_once("../banco/Banco.php");
    require_once("classes/Usuario.php");

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $banco = new Banco();

    $sql = "select*from usuario where login='$login' and senha='$senha'";

    $resultado = $banco->consultar($sql);

    if ($resultado) {
        $usuario = new Usuario($resultado['nome'],$resultado['login'],$resultado['senha']);
        $usuario->logar();
    } else{
        echo"deu ruim";
        return false;
    }
?>