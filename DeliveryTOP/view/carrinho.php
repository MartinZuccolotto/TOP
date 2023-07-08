<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Função auxiliar para atualizar a quantidade de um produto no carrinho
function atualizarQuantidade($produto, $quantidade)
{
    if ($quantidade < 1) {
        // Remove o produto do carrinho se a quantidade for menor que 1
        unset($_SESSION['carrinho'][$produto]);
    } else {
        // Atualiza a quantidade do produto no carrinho
        $_SESSION['carrinho'][$produto]['quantidade'] = $quantidade;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['subtrair']) || isset($_POST['somar'])) {
        $produto = $_POST['produto'];

        // Verifica se o produto está no carrinho
        if (isset($_SESSION['carrinho'][$produto])) {
            $quantidadeAtual = $_SESSION['carrinho'][$produto]['quantidade'];

            if (isset($_POST['subtrair'])) {
                // Subtrai 1 da quantidade do produto
                atualizarQuantidade($produto, $quantidadeAtual - 1);
            } elseif (isset($_POST['somar'])) {
                // Soma 1 à quantidade do produto
                atualizarQuantidade($produto, $quantidadeAtual + 1);
            }
        }
    }

    // Redireciona para atualizar a página
    header('Location: carrinho.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
</head>
<body>
    <div>
        <?php
        if (empty($_SESSION['carrinho'])) {
            echo 'Carrinho vazio';
        } else {
            // Criar um array temporário para armazenar as quantidades somadas dos produtos
            $carrinhoTemp = [];

            // Loop através do carrinho de compras
            foreach ($_SESSION['carrinho'] as $produto => $item) {
                $nome = $item['nome'];
                $preco = $item['valor'];
                $quantidade = $item['quantidade'];

                // Verificar se o produto já está no carrinho temporário
                if (isset($carrinhoTemp[$produto])) {
                    // Se o produto já existe, somar a quantidade
                    $carrinhoTemp[$produto]['quantidade'] += $quantidade;
                } else {
                    // Se o produto não existe, adicionar como um novo item no carrinho temporário
                    $carrinhoTemp[$produto] = $item;
                }
            }

            echo '<table>
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>';

            $totalGeral = 0;

            foreach ($carrinhoTemp as $produto => $item) {
                $nome = $item['nome'];
                $preco = $item['valor'];
                $quantidade = $item['quantidade'];
                $total = $preco * $quantidade;

                $totalGeral += $total;

                echo '<tr>
                    <td>' . $nome . '</td>
                    <td>R$ ' . number_format($preco, 2, ',', '.') . '</td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="produto" value="' . $produto . '">
                            <button type="submit" name="subtrair">-</button>
                            <span>' . $quantidade . '</span>
                            <button type="submit" name="somar">+</button>
                        </form>
                    </td>
                    <td>R$ ' . number_format($total, 2, ',', '.') . '</td>
                </tr>';
            }

            echo '</tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Total Geral:</td>
                        <td>R$ ' . number_format($totalGeral, 2, ',', '.') . '</td>
                    </tr>
                </tfoot>
            </table>';
            echo '<a  href="confirmar_pedido.php">Finalizar pedido</a>' ;   
        }
        ?>
    </div>
</body>
</html>