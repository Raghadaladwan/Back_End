<?php
session_start();
?>

<?php
if(isset($_POST["sub"]))
{
    $_SESSION['role'] = $role; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

   <style>

   h1{
    display:flex;
    justify-content:center;
   }
   .foot{
    margin-top:32%;
    }
   
   </style>
   
</head>
<body>
    <?php
        include "header.php"
    ?>
    <div>
        <h1> 
              Hello Hackers
        </h1>
    </div>
    
    <div class="foot">
    <?php include "footer.php"; ?>
    </div>
</body>
</body>
</html>
