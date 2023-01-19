<?php

require "conexaoMysql.php";

$pdo = mysqlConnect();

$CEP = $_POST["cep"] ?? "";
$logradouro = $_POST["logradouro"] ?? "";
$bairro = $_POST["bairro"] ?? "";
$cidade = $_POST["cidade"] ?? "";
$estado = $_POST["estado"] ?? "";



try {

    
    $sql = <<<SQL
    INSERT INTO endereco (cep,logradouro,bairro,cidade,estado)
    VALUES (?,?,?,?,?);
    SQL;  
  
    
  
  
  
  
    //USANDO PREPARE STATEMENTS - ARRUMADO PARA EVITAR SQL INJECTIONS
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$CEP,$logradouro,$bairro,$cidade,$estado]);

  } 
  catch (Exception $e) {  
    exit('Falha ao cadastrar os dados: ' . $e->getMessage());
  }

?>



    

    


