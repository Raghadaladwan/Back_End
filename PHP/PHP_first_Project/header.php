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
  <title>header</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .h1{
    margin:0 0 0 0%;
  }
  .ar1{
  display:flex;
  justify-content:space-around;

  }
.btween{
 display:flex;
 justify-content:space-between;
 font-size:45px;
 
}
.right{
    
    text-align: right;
    margin-right: 3%;
    margin-top :3%;
}

  </style>
</head>

<body>
  <div class="container">
       <div>
            <div class="right">
                <?php
                if(!isset($_SESSION['username']))
                  {
                  echo '<a class="btn btn-warning" href="signIn.php" id="signIn" >Signin</a>';
                  echo '<a class="btn btn-success" href="signup.php" id="signup" >Signup</a>';
                  }
                ?>
                </div>
            

            <div class="right">
            <?php 

              if(isset($_SESSION['username']))
              {
                echo '<a class="btn btn-danger" href="signout.php" id="signout" >Signout</a>';
              }
              ?>
            </div>
          
          
          </div>
            <div class="page-header btween">
          
              <h1 class="h1">  
              <?php 

                if(isset($_SESSION['username']))
                {
                echo "<h3> Welcome {$_SESSION['username']}</h3><br>";
                }
              ?> 
              </h1>     
            
            </div>


          <div class="ar1">
            <a href="Home.php" id="home">Home</a>

            <a href="about.php"> About</a>
           
            <?php if($_SESSION['role'] === 'admin')
            echo"<a href='Dashboard.php'>Dashboard
              </a>";
              ?>
          </div>
     </div>
      
      <hr>
  </div>
 
</body>
</html>




