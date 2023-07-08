<?php

    require ("../conect/conn.php");

    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }
        else{
            header("Location: index.php");
    }

    $tabela = $pdo->prepare('SELECT * FROM carrinho WHERE id=:id;');

    $tabela->execute(array(':id'=>$id));
    $rowTable = $tabela->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>
    <div>
        <form action="../crud/update-carrinho.php" method="post">
            <input type="hidden" name='id' value=<?php echo $rowTable[0]['id']?>>
            <input type="text" name="id_produto" value=<?php echo $rowTable[0]['id_produto']?> id='produto' readonly>
            <input type="text" name="quantidade">
            <input type="text" name="valor" value=<?php echo $rowTable[0]['valor']?> readonly><br>
            <input type="submit" value="ENVIAR">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>
</html>