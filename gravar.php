<?php


if(file_exists("dados.txt")){
    $fb = fopen("dados.txt", "a+");
    fwrite( $fb, "Junior-Unix\n");
    fclose($fb);
}else{
    echo "Não existe.";
}

?>