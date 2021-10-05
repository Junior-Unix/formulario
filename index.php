<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta chatset="utf-8">
        <title>Formulário de Contato</title>
    </head>
    <body>
        <h1>Formulário de Contato</h1>
        <form action="recebe.php" method="post">
            Nome: <input type="text" name="nome"><br>
            E-mail: <input type="text" name="email"><br>
            Mensgem: <br><textarea name="mensagem" rows="8" cols="80"></textarea>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>    
    </body> 
</html>