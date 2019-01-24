<?php   
         include("conecta.php");  
          
            $i = 0;
        
            
            foreach ($_FILES["arquivos"]["error"] as $key => $error){
           
           
            $destino = "csv/" . $_FILES["arquivos"]["name"][$i];
        
           
            move_uploaded_file( $_FILES["arquivos"]["tmp_name"][$i], $destino );
       }
           
            $nome_arquivo = $_FILES["arquivos"]["name"][$i];

            $objeto = fopen($destino, 'r');
echo $objeto;

            $con = PdoConexao::getInstancia();
            while(($dados = fgetcsv($objeto, 1000, ",")) !== FALSE){
               $sql = "insert into cliente(nomeCliente,emailCliente,enderecoCliente,dataCadastroCliente,)values('$dados[0]','$dados[1]'),'$dados[2]','$dados[3]'";
    echo $sql . '<br>';
    
$con->query($sql);

            }
            fclose($objeto);
           header('Location: index.php');

        ?>
        
       