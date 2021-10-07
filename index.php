<?php 
  if(isset($_GET) && !empty($_GET)){
    if(isset($_GET['deletar'])){
      echo "DELETE A LINHA: " . $_GET['deletar'];
      $d = $_GET['deletar'];
      $conexao = new mysqli("localhost", "root", "0008", "unix");

        if(!$conexao->connect_error){

          $sql = "DELETE FROM dados WHERE id='$d'";
            if($conexao->query($sql) === TRUE){
              echo "Deleted $d com sucesso!";
              header("location: .\\");
            }else{
              echo "Falha ao deletar $d!";
        }
        }else{
          echo "Erro ao conectar!";
        }       
        }else{
                echo "ATUALIZE A LINHA: " . $_GET['atualizar'];
              }
    }
?>


    <?php require_once('head.php');

if(isset($_POST['enviar'])):
    if(in_array(NULL, $_POST)):
?>
        <div class="alert alert-primary text-center" role="alert">
          Algum campo está vazio!
        </div>
        <p>
          <a href="/">Voltar</a>
        </p>
<?php else: extract($_POST); ?>

<div class="alert alert-success" role="alert">
  <?php require_once("gravar.php"); ?>
</div>

              <p>
                <a href="/">Voltar</a>
              </p>
            

<?php endif; else: ?>


    <h1 class="text-center">Formulário de Contado</h1>
      <form action="/" method="post">
      <div class="form-group">  
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" aria-describedby="emailHelp">
      </div>

      <div class="form-group">  
        <label>E-mail</label>
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
  </div>
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
    if(!$conexao->connect_error){
      $sql = "SELECT * FROM dados";
      $resultado = $conexao->query($sql);
        if($resultado){
          while($ex = $resultado->fetch_assoc()){
?>

  <tr>
    <td><?php echo $ex['id']; ?></td>
    <td><?php echo $ex['nome']; ?></td>
    <td><?php echo $ex['email']; ?></td>
    <td><?php echo $ex['mensagem']; ?></td>
    <td><a href="?deletar=<?php echo $ex['id']; ?>">x</a></td>
    <td><a href="?atualizar=<?php echo $ex['id']; ?>">-></a></td>
  </tr>

<?php
    }
      }else{
        echo "Erro ao listar!";
      }
    }
?>

  </tbody>
  </table>   

  </body>
</html>