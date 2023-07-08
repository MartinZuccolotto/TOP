<?php
include('../conect/conn.php');

$caminhoImg = $_POST['img'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];

$img = $pdo->prepare('INSERT INTO sucos (caminho, nome, descricao, valor) VALUES (?, ?, ?, ?)');
    $img->bindParam(1, $caminhoImg);
    $img->bindParam(2, $nome);
    $img->bindParam(3, $descricao);
    $img->bindParam(4, $valor);
    $img->execute();
?>