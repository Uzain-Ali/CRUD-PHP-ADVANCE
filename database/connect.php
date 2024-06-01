<?php
class database
{
    private $server="localhost";
    private $username="root";
    private $password=null;
    private $database="institute";

    protected $conn;


    //constructor
    public function __construct(){
        try{       
             $dsn = "mysql:host={$this->server}; dbname={$this->database}; charset=utf8";
        $options = array(PDO::ATTR_PERSISTENT);
        $this-> conn = new PDO($dsn, $this->username,$this->password, $options);
        }catch(PDOException $e){
            echo "Connection Error". $e->getMessage();
        }

    }

}
?>