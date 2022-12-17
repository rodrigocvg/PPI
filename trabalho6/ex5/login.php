<?php

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    function carregaString($arquivo){
    $arq = fopen($arquivo, "r");
    $string = fgets($arq);
    fclose($arq);
    return $string;
    }

  
    function validaEmail($email,$email2){
        if($email==$email2){
        return true;
        }
        else{
        return false;
        }
    }


    $usuarioBD = carregaString("email.txt");
    $senhaBD =carregaString("senhaHash.txt");
    
    
    
    if(password_verify($senha,$senhaBD)and validaEmail($usuarioBD,$usuario)){
        header("Location: novapagina.php");
        exit();
    }
    else{
        echo "Dados incorretos, login não efetuado";
    } 
    

    
    

?>