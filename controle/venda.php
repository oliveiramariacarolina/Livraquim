<?php
 
 include_once("../banco/Banco.php");

    function mostrarProdutos(){
            $banco = new Banco();
            $sql = "select*from livro";
            
            $resultado = $banco->consultar($sql);

                while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
                    echo "<div id='livro'><img src={$linha['foto']}> <br> - 
                    ISBN: {$linha['isbn']} <br> -
                    Título: {$linha['titulo']} <br>  - 
                    Quantidade: <select name='$linha[id_livro]' id='quantidade$linha[id_livro]' onChange='update($linha[id_livro])'>";
							for($i=0;$i<=$linha['quantidade'];$i++){
                                if($i==0)
								   echo "<option value=$i>-";
                                else
                                    echo "<option value=$i>$i";
							}
							echo "</select> <br>
                     Preço Unitário:  <input type='text' disabled='' id='precovenda$linha[id_livro]' value={$linha['precovenda']}><br>
                     <span id='mostratotalitem$linha[id_livro]' style='display:none;' > Subtotal:<input type='text' disabled='' id='precototalitem$linha[id_livro]' value='' onChange='atualizaTotal()'}></span></div>";
                }
     
    }
    if(isset($_POST['precoprevio'])){
        foreach($_POST as $id_livro => $quantidade) {
            if(($quantidade!=0)&&($id_livro!="precoprevio")){
              $livros[$id_livro] = $quantidade;
            }
            session_start();
            $_SESSION['livroscomprados']=$livros;
            $_SESSION['precoprevio']=$_POST['precoprevio'];
        }
        header("Location:../view/confirmavenda.php");
    }

    function mostrarCompra(){
        $livros = $_SESSION['livroscomprados'];
        foreach($livros as $id_livro => $quantidade) {
           echo "id_livro $id_livro comprou $quantidade";
        }
        echo "Preço total prévio - ".$_SESSION['precoprevio'];
    }

    if(isset($_POST['pagamento'])){
        //cadastrar nas vendas, descontar o estoque do livro.
    }


?>