<?php

    require ("../conect/conn.php");

    if (isset($_GET['idimagens'])){
        $idimagens = $_GET['idimagens'];
    }
        else{
            header("Location: index.php");
    }

    $tabela = $pdo->prepare("SELECT * FROM imagens WHERE idimagens=:idimagens;");

    $tabela->execute(array(':idimagens'=>$idimagens));
    $rowTable = $tabela->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <div>
        <form action="../crud/update-prod.php" method="post">
            <input type="hidden" name='idimagens' value=<?php echo $rowTable[0]['idimagens']?>>
            <input type="file">
            <input type="text" name="nome" value=<?php echo $rowTable[0]['nome']?>>
            <input type="text" name="descricao" value=<?php echo $rowTable[0]['descricao']?>>
            <input type="text" name="valor" value=<?php echo $rowTable[0]['valor']?>>
            <input type="submit" value="ENVIAR">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>
</html>