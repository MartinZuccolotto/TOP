<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>

  </head>
  <body>
    <div>
      <img id="mascote" src="../img/alface 1.png" alt="">
    </div>
    
    <div id="meia_lua"> 
        <img id="entrega" src="../img/entrega 1.png" alt="">
    </div>
    <div id="div_form">
    <form action="../conect/logar.php" method="post">
        <div id="tela_login">
            <div>
                <img id="folhas" style="left: 310px; top: 55px;" src="../img/folha 4.png" alt="">
                <img id="folhas" style="left: 64px; top: 38px;;" src="../img/folha 5.png" alt="">
                <p id="salafit">SALAFIT</p>
            </div>
            <div>
                <label style="top:86px; left: 75px;"  id="login_senha" for="">login:</label>
                <input style="top:126px; left: -38px" id="barra_login_senha" type="text" name="login">
                <div></div>
                <div class="erro" id="loginInvalido">Login Inválido</div>
            </div>
            <br>
            <div>
                <label style="top:127px; left: 75px;" id="login_senha" for="">senha:</label>
                <input style="top:131px; left: 52px" id="barra_login_senha" type="password" name="senha">
                <div class="erro">Senha Inválida</div>
            </div>
            <button type="submit" id="logar">Logar</button>
            <br>
            <a style="top: 356px; bottom: 159px;position: absolute;right: 200;left: 78px;" href="cadastro.php">Criar conta</a>
        </div>
    </form>
    </div>
  </body>

    <script type="text/javascript" src="login.js"></script>

</html>