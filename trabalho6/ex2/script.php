<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <?php
    

	$vetor = ["sabão omo","arroz vasconselos","bolacha bono","feijão jorge","chocolate lacta","fio dental colgate","hamburger texas","goma de mascar","tempero sabor","shampoo J&J"];
    $desc = ["saão em pó 500g", "arroz tipo extra fino 1 kg", "bolacha bono 130g chocolate", "feijao preto 500g", "chocolate em barra 500g", "fio dental 10 metros colgate", "hamburguer texas 500g pacote", "goma de mascar sabor morango", "tempero 350g apimentado", "shampoo Jhons & Jhonsons anti-caspa para crianças"];

    $qde = $_GET["qde"];
    echo $qde; ?>

    
    <table class="table">
    <thead>
    <tr>
        <th scope="col">Numero</th>
        <th scope="col">Nome Produto</th>
        <th scope="col">Descrição</th>
        </tr>
    </thead>

    <tbody>

       

    
    <?php
    while($qde!=0){
        $rand = rand(0, 9);
        echo <<<HTML
            <tr>
                <th> $rand </th>
                <th> $vetor[$rand] </th>
                <th> $desc[$rand] </th>
            </tr>
        HTML;
        $qde = $qde-1;
    }
    
    ?>

</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>

</html>
