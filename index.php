<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta chatset="utf-8">
        <title>Formulário de Contato</title>
    </head>
    <body>
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
        <h1>Formulário de Contato</h1>
        <form action="/" method="post">
            Nome: <input type="text" name="nome"><br>
            E-mail: <input type="text" name="email"><br>
            Mensgem: <br><textarea name="mensagem" rows="8" cols="80"></textarea>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>    
    </body> 
</html>