<?php
    require "config.php";

    if(isset($_POST['signup'])){

        $username   = $_POST['username'];
        $firstname  = $_POST['firstname'];
        $lastname   = $_POST['lastname'];
        $email      = $_POST['email'];
        $phone      = $_POST['phone'];
        $password   = $_POST['password'];
        $role       = $_POST['role'];     

        $sql = 'insert into users(username,firstname, lastname, email, phone, password, role) values(:username ,:firstname ,:lastname, :email, :phone, :password , :role)';

        $stmtinsert = $connection->prepare($sql);

        $result = $stmtinsert->execute(array(':username' => $username, ':firstname' => $firstname, ':lastname' => $lastname, ':email' => $email, ':phone' => $phone, ':password' => $password, ':role' => $role));
       
        header('location:index.php');
        

    }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>SignUp</title>
    <style>
  .cont{
    display:flex;
    justify-content:center;
    width:90%;
  }
  .form-group{

      width:180%;
  }
  </style>
</head>
<body>
<div class="cont">
    <div id="login-form">
        <form method="post" autocomplete="off">
            <div class="col-md-12 ">
                <div class="form-group">
                <h2 class="">Sign Up</h2>
                </div>
                <div class="form-group">
                <hr/>
            </div>      
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" name="username" class="form-control" placeholder="username" value="<?= $_POST["username"] ?>"    id="username" required/>
                </div>
            </div>
                <div class="form-group">
                    <div class="input-group">
                         <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                             <input type="text" name="firstname" class="form-control" placeholder="FirstName" value="<?= $_POST["firstname"] ?>" id="firstname" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" name="lastname" class="form-control" placeholder="lastname" value="<?= $_POST["lastname"] ?>" id="lastname" required/>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                         <input type="text" name="email" class="form-control" placeholder="email" value="<?= $_POST["email"] ?>" id="email" required/>
                </div>
            </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                        <input type="text" name="phone" class="form-control" placeholder="phone" value="<?= $_POST["phone"] ?>" id="phone" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                      <input type="password" name="password" class="form-control" placeholder="password"  id="password" required/>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                     <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                      <input type="text" name="role" class="form-control" placeholder="role" value="<?= $_POST["role"] ?>" id="role" required/>
                </div>
            </div>
            <div class="form-group">

                   <hr/>

            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-block btn-primary" name="signup" id="signup">Sign Up</button>
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