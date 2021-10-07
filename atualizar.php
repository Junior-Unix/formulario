<h1 class="text-center">Formulário de Contado</h1>
      <form action="?atualizar=<?php echo $ar['id']; ?>&update=1" method="post">
      <div class="form-group">  
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" aria-describedby="emailHelp" value="<?php echo $ar['nome']; ?>">
      </div>

      <div class="form-group">  
        <label>E-mail</label>
        <input type="text" name="email" class="form-control" value ="<?php echo $ar['email']; ?>">
      </div>

      <div class="form-group">  
        <label>Mensagem</label>
        <textarea type="text" name="mensagem" class="form-control"><?php echo $ar['mensagem']; ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary" name="atualizar" value="Enviar">Atualizar</button>
      </form>
