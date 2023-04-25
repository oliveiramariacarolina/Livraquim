<?php
    require_once("../controle/login.php");
    testa_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirma Venda</title>
</head>
<body>
    <?php
        require("../controle/venda.php");
        mostrarCompra();
    ?>
    <form action="../controle/venda.php" method="post">
        Método de pagamento:<br>
        <input type="radio" name="pagamento" value="dinheiro">
        <label for="dinheiro">Dinheiro</label><br>
        <input type="radio" name="pagamento" value="cartao">
        <label for="cartao">Cartão</label><br>
        <input type="radio" name="pagamento" value="pix">
        <label for="pix">Pix</label><br>
        <input type="submit" value="Enviar">
    </form>
    Fazer o JS para alterar os valores unitários dos livros,
    Colocar a % de desconto
    <script type="text/javascript">
			function update() {
				var select = document.getElementById('pagamento');
				var preco = document.getElementById('preco');
				document.getElementById('valorcompra').value = (select.value*preco.value).toFixed(2);
			}

			update();
		</script>

</body>
</html>