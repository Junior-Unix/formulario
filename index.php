<?php

  if( isset( $_GET['deslogar']) ){
    unset($_COOKIE);
    setcookie("meu-site", "", time() - 3600 * 1000 );
    header('login.php');
  }

  

  if( ! isset( $_COOKIE['meu-site'] ) ){
    header("location: login.php");
  }

  echo 'Você está logado com o usuário: ' . $_COOKIE['meu-site'];
  echo "<br>";
  echo "<a href='?deslogar'>Deslogar</a>";

  if( isset( $_GET ) && ! empty($_GET) ){
    if( isset( $_GET['deletar'] ) ){

      $d = $_GET['deletar'];
      $conexao = new mysqli("localhost", "root", "0008", "unix");

      if( ! $conexao->connect_error ){
          
          $sql = "DELETE FROM dados WHERE id='$d'";
          if(  $conexao->query( $sql ) === TRUE ){
              echo "Deletado o $d com sucesso";
              header("location: ./");
          }else{
              echo "falha ao deletar.";
          }
  
      }else{
          echo "ERRO, ao conectar";
      }


    }else{
      require_once('head.php');
      $a = $_GET['atualizar'];

      $conexao = new mysqli("localhost", "root", "0008", "unix");

      $sql = "SELECT * FROM dados WHERE id='$a'";

      $r = $conexao->query( $sql );

      $ar = $r->fetch_assoc();
            
      require_once('atualizar.php');

      if( isset( $_GET['update']) ){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        $sql = "UPDATE dados SET nome='$nome', email='$email', mensagem='$mensagem' WHERE id='$a'";

        if( $conexao->query( $sql ) === TRUE ){
          header("location: ./");
        }else{
          echo "Falha ao atualizar os dados.";
        }
          
      }

      echo "\n</div>\n</body>\n</html>";
      

      $conexao->close();
      exit;
    }
  }
?>
<?php

require_once('head.php');

  if ( isset( $_POST['enviar'] ) ):
    if ( in_array( NULL, $_POST ) ):
    ?>

      <div class="alert alert-primary text-center" role="alert">
        Algum campo está vazio
      </div>
      <p>
        <a href="./">Voltar</a>
      </p>

<?php else: extract( $_POST ); ?>

<div class="alert alert-success" role="alert">
  <?php require_once("gravar.php"); ?>
</div>



<p>
  <a href="./">Voltar</a>
</p>

<?php endif; else: ?>



    <h1 class="text-center">Formulário de Contato</h1>

    <form action="./" method="post">
      <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
        <label >E-mail</label>
        <input type="text" name="email" class="form-control">
      </div>

      <div class="form-group">
        <label>Mensagem</label>
        <textarea type="text" name="mensagem" class="form-control"></textarea>
      </div>

      <button type="submit" class="btn btn-primary" name="enviar" value="Enviar">Enviar</button>
    </form>

    <?php endif; ?>

    <hr>

    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Identificação</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Mensagem</th>
      <th scope="col">Deletar</th>
      <th scope="col">Atualizar</th>
      
    </tr>
  </thead>
  <tbody>

  <?php
    
    $conexao = new mysqli("localhost", "root", "0008", "unix");

    if( ! $conexao->connect_error ){
        
        $sql = "SELECT * FROM dados";
        $resultado = $conexao->query( $sql );
        while( $ex = $resultado->fetch_assoc() ){

?>
    <tr>
        <td><?php echo $ex['id']; ?></td>
        <td><?php echo $ex['nome']; ?></td>
        <td><?php echo $ex['email']; ?></td>
        <td><?php echo $ex['mensagem']; ?></td>
        <td><a href="?deletar=<?php echo $ex['id']; ?>">X</a></td>
        <td><a href="?atualizar=<?php echo $ex['id']; ?>">→</a></td>
    </tr>

<?php
          }
        }else{
            echo "ERRO, ao conectar";
        }
?>


  </tbody>
</table>

  </div>

</body>
</html>
