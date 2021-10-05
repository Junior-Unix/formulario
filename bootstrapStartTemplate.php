<?php

if(isset($_POST['enviar'])){
    if(empty($_POST['nome'])){
        echo"Preencha seu nome";
    }elseif(empty($_POST['email'])){
        echo "Preencha seu e-mail.";
    }elseif(empty($_POST['mensagem'])){
        echo "Preencha sua mensagem";
    }else{
            echo "Seu nome é:{$_POST['nome']}<br>";
            echo "Seu e-mail é:{$_POST['email']}<br>";
            echo "Sua mensagem é:{$_POST['mensagem']}<br>";
        }
 }else{
    echo "Pela barra de endereço";
}

?>