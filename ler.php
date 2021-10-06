<table border="1">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Mensagem</th>
    </tr>
<?php


if(file_exists("dados.txt")){
    $fp = fopen("dados.txt", "r");
    $i = 1;
    while(!feof($fp)){
        $linha_atual = fgets($fp);
        if(!empty($linha_atual)){
            $ex = explode(";", $linha_atual); 
            
            ?>
  
                <tr>
                    <td><?php echo $ex[0]; ?></td>
                    <td><?php echo $ex[1]; ?></td>
                    <td><?php echo $ex[2]; ?></td>

                </tr>
            <?php          
        }

    }

    fclose($fp);
}else{
    echo "Não existe!";
}



?>
</table>