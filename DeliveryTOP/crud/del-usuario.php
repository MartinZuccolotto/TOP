<?php

    require('../conect/conn.php');

    if(isset($_GET['idusuario'])){
        $idusuario = $_GET['idusuario'];
    }else{
        header("Location: ../view/login.php");
    }
    
    $del_usuario = $pdo->prepare('DELETE from usuario where idusuario = :idusuario;');
    $del_usuario->execute(array(':idusuario'=>$idusuario));

    echo "<script>
        alert('Usuario Deletado!')
        window.location.href='../view/listarUsuarios.php'
        </script>";
?>