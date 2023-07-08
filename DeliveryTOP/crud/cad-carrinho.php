<?php
    include ('../conect/conn.php');

    $id_produto = $_POST['id_produto'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];


   /* if(empty($id_produto) ||empty($valor)){
        echo "Voce precisa preencher todos os campos";

   /* }   else    {
        try{*/
        $carrinho = $pdo->prepare('INSERT INTO carrinho (id_produto, quantidade, valor) values (?, ?, ?)');
        $carrinho->bindParam(1, $id_produto);
        $carrinho->bindParam(2, $quantidade);
        $carrinho->bindParam(3, $valor);
        $carrinho->execute();
       /* } catch (Exception $e){
            echo $e->getMessage();
        }
    }*/

?>