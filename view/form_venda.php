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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Formulário Venda</title>
    <style>
        .invisivel{
            display : none;
        }
    </style>
</head>
<body>
<div id="principal">
    <?php
        require("cabecalho.php");
    ?>
    <form action="../controle/venda.php" method="POST">
            <?php
                require("../controle/venda.php");
                mostrarProdutos();
            ?>
            <input type="text" name="precoprevio" id="precoprevio" value="">
            <input type="submit" value="Enviar">
    </form>
            <script type="text/javascript">
                function update(id_livro) {
                    var select = this.document.getElementById('quantidade'+id_livro);
                    var preco = this.document.getElementById('precovenda'+id_livro);
                    if(select.value!=0){
                        document.getElementById('mostratotalitem'+id_livro).style.display = "block";
                        document.getElementById('precototalitem'+id_livro).value = (select.value*preco.value).toFixed(2); 
                        precoprevio = precoprevio + document.getElementById('precototalitem'+id_livro).value;
                        document.getElementById('precoprevio').value = precoprevio;
                        
                    }
                    else{
                        document.getElementById('mostratotalitem'+id_livro).style.display = "none";
                        precoprevio = precoprevio - document.getElementById('precototalitem'+id_livro).value;
                        document.getElementById('precototalitem'+id_livro).value = (select.value*preco.value).toFixed(2);
                        document.getElementById('precoprevio').value = precoprevio;

                    }
                }

                var precoprevio = 0;
                function atualizaTotal() {
                        precoprevio = precoprevio.value + document.getElementById('precototalitem'+id_livro).value;
                        document.getElementById('precoprevio').value = precoprevio;
                    
                }
		</script>
</div>
</body>
</html>