<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
  </head>
  <body>

    <div>
        <img id="logo" src="../img/Group 1.png" alt="">
    </div>
    <div id="meia_lua">
        <img id="balao_de_fala" src="../img/Group 4.png" alt=""> 
        <img id="mascote" src="../img/alface 1.png" alt="">
        <p id="frase">Seja muito bem-vindo!</p>
    </div>
    <div id="div_form">
    <form action="../crud/cad-usuario.php" method="post">
        <div id="tela_cadastro">
            <div>
                <label style="left:63px; top:43px;" id="textos"  for="">Nome completo:</label>
                <input class="input" style="left:40px; top:77px;" id="barras" type="text" name="nome">
            </div>
            <br>
            <div>
                <label style="left:63px; top:151px;" id="textos" for="">Email:</label>
                <input class="input input-mudar-cor" style="left:40px; top:181px;" id="barras" type="email" name="email">
            <br>
            <div>
                <label style="left:63px; top:258px;" id="textos" for="">Endereço:</label>
                <input class="input" style="left:40px; top:288px;" id="barras" type="text" name="endereco">
            </div>
            <br>
            <div>
                <label style="left:63px; top:364px;" id="textos" for="">Login:</label>
                <input class="input" style="left:40px; top:395px;" id="barras" type="text" name="login">
            </div>
            <br>
            <div>
                <label style="left:63px; top:478px;" id="textos" for="">Senha:</label>
                <input class="input" style="left:40px; top:509px;" id="barras" type="password" name="senha">
            </div>
            <br>
            <button type="submit" id="cadastrar">Cadastrar</button>
            <a  id="link" href="login.php">Ja tenho uma conta.</a>
        </div>
    </form>
    </div>
  </body>
  <script src="../JS/cadastro.js"></script>
</html>