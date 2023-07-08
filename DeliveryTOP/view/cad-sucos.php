<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Sucos</title>
</head>
<body>
    <form action="../crud/cad-sucos.php" method="post">
    <input type="file" name="img" id="imagem"><br>
    <input type="text" name="nome" id="nome" placeholder="Nome"><br>
    <input type="text" name="descricao" id="descricao" placeholder="descricao"><br>
    <input type="text" name="valor" id="valor" placeholder="Valor"><br>
    <input type="submit" value="Adicionar Produto">
    </form>
</body>
</html>