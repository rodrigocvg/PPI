<?php


    require "conexaoMysql.php";
    $pdo = mysqlConnect();
    
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

  $hashSenha = password_hash($senha,PASSWORD_DEFAULT);
   


    try {

    
    $sql = <<<SQL
    INSERT INTO usuario (email,senha)
    VALUES (?,?);
    SQL;  
  
    
  
    //USANDO PREPARE STATEMENTS - ARRUMADO PARA EVITAR SQL INJECTIONS
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$usuario,$hashSenha]);

  } 
  catch (Exception $e) {  
    exit('Falha ao cadastrar os dados: ' . $e->getMessage());
  }
    

?>