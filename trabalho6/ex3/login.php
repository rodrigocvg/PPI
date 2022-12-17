<?php

    $usuario = $_POST["usuario"];
    $senha = password_hash($_POST["senha"],PASSWORD_DEFAULT);

    function salvaString($string, $arquivo){
    $arq = fopen($arquivo, "w");
    fwrite($arq, $string);
    fclose($arq);
}
    
    salvaString($usuario, "email.txt");
    salvaString($senha, "senhaHash.txt");

    echo "Dados salvos com sucesso!";

?>