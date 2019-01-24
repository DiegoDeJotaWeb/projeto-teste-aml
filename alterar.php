<?php
require_once 'superior.php';


$codigo = $_GET['cod'];
?>
<div class="container">


    <div class="titulo">
        <h1>CADASTRO DE CLIENTE</h1>
    </div>
    <form class="form-inline my-4" action="_alterar.php" method="POST">

        <div class="input-group mb-2  col-md-6">
            <input type="text" class="form-control mb-2 mr-sm-2" name="nome" placeholder="Nome do cliente">
        </div>

        <div class="input-group mb-2  col-md-6">
            <div class="input-group-prepend">
                <div class="input-group-text">@</div>
            </div>
            <input type="text" class="form-control" placeholder="Email do cliente" name="email">
        </div>

        <div class="input-group mb-2  col-md-6">
            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Endereço do cliente" name="endereco">
        </div>

        <div class="input-group mb-2  col-md-6">
            <input type="date" class="form-control mb-2 mr-sm-2" placeholder="" name="dataCadastro">
        </div>

        <input type="hidden" name="codigo" value='<?php echo $codigo?>'>

        <button type="submit" class="btn btn-primary mb-2" name="alterar">ALTERAR</button>
    </form>
    <?php require_once 'inferior.php'; ?>
