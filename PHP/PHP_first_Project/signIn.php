<?php 
    require 'config.php';
?>

<?php
session_start();

if(isset($_POST["signin"])) {
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = "select * from users where username= :username and password= :password";
    $statement = $connection->prepare($sql);
    $statement->execute([':username' => $username, ':password' => $password]);
    $users = $statement->fetchAll(PDO::FETCH_OBJ);
    // print_r ($users[0]-> role);

    
    $_SESSION['role'] = $users[0] -> role;
    $_SESSION['username'] = $username;
    if ($_SESSION['role'] ==='admin'){

        header('location:index.php');
       
    }
    else if($_SESSION['role'] ==='user'){

        header('location:Home.php');
        

    }else{
     
        echo "<div class='alert alert-danger'>
              <strong>Warning!</strong> You are NOt Authorized to access this page
              </div>";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<title>Login</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
  .cont{
    display:flex;
    justify-content:center;
    width:90%;
  }
  .form-group{

      width:180%;
  }
  #pop{
      display:none;
  }
  </style>
</head>


<body>

<div class="cont">
<div>
<div>

</div>
</div>
    <div id="login-form">
        <form method="post" autocomplete="off">
            <div class="col-md-12 ">
                <div class="form-group">
                     <h2 class="">Login</h2>
                </div>
                <div class="form-group">
                     <hr/>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                              <input type="text" name="username" class="form-control" placeholder="Username" 
                              value="<?= $_POST["username"] ?>" id="username" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                             <input type="password" name="password" class="form-control" placeholder="password" value="" id="password" />
                    </div>
                </div>

                <div class="form-group">
                      <hr/>
                </div>
                
                <div class="form-group">
                       <button type="signinmit" class="btn btn-block btn-primary" name="signin" id="signin"
                       >Login</button>
                </div>
                <div class="form-group">
                   <hr/>
                </div>
            </div>
        </form>

    </div>
    </div>  

</div>
</body>
</html>