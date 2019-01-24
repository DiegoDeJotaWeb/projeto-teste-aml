<?php
require_once 'Cliente.php';


class DAO {

	public static function gravarCliente(Cliente $c) {
		$cod = $c->getCod();
		$nome = $c->getNome();
		$email = $c->getEmail();
		$endereco = $c->getEndereco();
		$dataCadastro = $c->getDataCadastro();
        
        $con = PdoConexao::getInstancia();
        $sql = "insert into cliente (idCliente, nomeCliente, emailCliente, enderecoCliente, dataCadastroCliente )values('$cod','$nome','$email','$endereco','$dataCadastro')";
        $con->query($sql);
        
	}

	public static function apagarCliente($cod) {
        $con = PdoConexao::getInstancia();
     
		$sql = "delete from cliente where idCliente = $cod";
       
		$con->query($sql);
	}

	public static function atualizarCliente(Cliente $c) {
		$cod = $c->getCod ();
		$nome = $c->getNome ();
		$email = $c->getEmail ();
		$endereco = $c->getEndereco ();
		$dataCadastro = $c->getDataCadastro ();
        
//        $hora = $dataCadastro;
//        $hora = date('Y-m-d H:i:s');
        
        $con = PdoConexao::getInstancia();
        
		$sql = "update cliente set nomeCliente = '$nome', emailCliente='$email' , enderecoCliente='$endereco', dataCadastroCliente='$dataCadastro' where idCliente= '$cod'";
        
        
        $con->query($sql);
		
	}
    
    public static function mostrarCliente() {
		
        $con = PdoConexao::getInstancia();
        
        
		$sql = "select * from cliente";
        
        $busca = $con->query($sql);
        echo '
        <div class="container">
        <table class="table table-dark">
           <tr>
           <td>Cliente</td>
           <td>Email</td>
           <td>Endereço</td>
           <td>Data de cadastro</td>
           <td>Apagar</td>
           <td>Alterar</td>
           </tr>';
        
      while($row = $busca->fetch(PDO::FETCH_ASSOC)) {
         echo '
         
           <tr>
           
           <td>' .$row['nomeCliente'].  '</td>
           
           <td>'. $row['emailCliente'] . ' </td>
           
           <td>'. $row['enderecoCliente'] . ' </td>
           <td>' . $row['dataCadastroCliente'] . ' </td>
           
           
           <td>'. '<a href="apagar.php?cod='.$row['idCliente'].'">APAGAR</a> </td>
           
           
           
           <td><a href="alterar.php?cod='.$row['idCliente'].'">ALTERAR</a></td>';
          
   }
        
        echo '</table></div>';
		
	   }
    
    
}


