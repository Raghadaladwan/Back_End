
<?php
session_start();

if(isset($_POST["sub"])) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


<style>
.a1{

font-size:45px;
}
h1{
 display:flex;
 justify-content:space-between;
 font-size:45px;
}


</style>
</head>

<body>

<div class="container">

<?php include "header.php"; ?>
   
<?php 
    require 'config.php';
    $sql = 'select * from users';
    $statement = $connection->prepare($sql);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<div class='container'>
    <div class="card mt-5">
        <div class="card-header">
        <h1>All Users  <a class="a1" href="create.php">+</a></h1>
        </div>
        <div class="card-body">
        <table class="table table-boardered">
                <?php 
                    echo "<tr>";
                    foreach($users[0] as $key=>$user){
                        echo "<th>$key</th>";
                        
                    }
                    echo "<th>Action</th>";
                    echo "<th>Action</th>";
                    echo "</tr>";

                    foreach($users as $key=>$user){
                        echo "<tr>";
                        foreach($user as $value){
                            echo "<td>$value</td>";
                        }
                        echo "<td>";
                        echo "<a href="."delete.php?id=".$user->id.">Delete</a>";
                        // echo "<a href="."update.php?id=".$user->id.">Update</a>";
                        echo "</td>";
                        echo "<td>";
                        // echo "<a href="."delete.php?id=".$user->id.">Delete</a>";
                        echo "<a href="."update.php?id=".$user->id.">Update</a>";
                        echo "</td>";
                        
                        
                        echo "</tr>";
                    }
                
                ?>
            </table>
        </div>
    </div>
</div>

<?php
        include "footer.php"
?>



</body>
</html>