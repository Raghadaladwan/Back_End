<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
    img{
        margin: 10px 0 30px 38%;
    }
    .div1{
        margin-left:38%;
        width:24%;
    }
    .foot{
    margin-top:4%;
    }

    </style>
</head>
<body>

    <?php
        include "header.php"

    ?>
      <img src="./img/me.jpg" alt="Orange"> 

      
    <div class="div1">
    
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto assumenda praesentium asperiores?
        Ducimus cumque sed doloremque atque debitis sint quam? Hic laudantium beatae repellat tenetur nobis atque,
        qui nisi explicabo.
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo modi nemo magnam alias ab. Laudantium officiis inventore alias. 
        Obcaecati asperiores exercitationem cumque corrupti at ipsam aspernatur numquam. Ipsam, aliquid totam?
    </p>
    </div>
    <div class="foot">
    <?php include "footer.php"; ?>
    </div>
</body>
</html>