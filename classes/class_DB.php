<?php
/**  Banco de Dados  ***/

//Nome do HOST do Banco
define('DB_HOST', 'localhost');
//Nome do Banco
define('DB_NAME','bd_cryptosync');
//User do Banco
define('DB_USER','root');
//senha do Banco
define('DB_PASSWORD', '');
//Chartset da conexão
define('DB_CHARTSET', 'utf8');
//Debug Desenvolvimento
define('DEBUG', true);

class DB {
  private static $instance;
  public static function getInstance(){
    if ( ! isset(self::$instance)) {
      try{
        self::$instance = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';DB_CHARSET',DB_USER,DB_PASSWORD);
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      }catch(PDOException $e){
        echo $e->getMessage();
      }
    }
    return self::$instance;
  }
  public static function prepare($sql){
    return self::getInstance()->prepare($sql);
  }
}