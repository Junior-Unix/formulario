<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
   
    <title>Formulário de Contato</title>
  </head>
  <style media="screen">
    body{background: #504477; color: #FFF;}
    .container {padding-top: 20px;}
  </style>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
   
  </body>
  <div class="container">
    <?php

if(isset($_POST['enviar'])){
    if(in_array(NULL, $_POST)){
      echo "Algum campo está vazio";
    }
    }else{
/*             echo "Seu nome é:{$_POST['nome']}<br>";
            echo "Seu e-mail é:{$_POST['email']}<br>";
            echo "Sua mensagem é: <pre>{$_POST['mensagem']}</pre>"; */
?>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Identificação</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Mensagem</th> 
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><?php echo $_POST['nome']?></td>
                    <td><?php echo $_POST['email']?></td>
                    <td>
                      <pre><?php echo $_POST['mensagem']?></pre>
                    </td>
                  </tr>
                </tbody>
              </table>

              <p>
                <a href="/">Voltar</a>
    </p>
            

<?php


          }
 }else{
?>


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

<!--       <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">  
        <label class"form-check-label" for="exampleCheck1">Enviar</label>
      </div> -->
      <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
      </form>


<?php
  
}

?>
</div>
    

  </body>
</html>