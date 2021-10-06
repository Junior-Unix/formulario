<?php


if(file_exists("dados.txt")){
    $texto = "Junior-Unix\n";
    $fb = fopen("dados.txt", "a+");
    fwrite( $fb, $texto, strlen($texto));
    fclose($fb);
}else{
    echo "Não existe.";
}

?>