<?php
include_once 'connect.php';

class User extends database{
    protected $table = "student";

    //function to add users
public function add(){

    if(!empty($data)){
        $fields = $placeholder = [];
        foreach($data as $field => $value){
            $field[]=$field;
            $placeholder[]=":(field)";
        }
    }
    // $sql = "INSERT INTO {$this->table} (name, dob, details, gender, section)
    // Values(:name, :dob,:details,:gender,:section)";

    $sql = "INSERT INTO {$this->table} (". implode(',', $fields). ") VALUES (". implode(',', $placeholder).")";

    $stmt = $this->conn->prepare($sql);

    try{
        $this->conn->beginTransaction();
        $stmt -> execute($data);
        $lastInsertedId = $this ->conn->lastInsertId();
        $this->conn->commit();
        return $lastInsertedId;


    }catch(PDOException $e){
        echo "Error". $e->getMessage();
        $this->conn->rollback();
    }
}


    //function to get rows



    //function to get single row



    //function to count number of rows
}
?>