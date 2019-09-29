<?php

class Update
{
    function update()
    {

        $query = "UPDATE
" . $this->table_name . "SET name = :name, price = :price, description = :description, category_id  = :category_id
WHERE id = :id";

        $statment = $this->conn->prepare($query);


        $this->name = name;
        $this->price = price;
        $this->description = description;
        $this->category_id = category_id;
        $this->id = $this->id;


        $statment->bindParam(':name', $this->name);
        $statment->bindParam(':price', $this->price);
        $statment->bindParam(':description', $this->description);
        $statment->bindParam(':category_id', $this->category_id);
        $statment->bindParam(':id', $this->id);


        if ($statment->execute()) {
            return true;
        }

        return false;

    }
}
?>