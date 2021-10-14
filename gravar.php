<?php
    $conexao = new mysqli("localhost", "root", "0008", "unix");

    if( ! $conexao->connect_error ){

        if( !isset( $nome ) || empty($nome) ){
            header("location: ./");
            exit;
        }
        
        $sql = "INSERT INTO dados (id, nome, email, mensagem, data) VALUES (NULL, '$nome', '$email', '$mensagem', NOW())";
        if(  $conexao->query( $sql ) === TRUE ){
            echo "Dados inseridos com sucesso";
            header("location: ./");

        }else{
            echo "falha ao inserir dados";
        }

    }else{
        echo "ERRO, ao conectar";
    }
?>