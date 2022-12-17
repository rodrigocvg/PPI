<?php

    $usuario = $_POST["usuario"];
    $senha = password_hash($_POST["senha"],PASSWORD_DEFAULT);

    function salvaString($string, $arquivo){
    $arq = fopen($arquivo, "w");
    fwrite($arq, $string);
    fclose($arq);
    }

    function carregaString($arquivo){
    $arq = fopen($arquivo, "r");
    $string = fgets($arq);
    fclose($arq);
    return $string;
    }

    salvaString($usuario, "email.txt");
    salvaString($senha, "senhaHash.txt");

    $usuario = htmlspecialchars(carregaString("email.txt"));
    $senha = htmlspecialchars(carregaString("senhaHash.txt"));

    echo "Dados salvos com sucesso!";

    echo <<<HTML
    <table> 
        <tr>
            <td> Email: $usuario </td> <br>
            <td> Senha: $senha </td>
        </tr>
    </table>

HTML;
    

?>