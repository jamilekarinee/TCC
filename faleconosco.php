<?php
    $dbHost = 'LocalHost'; 
    $dbUserName = 'root'; 
    $dbPassword = ''; 
    $dbName = 'aprendats'; 

    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName); 
    if($conexao->connect_errno){
        echo "Erro."
    }
    else{
        echo "Conexão efetuada com sucesso."
    }
?>