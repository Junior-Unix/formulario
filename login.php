<?php require_once('head.php'); ?>

<?php

    if( isset( $_COOKIE['meu-site'] ) ){
        header("location: ./");
    }

    if( isset($_POST['logar']) ){
        $user = 'root@root.org';
        $pass = '0008';

        if( $_POST['usuario'] == $user && $_POST['senha'] == $pass ){
            
            setcookie("meu-site", "$user", time() + 3600 );

            header('location: ./');
        }else{
            echo "Falha ao logar.";
        }
    }
?>

<form method="post" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Coloque seu nome de usuário</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Coloque sua senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
  </div>
  <button type="submit" class="btn btn-primary" name="logar">Logar</button>
</form>

<hr>
<a href="login.php">Recarregar página</a>

</div>
</body>
</html>