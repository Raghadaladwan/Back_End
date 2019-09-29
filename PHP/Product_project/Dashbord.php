<?php
include 'layout/header.php';
include "config/config.php";
include 'model/model.php';
?>


<?php
$database = new config();
$conn=$database->conn;

$products_item= new Model($conn);
$data = $products_item->getdata();



//if(isset($_POST[id]))
    $delete_item = new Model();
    $deleted = $delete_item->delete_data();



//    $update_item = new Model()
//    $update = $update_item->update();


?>


<div class="container">
    <div class="row">
        <div class=col>Name</div>
        <div class=col>Description</div>
        <div class=col>Price</div>
        <div class=col>Category Name</div>
        <div class=col>Action</div>
    </div>
    <?php

    foreach ($data as $product)
    {
        echo "<div class=row>";
        echo "<div class=col>$product[name]</div>";
        echo "<div class=col>$product[description]</div>";
        echo "<div class=col>$product[price]</div>";
        echo "<div class=col>$product[Category_name]</div>";
        echo "<div class=col><a href='#'>EDIT</a> || <a href='#'>DELETE</a></div>";
   echo "</div>";
    }

    ?>

</div>

<?php
include "layout/footer.php";
?>
