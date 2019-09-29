<?php

class config {

private $servername = "localhost";
private $dbname="project";
private $username = "root";
private $password = "Raghad.997";
public  $conn ;


public function __construct(){

    try {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password );
        return $this->conn;

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "";
        die();
    }

  }
}

?>