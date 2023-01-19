<?php

require "../conexaoMySql.php";
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

try{
  $sql = <<<SQL
      SELECT cep, rua, bairro, cidade 
      FROM enderecoT8
  SQL;

  $stmt = $pdo->query($sql);


  while($row = $stmt->fetch()){
		$enderecos[$row['cep']] = new Endereco($row['rua'], $row['bairro'], $row['cidade']);
	}



}catch(Exception $e){
  exit("Ocorreu uma falha: " . $e->getMessage());
}

$cep = $_GET['cep'];
$endereco = array_key_exists($cep, $enderecos) ? 
	  $enderecos[$cep] : new Endereco('', '', '');
	  
	echo json_encode($endereco);


  ?>