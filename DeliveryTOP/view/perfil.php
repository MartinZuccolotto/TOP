<?php
include("../conect/protected.php");
include("../conect/conn.php");
$usuario=$pdo->prepare("SELECT * FROM usuario where idusuario = :idusuario");
$usuario->execute(array(":idusuario"=> $_SESSION['idusuario']));

$resultado = $usuario->fetchAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/perfil.css">
</head>
<body>
    <div>
        <a href="#" id="inicio">Inicio</a>
        <img id="logo" src="../img/logo.png" alt="">
        <hr>
    </div>
    <div>
        <p id="meus-dados">Meus Dados</p>
        <div class="container">
        <div class="informacoes-pessoais">
            <a href="informacoes-pessoais"><p>Informações Pessoais</p> <br>
            <p id="descricao">Nome, CPF e Endereço</p>
            <img src="../img/seta.png" alt="" id="img1" class="img">
            <hr id="hr-informacoes">
            </a>
        </div>
        <div class="config-conta">
            <a href="">
                <p>Configurações da Conta</p>
                <p id="email-e-senha">Email e Senha</p>
                <img src="../img/seta.png" alt="" class="img" id="img2">
                <hr id="hr-conta">
            </a>
        </div>
        </div>
    </div>
</body>
</html>
