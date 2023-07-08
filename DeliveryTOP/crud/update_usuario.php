<?php
    require("../conect/conn.php");

    $idusuario = $_POST['idusuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    if(empty($idusuario) || empty($nome) || empty($email) || empty($senha)){
        echo "Voce precida preencher todos os campos";
    }else{
        $update_usuario = $pdo->prepare('UPDATE usuario set nome = :nome, email = :email, 
        senha = :senha where idusuario = :idusuario');


        $update_usuario->execute(array(
            ':idusuario' => $idusuario,
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => $senha

        ));
    }

?>