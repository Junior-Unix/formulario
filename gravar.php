<?php
/*                 if(file_exists("dados.txt")){
                  $texto = "$nome;$email;$mensagem\n";
                  $fb = fopen("dados.txt", "a+");
                  fwrite( $fb, $texto, strlen($texto));
                  fclose($fb);
                }else{
                  echo "Não existe.";
                } */

/////////////////////////////////////////////////////////
$conexao = new mysqli("localhost", "root", "0008", "unix");

  if(!$conexao->connect_error){
      $sql = "INSERT INTO dados (id, nome, email, mensagem, data) VALUES (NULL, '$nome', '$email', '$mensagem', NOW())";
           if($conexao->query($sql) === TRUE){
              echo "Inseridos.";
          }else{
              echo "Erro ao conectar/inserir dados!";
      }
  }
?>