<?php
class Database{
    protected $pdo;
    protected static $_instance;
    
    /**
     * constructor function
     */
    protected function __construct(){

        
        $dbname = "bookstores";
        $username = "root";
        $password = "";
        try{
            $this->pdo = new PDO("mysql:host=localhost;dbname=$dbname",$username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    
    /**
     * returns pdo object as a connection resource
     * @return $this->pdo
     */
    public function getConnection(){
        return $this->pdo;
    }
    
    /**
     * Returns a static instance of the class
     * @return $_instance
     */    
    public static function getInstance(){
        if(null === self::$_instance){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}
?>