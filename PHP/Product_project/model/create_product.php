<?php include '../config/config.php';?>
<?php include '../layout/header.php';?>
<?php include 'model.php';?>


<?php

$database = new config();
$connection=$database->conn;

//we should use the $connection with each instance


//var_dump($connection);


?>
<?php
//$cat =  new Category($connection);
$cat =  new Model($connection);

$categories=$cat->getDataCategory();

?>



<!--// pass connection to objects-->
<!--$product = new Product($db);-->
<!--$category = new Category($db);-->

<!-------------------------------------------------------->





<div class="container">
<form method="post">
    <div class="form-group">
        <label for="name">name</label>
        <input name="product_name" type="name" class="form-control" id="name" placeholder="name">
    </div>

    <div class="form-group">
    <label for="price">price</label>
    <input name="product_price" type="price" class="form-control" id="name" placeholder="price">
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Category</label>
        <select name="category_id" class="form-control" id="Category">

               <?php

               foreach ($categories as $category){
                   echo "<option value=$category[id]>  $category[name]</option>";
               }
               ?>

        </select>
    </div>

    <div class="form-group">
        <label for="description">description</label>
        <textarea name="product_description" class="form-control" id="description" rows="3"></textarea>
    </div>
    <div>
        <input name="submit" type="submit" class="form-control text-primary" id="submit" placeholder="submit">
    </div>
</form>
</div>

<?php
if (isset($_POST["submit"])) {

//  $addProduct = new Product($connection);
    $addProduct = new Model($connection);
    $addProduct->name = $_POST["product_name"];
    $addProduct->description = $_POST["product_description"];
    $addProduct->price = $_POST["product_price"];
    $addProduct->category_id = $_POST["category_id"];
    $check = $addProduct->addProuduct();

    if ($check) {
        echo "Done Add";
        var_dump($check);

    } else {
        echo "ERROR";

    }


}

?>
<?php  include 'footer.php';?>