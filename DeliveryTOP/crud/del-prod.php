<?php

require('../conect/conn.php');

if (isset($_GET['idimagens'])) {
    $idimagens = $_GET['idimagens'];
    
    $del_prod = $pdo->prepare('DELETE FROM pratos WHERE idimagens = ?;');
    $del_prod->execute([$idimagens]);

    if ($del_prod->rowCount() > 0) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Nenhum registro foi excluído.";
    }
} else {
    echo "O parâmetro 'idimagens' não foi fornecido.";
}


?>
