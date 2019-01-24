<?php
class PdoConexao {
    private static $instancia;
   
   
    private function __construct() { }
   
    private function __clone() { }
   
   
    private function __wakeup() { }
   
    /**
    *
    * @return object PDO connection
    *
    */
    public static function getInstancia() {
        if(!isset(self::$instancia)) {
             try {
                 $dsn = "mysql:host=localhost;dbname=aml_testePHP_2018";
                 $usuario = "aml_devteste";
                 $senha = "aml_devtest2018"; 
                 
               
                 self::$instancia = new PDO( $dsn, $usuario, $senha );
                 
                 self::$instancia->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
             
             } catch ( PDOException $excecao ){
                 echo $excecao->getMessage();
                 
                 exit();
             }
         }
         return self::$instancia;
        }
   }