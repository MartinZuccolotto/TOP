<?php

    include('../conect/conn.php');

    $idimagens = $_POST['idimagens'];
    $caminhoImg = $_POST['img'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $up = $pdo->prepare('UPDATE pratos caminho = ?, nome = ?, descricao = ?, valor = ? where idimagens = ?');
    $up->execute([$idimagens, $caminhoImg, $nome, $descricao, $valor]);

?>