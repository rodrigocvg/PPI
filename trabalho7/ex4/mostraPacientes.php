<?php

require "conexaoMysql.php";
$pdo = mysqlConnect();

try {
  $sql = <<<SQL
  SELECT nome,sexo,email,telefone,cep,logradouro,cidade,estado
  FROM pessoa
  SQL;


  $sql2 = <<<SQL
  SELECT peso,altura,tipoSanguineo,codigo
  FROM paciente

  SQL;

  // Neste exemplo não é necessário utilizar prepared statements
  // porque não há a possibilidade de injeção de SQL, 
  // pois nenhum parâmetro do usuário é utilizado na query SQL. 
  // Além disso, como há resultados a serem processados, 
  // utilizamos o método query (e não o exec).
  $stmt = $pdo->query($sql);
  $stmt2 = $pdo->query($sql2);
} 
catch (Exception $e) {
  exit('Ocorreu uma falha: ' . $e->getMessage());
}



?>
<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <!-- 1: Tag de responsividade -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pacientes cadastrados</title>

  <!-- 2: Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    body {
      padding-top: 2rem;
    }
    img {
      width: 20px;
    }
  </style>  
</head>

<body>

  <div class="container">
    <h3>Usuários Cadastrados</h3>
    <table class="table table-striped table-hover">
      <tr>
        <th></th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>CEP</th>
        <th>Logradouro</th>
        <th>Estado</th>
        <th>Logradouro</th>
        <th>Peso</th>
        <th>Altura</th>
        <th>Tipo Sanguineo</th>
      </tr>

      <?php
      while ($row = $stmt->fetch()) {

        // Limpa os dados produzidos pelo usuário
        // com possibilidade de ataque XSS
        // antes de inserí-los na página HTML
        $nome = htmlspecialchars($row['nome']);
        $sexo = htmlspecialchars($row['sexo']);
        $email = htmlspecialchars($row['email']);
        $telefone = htmlspecialchars($row['telefone']);
        $cep = htmlspecialchars($row['cep']);
        $logradouro = htmlspecialchars($row['logradouro']);
        $estado = htmlspecialchars($row['estado']);
        
       


        echo <<<HTML
          <tr>
            <td>
              <a href="exclui-cliente.php?cpf=$cpf">
                <img src="delete.png">
              </a>
            </td> 
            <td>$nome</td> 
            <td>$sexo</td>
            <td>$email</td>
            <td>$telefone</td>
            <td>$cep</td>
            <td>$logradouro</td>
            <td>$estado</td>
               
        HTML;

        while ($row = $stmt2->fetch()) {
            $peso = htmlspecialchars($row['peso']);
            $altura = htmlspecialchars($row['altura']);
            $tiposanguineo = htmlspecialchars($row['tipoSanguineo']);

              echo <<<HTML
                <td>$peso</td> 
                <td>$altura</td>
                <td>$tiposanguineo</td>
            </tr> 
            HTML;
          }
      }
      
      ?>

    </table>
    <a href="index.html">Menu de opções</a>
  </div>

</body>

</html>