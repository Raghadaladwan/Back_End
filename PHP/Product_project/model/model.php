<?php
class Model{
    private $db_name = "products";
    public $name;
    public $description;
    public $category_id;
    public $price;
    public $timestamp;
    private $conn;

    public  function __construct($conn)
    {
        $this->conn= $conn;
    }

    public function addProuduct(){
        $this->timestamp = date('Y-m-d\TH:i:s');
        $query = "INSERT INTO $this->db_name (name,description,price,category_id,created) VALUES ('$this->name','$this->description',$this->price,$this->category_id,'$this->timestamp')";

        $statment = $this->conn->prepare($query);
        return $statment -> execute();
    }


    public function getdata()
    {
        $query= "SELECT products.name,products.description,products.price,categories.name AS 'Category_name' FROM products,categories where products.category_id = categories.id";
        $statment = $this->conn->prepare($query);
        $statment->execute();
        $data = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getDataCategory(){
        $query= "SELECT name,id FROM categories order by name ";

        $statment = $this->conn->prepare($query);
        $statment->execute();

        $data = $statment->fetchAll(PDO::FETCH_ASSOC);

        return $data;

    }
    public function delete_data($id,$table)
    {
        $query = "DELETE FROM $table  WHERE id = $id";
        $statment = $this->conn->prepare($query);
        $statment->execute();
        return true;



    }
}
?>



