<?php

require "../conexaoMySql.php";
$pdo = mysqlConnect();
$cpf = $_GET['cpf'];

try{
    $sql = <<<SQL
    delete from cliente where cpf = ?
    limit 1
    SQL;

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$cpf]);


    header("location: mostra-clientes.php");
    exit();

}catch (Exception $e) {
    exit('Ocorreu uma falha: ' . $e->getMessage());
  }




?>