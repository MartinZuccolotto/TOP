<?php
  require("../conect/conn.php");

  $tabela = $pdo->prepare("SELECT idimagens, nome, descricao, valor FROM pratos;");

  $tabela->execute();

  $rowTabela = $tabela->fetchAll();

  if (empty($rowTabela)){
    echo "<script>
        alert('Tabela Está Vazia!')
        </script>";
  };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<table class="table table-dark table-striped">
<thead>
    <tr class="retprin" >
      <th class="id" scope="col">Id</th>
      <th class="nome" scope="col">Nome</th>
      <th class="email" scope="col">Descrição</th>
      <th class="email" scope="col">Valor</th>
      <th class="senha" scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($rowTabela as $linha){
      echo '<tr>';
      echo "<th class='retid text' scope='row'>".$linha['idimagens']."</th>";
      echo "<td class='retnome text'>".$linha['nome']."</td>";
      echo "<td class='retemail text'>".$linha['descricao']."</td>";
      echo "<td class='retemail text'>".$linha['valor']."</td>";
      echo '<td class="editar"><a href=update-prod.php?idimagens='.$linha['idimagens'].' type="button" class="bnt" value="EDITAR">EDITAR</a></td>';
      echo '<td class="deletar"><a href=../crud/del-prod.php?idimagens='.$linha['idimagens'].' type="button" class="bnt2">DELETAR</a></td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
</body>
</html>