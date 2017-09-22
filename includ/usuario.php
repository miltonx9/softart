<form>
  <div class="form-group">
    <label for="xxx">Nome</label>
    <input type="text" class="form-control" id="xxx" aria-describedby="xx" placeholder="Digite seu nome" required >
    <small id="" class="form-text text-muted">Digite seu nome completo</small>
  </div>

    <div class="form-group">
    <label for="xxx">Nascimento</label>
    <input type="date" class="form-control" id="xxx" aria-describedby="xxx" placeholder="Digite data nascimento" required>
    <small id="" class="form-text text-muted">Digite data nascimento 00/00/0000</small>
  </div>
      <div class="form-group">
    <label for="xxx">Telefone</label>
    <input type="tel" class="form-control" id="xxx" aria-describedby="xx" placeholder="Digite número telefone" required onkeypress="formatar(this,'(00)00000-0000')"  maxlength="14" name="fone" >
    <small id="" class="form-text text-muted">Digite código de area e o número do telefone</small>
  </div>

  
  
  <div class="form-group">
    <label for="xxx">E-mail</label>
    <input type="email" class="form-control" id="xxx" aria-describedby="xxx" placeholder="Digite seu E-mail" required>
    <small id="" class="form-text text-muted">Não compartilharemos seu email com ninguém.</small>
  </div>
  

  
  <div class="form-group">
    <label for="xxx">Senha</label>
    <input type="password" class="form-control" id="xxx" placeholder="Digite sua senha" required>
    <small id="" class="form-text text-muted">Digite uma senha que recordará com facilidade.</small>
  </div>
  
    <div class="form-group">
    <label for="xxx">Confirme a Senha</label>
    <input type="password" class="form-control" id="xxx" placeholder="Confirme sua senha" required>
    <small id="" class="form-text text-muted">Confirme a senha digitada acima.</small>
  </div>

 
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>