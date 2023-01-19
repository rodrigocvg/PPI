<?php

require "conexaoMysql.php";
$pdo = mysqlConnect();


class Endereco
{
  public $rua;
  public $bairro;
  public $cidade;

  function __construct($rua, $bairro, $cidade)
  {
    $this->rua = $rua;
    $this->bairro = $bairro; 
    $this->cidade = $cidade;
  }
}

try {
  $sql = <<<SQL
  SELECT cep,rua,bairro,cidade
  FROM enderecoT8
  WHERE cep = ?
  SQL;

  // Neste exemplo não é necessário utilizar prepared statements
  // porque não há a possibilidade de injeção de SQL, 
  // pois nenhum parâmetro do usuário é utilizado na query SQL. 
  // Além disso, como há resultados a serem processados, 
  // utilizamos o método query (e não o exec).
  $stmt = $pdo->query($sql);
  
  $cep = $_GET['cep'] ?? '';
  while ($row = $stmt->fetch()) {
    $rua = htmlspecialchars($row['rua']);
    $bairro = htmlspecialchars($row['bairro']);
    $cidade = htmlspecialchars($row['bairro']);

    $endereco = new Endereco($rua, $bairro, $cidade);
  
  
  }
} 
catch (Exception $e) {
  exit('Ocorreu uma falha: ' . $e->getMessage());
}






header('Content-type: application/json');  
echo json_encode($endereco);