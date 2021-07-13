<?php

class Sql extends PDO{

    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");
    }
//recebe os parametros para serem "bindados"
    private function setParams($statement, $parameters = array()){

        foreach ($parameters as $key => $value){

            $this->setParam($statement,$key,$value);

        }

    }

    private function setParam($statement, $key, $value){

        $statement->bindParam($key,$value);
    }
//recebe e prepara a query para ser executada no banco de dados
    public function rquery($rawQuery, $params = array()){
        
        $stmt = $this->conn->prepare($rawQuery);
        //envia os parametros para serem "bindados"
        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawQuery, $params = array()):array{

        $stmt = $this->rquery($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>