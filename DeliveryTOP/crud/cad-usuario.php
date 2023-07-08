<?php
    include ('../conect/conn.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if(empty($nome) ||empty($email) ||empty($endereco) ||empty($login) || empty($senha)){
        echo "Voce precisa preencher todos os campos";

    }   else    {
        try{
        $cad_usuario = $pdo->prepare('INSERT INTO usuario (nome, email, endereco, login, senha) values (:nome, :email, :endereco, :login, :senha)');
        $cad_usuario->execute(array(
            ':nome'=>$nome,
            ':email'=>$email,
            'endereco'=>$endereco,
            ':login'=>$login,
            ':senha'=>$senha
        )
        );
        
        echo "<script>
        alert('Usuario Cadastrado!')
        window.location.href='../view/login.php'
        </script>";
        } catch (Exception $e){
            //echo "Erro";   
            echo $e->getMessage();
           /* echo "<script>
            alert('Usuario já em uso!')
            window.location.href='../view/cadastro.php'
            </script>"; */
        }
    }

?>
