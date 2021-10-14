<?php

    try {
        $conexao = new PDO("mysql:host=localhost;dbname=mysql", "root", "0008");
        echo "Conectado";
    }catch( PDOException $e ){
        $fb = fopen("erros.log", "a+");
        fwrite( $fb, "$e" );
        fclose( $fb );
        die("Não conectado");
    }
    
?>