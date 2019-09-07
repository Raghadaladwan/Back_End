<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
    .p{
        margin: 10px 0 10px 19%;
        width: 63%;
        word-spacing:4px;
    }
    .img1{
        margin: 10px 0 30px 32%;
    }
    .body
    {
        margin:0 0 0 18.5%;
        display: flex;
        flex-flow: column wrap;
        height: 500px;
        width: 50%;         
    }
		
    article {
        max-width: 350px;
        background-color: white;
    }

    .img3{
        width: 350px;
    }
    .pad{
        padding: 15px 0 0 30px;


    }
    .foot{

        margin-top:5.5%;
    }

    </style>
</head>
<body>

<?php
include "header.php";
?>
<div>

<div class="body">
        <div class="pad">
        <img class="img3" src="https://assets.justinmind.com/blog/wp-content/uploads/2018/11/Lorem-Ipsum-alternatives.png">
        <article >
        <h2>Lorem Ipsum</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
        
    
        </article>
        </div>
        <div class="pad">
        <img  class="img3"src="https://assets.justinmind.com/blog/wp-content/uploads/2018/11/Lorem-Ipsum-alternatives.png">
        <article >
        <h2>Lorem Ipsum</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </article>
        </div>
        <div class="pad">
        <img  class="img3" src="https://assets.justinmind.com/blog/wp-content/uploads/2018/11/Lorem-Ipsum-alternatives.png">
        <article >
        <h2>Lorem Ipsum</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </article>
        </div>
    
    </div>
    <div class="foot">
    <?php include "footer.php"; ?>
    </div>
</body>
</html>


