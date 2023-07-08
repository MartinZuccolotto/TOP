<?php

include('../conect/conn.php');

$id = $_POST['id'];
$id_produto = $_POST['id_produto'];
$quantidade = $_POST['quantidade'];
$valor = $_POST['valor'];

$up = $pdo->prepare('UPDATE carrinho quantidade = ?, valor = ? where id = ?');
$up->execute([$id, $id_produto, $quantidade, $valor]);

?>