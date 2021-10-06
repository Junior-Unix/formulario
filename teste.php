<?php

$conexao = new mysqli("localhost", "root", "0008", "unix");

if(!$conexao->connect_error){
    
    $sql = "INSERT INTO dados (id, nome, email, data) VALUES (NULL, 'Yo', 'yo@oy.go', NOW())";
    
        if($conexao->query($sql) === TRUE){
            echo "Inseridos.";
        }else{
            echo "Erro ao conectar/inserir dados!";
    }
}


?>