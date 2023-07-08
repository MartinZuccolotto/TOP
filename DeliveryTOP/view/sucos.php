<?php
    require('../conect/conn.php');
    
    $stmt = $pdo->prepare('SELECT caminho, nome, descricao, valor from sucos');
    $stmt->execute();
    $sucos = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
            <a style="font-size: 36px; top: -6px; left: 228px;" class="letras" href="">Sacola</a>
            <img src="../img/Group 1.png" class="logo1" alt="">
            <img src="../img/perfil 1.png" class="perfil" alt="">
        </div>
        <div class="linha"></div>
    </div>
    
    <div class="content">
        <?php
        foreach($sucos as $suco){
            $caminhoSuco = $suco['caminho'];
            $nome = $suco['nome'];
            $descricao = $suco['descricao'];
            $valor = $suco['valor'];
         echo   '<ol>
                <li>
                    <a href="">
                        <img src="../img/'.$caminhoSuco.'">
                        <label id="salada">'.$nome.'</label>
                        <label id="salada">'.$descricao.'</label>
                        <label id="salada">'.$valor.'</label>
                        <img id="seta" src="../img/seta.png">
                        
                    </a>
                </li>
                <hr>
            </ol>';
        };
        ?>
</div>
</body>
</html>