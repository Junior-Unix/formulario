<?php

$conexao = new mysqli("localhost", "junior", "0008");

if($conexao){
    echo "Conectado";
}else{
    echo "Erro ao conectar!";
}


?>