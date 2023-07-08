<?php
    require('../conect/conn.php');
    
    $stmt = $pdo->prepare('SELECT caminho, nome, descricao, valor from pratos');
    $stmt->execute();
    $imagens = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/pratos-prontos.css">
</head>
<body>
    <div >
        <div>
            <img src="../img/botao-de-inicio 1.png" class="botao_de_inicio" alt="">
            <a style="font-size: 36px; top: -6px; left: 170px;" class="letras" href="inicio.php">Inicio</a>
            <img src="../img/cesta-de-compra 1.png" class="cesta_de_compras" alt="">
            <a style="font-size: 36px; top: -6px; left: 228px;" class="letras" href="carrinho.php">Carrinho</a>
            <img src="../img/Group 1.png" class="logo1" alt="">
            <img src="../img/perfil 1.png" class="perfil" alt="">
        </div>
        <div class="linha"></div>
    </div>
    
    <div class="content">
        <?php
        foreach($imagens as $imagem){
            //$id = $imagem['idimagens'];
            $caminhoImagem = $imagem['caminho'];
            $nome = $imagem['nome'];
            $descricao = $imagem['descricao'];
            $valor = $imagem['valor'];
         echo   '<ol>
                <li>
                <a href="produtos.php?caminhoImagem=' . urlencode($caminhoImagem) . '">
                
                        <img src="../img/'.$caminhoImagem.'">
                        <label id="nome">Nome: '.$nome.'</label> 
                        <br>
                        <label id="descricao">Descricao: '.$descricao.'</label>
                        <br>
                        <label id="preco">R$: '.$valor.'</label>
                        <br>
                        <img id="seta"  src="../img/seta.png">
                    </a>
                </li>
                <hr>
            </ol>';
        };
        ?>
</div>
</body>
</html>