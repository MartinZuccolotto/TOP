<?php
/*$pdo = new PDO('mysql:host=localhost;dbname=salafit;','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("SET CHARACTER SET utf8");*/
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=salafit;port=3306','root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("SET CHARACTER SET utf8");
    }catch(PDOException $error){
        echo "Error".$error->getMessage();
    }   

?>