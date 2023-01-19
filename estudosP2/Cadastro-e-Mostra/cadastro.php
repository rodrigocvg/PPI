<?php

require "../conexaoMySql.php";
$pdo = mysqlConnect();

$nome = $_POST["nome"] ?? "";
$cpf = $_POST["cpf"] ?? "";
$email = $_POST["email"] ?? "";
$senha = $_POST["senha"] ?? "";
$altura = $_POST["altura"] ?? "";
$estadocivil = $_POST["estadocivil"] ?? "";
$datanascimento = $_POST["datanascimento"] ?? "";


$hashsenha = password_hash($senha, PASSWORD_DEFAULT);

try {

  $sql = <<<SQL
  -- Repare que a coluna Id foi omitida por ser auto_increment
  INSERT INTO cliente (nome, cpf, email, hash_senha, 
                       data_nascimento, estado_civil, altura)
  VALUES (?, ?, ?, ?, ?, ?, ?)
  SQL;

  
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$nome, $cpf, $email, $hashsenha, $datanascimento, $estadocivil, $altura]);

  header("location: mostra-clientes.php");
  exit();
} 
catch (Exception $e) {  
  //error_log($e->getMessage(), 3, 'log.php');
    echo 'Falha ao cadastrar os dados: ' . $e->getMessage();
}
