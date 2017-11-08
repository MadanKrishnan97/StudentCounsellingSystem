<?php
class Database
{
    private static $dbName = 'crud_tutorial' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'madan';
    private static $dbUserPassword = '1111';
     
    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
          $createvar = "CREATE TABLE  `customers` (
            `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
            `name` VARCHAR( 100 ) NOT NULL ,
            `email` VARCHAR( 100 ) NOT NULL ,
            `mobile` VARCHAR( 100 ) NOT NULL
            ) ENGINE = INNODB;";
        $cont->query($createvar);
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>
        