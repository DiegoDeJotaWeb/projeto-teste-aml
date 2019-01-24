<?php

require_once 'superior.php';

require_once 'conecta.php';
require_once 'DAO.php';
$cliente = new Cliente();

 

if(isset($_POST['nome'])){
    
$cliente->setCod(0);
$cliente->setNome($_POST['nome']);
$cliente->setEmail($_POST['email']);
$cliente->setEndereco($_POST['endereco']);
$cliente->setDataCadastro($_POST['dataCadastro']);
    
DAO::gravarCliente($cliente);    
    
   echo "<p id='sucesso'>cadastrado com sucesso!</p>";
}
?>

<div class="container">

   
    <div class="titulo">
   <h1>CADASTRO DE CLIENTE</h1>
   </div>
    <form class="form-inline my-4" action="inserir.php" method="POST">
    
     <div class="input-group mb-2  col-md-6" >
  <input type="text" class="form-control mb-2 required mr-sm-2" name="nome" placeholder="Nome do cliente">
</div>
 
  <div class="input-group mb-2  col-md-6">
    <div class="input-group-prepend">
      <div class="input-group-text">@</div>
    </div>
    <input type="email" class="form-control" required  placeholder="Email do cliente" name="email">
  </div>
  
  <div class="input-group mb-2  col-md-6" >
  <input type="text" class="form-control mb-2 mr-sm-2" required  placeholder="Endereço do cliente" name="endereco">
</div>
  
  <div class="input-group mb-2  col-md-6" >
  <input type="date" class="form-control mb-2 mr-sm-2" required  placeholder="" name="dataCadastro">
</div>

  

  <button type="submit" class="  btn btn-primary mb-2">CADASTRAR</button>
</form>
    
<div class="titulo">
   <h3>CADASTRO DE CLIENTE COM ARQUIVO CSV</h3>
   </div>
   
    <fieldset>
        <br />
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <input type='file' name="arquivos[]" required />
            <br />
            <input type="submit" name="Enviar" />
        </form>
    </fieldset>
    <br />


</div>



<?php require_once 'inferior.php'; ?>
