<?php
session_start();

require('../conect/conn.php');

$img = $_GET['caminhoImagem'];

$stmt = $pdo->prepare('SELECT nome, descricao, valor FROM pratos WHERE caminho = ?');
$stmt->execute([$img]);
$imagem = $stmt->fetch(PDO::FETCH_ASSOC);

// Função auxiliar para adicionar um produto ao carrinho
function adicionarProduto($produto, $preco)
{
    if (isset($_SESSION['carrinho'][$produto])) {
        // Se o produto já existe no carrinho, adiciona a quantidade
        $_SESSION['carrinho'][$produto]['quantidade'] += 1;
    } else {
        // Se o produto não existe no carrinho, adiciona como um novo item
        $_SESSION['carrinho'][$produto] = [
            'nome' => $produto,
            'valor' => $preco,
            'quantidade' => 1
        ];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['adicionar'])) {
        $produto = $imagem['nome'];
        $preco = $imagem['valor'];

        adicionarProduto($produto, $preco);

        // Redireciona para o carrinho após adicionar o produto
        // header('Location: carrinho.php');
        // exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/produto.css">
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
    <div style="height:735px">
        <img class="img" src="../img/<?php echo $img; ?>" alt="Imagem do Produto">
        <p class="nome letras"><?php echo $imagem['nome']; ?></p>
        <p class="tb_nutri letras">Tabela Nutricional</p>
        <p class="cal letras">Calorias: <?php echo $imagem['descricao']; ?></p>
        <p class="cal letras">Valor: <?php echo $imagem['valor']; ?></p>
            <div>
            <form action="" method="post">
                <input type="hidden" name="produto" value="<?php echo htmlspecialchars($imagem['nome']); ?>">
                <button class="cal letras" type="submit" name="adicionar">Adicionar ao carrinho</button>
            </form>
        </div>
    </div>
    
</body>
</html>