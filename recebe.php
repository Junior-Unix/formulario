<?php

if(empty($_POST['nome'])){
    echo "Ela está vazia";
}else{
    echo "Não está vazia";
    echo '<br>';
}


    echo $_POST['nome'];
    echo'<br>';
    echo $_POST['email'];
    echo'<br>';
    echo $_POST['mensagem'];

?>