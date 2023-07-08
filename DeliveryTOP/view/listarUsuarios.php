<?php
  require("../conect/conn.php");

  $tabela = $pdo->prepare("SELECT idusuario, nome, email, endereco, login, senha FROM usuario;");

  $tabela->execute();

  $rowTabela = $tabela->fetchAll();

  if (empty($rowTabela)){
    echo "<script>
        alert('Tabela Está Vazia!')
        </script>";
  };
?>

<!DOCTYPE HTML>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Tabela Usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>

    <body style="background-color: black;">
        <div class="container">
            <h1 style="text-align:center; color: white;">Tabela de Usuarios</h1>
            <table class="table table-dark table-striped">
  ...

  <thead>
    <tr class="retprin" >
      <th class="id" scope="col">Id</th>
      <th class="nome" scope="col">Nome</th>
      <th class="email" scope="col">email</th>
      <th class="email" scope="col">Endereço</th>
      <th class="email" scope="col">Login</th>
      <th class="senha" scope="col">Senha</th>
      <th class="senha" scope="col">Editar</th>
      <th class="senha" scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($rowTabela as $linha){
      echo '<tr>';
      echo "<th class='retid text' scope='row'>".$linha['idusuario']."</th>";
      echo "<td class='retnome text'>".$linha['nome']."</td>";
      echo "<td class='retemail text'>".$linha['email']."</td>";
      echo "<td class='retemail text'>".$linha['endereco']."</td>";
      echo "<td class='retemail text'>".$linha['login']."</td>";
      echo "<td class='retsenha text'>".$linha['senha']."</td>";
      echo '<td class="editar"><a href=edit_usuario.php?idusuario='.$linha['idusuario'].' type="button" class="bnt" value="EDITAR">EDITAR</a></td>';
      echo '<td class="deletar"><a href=../crud/del-usuario.php?idusuario='.$linha['idusuario'].' type="button" class="bnt2">DELETAR</a></td>';
      echo '</tr>';
    }
    ?>
  </tbody>
</table>
<a href="index.php" type="button" class="btn btn-primary float-end">CADASTRO USUARIOS</a>
<a href="index.php" type="button" class="btn btn-primary float-end">PAGINA PRINCIPAL</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
      </body >
</html>