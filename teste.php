<?php

$conexao = new mysqli("localhost", "root", "0008", "unix");
    if(!$conexao->connect_error){
        $sql = "SELECT * FROM dados";
        $resultado = $conexao->query($sql);
        if($resultado){
            while($linha = $resultado->fetch_assoc()){
                echo 'ID: '.$linha['id'];
                echo "<br>";
                echo 'Nome : '.$linha['nome'];
                echo "<br>";
                echo 'E-mail : '.$linha['email'];
                echo "<br>";
                echo 'mensagem: '.$linha['mensagem'];
                echo "<br>";
                echo 'Data/Hora : '.$linha['data'];
                echo "<br>";

            }
        }else{
            echo "Erro ao listar!";
        }
    }
exit;

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