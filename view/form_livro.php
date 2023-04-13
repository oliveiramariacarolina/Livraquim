<?php
    require_once("../controle/login.php");
    testa_login();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livro</title>
</head>
<body>
    <?php
        require("cabecalho.php");
    ?>
    <div id="principal">
       <form action="cadastralivro.php" method="POST">
            <label>ISBN: </label>
            <input type="text" name="isbn"><br>
            <label>Título: </label>
            <input type="text" name="titulo"><br>
            <label>Ano: </label>
            <select name="ano">
                <?php
                    for ($i=2023; $i>=1950; $i--) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select><br>
            <label>Autor:</label>
            <select name="autor">
                <?php
                    //codigo para mostrar autores. cria-se um 
                    //controlador que puxa da classe para o banco
                ?>
            </select><br>
            <label>Quantidade</label>
            <input type="number" name="quantidade"><br>
            <label>Tema:</label>
            <select name="tema">
                <?php
                    //codigo para mostrar autores. cria-se um 
                    //controlador que puxa da classe para o banco
                ?>
            </select> <br>
            <label>Editora:</label>
            <select name="editora">
                <?php
                    //codigo para mostrar autores. cria-se um 
                    //controlador que puxa da classe para o banco
                ?>
            </select><br>
            <label> Preço de Custo </label>
            <input type="text" name="precocusto"><br>
            <label> Preço de Venda </label>
            <input type="text" name="precovenda"><br><br>
            <input type="submit" value="Enviar">
       </form>
    </div>

</body>
</html>
