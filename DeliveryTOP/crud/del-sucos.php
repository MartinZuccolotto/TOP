<?php

require('../conect/conn.php');

if (isset($_GET['idsucos'])) {
    $idsucos = $_GET['idsucos'];
    
    $del_sucos = $pdo->prepare('DELETE FROM sucos WHERE idsucos = ?;');
    $del_sucos->execute([$idsucos]);

    if ($del_sucos->rowCount() > 0) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Nenhum registro foi excluído.";
    }
} else {
    echo "O parâmetro 'idimagens' não foi fornecido.";
}


?>
