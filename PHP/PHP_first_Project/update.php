<?php 
require 'config.php';

$id = $_GET['id'];
$sql='select * from users where id=:id';
$statement=$connection->prepare($sql);
$statement->execute([':id' => $id]);

$users = $statement->fetch(PDO::FETCH_OBJ);

echo isset($_POST['UP']); 
if(isset($_POST['UP'])){

    $username   = $_POST['username'];
    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $password   = $_POST['password'];
    $role       = $_POST['role']; 

    echo $username, $firstname, $lastname, $role;

    $sql = 'update users set username= :username, firstname= :firstname, lastname= :lastname, email= :email, phone= :phone, password= :password, role= :role where id= :id';    
    $statement = $connection->prepare($sql);
    $result = $statement->execute([':username' => $username, ':firstname' => $firstname, ':lastname' => $lastname, ':email' => $email, ':phone' => $phone, ':password' => $password, ':role' => $role, ':id' => $id]);
    
    print_r($statement);
    echo $result.'hi';
    if($result){
        header('Location:Dashboard.php');
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
    <form method="post">
        <div class="col-md-12 ">
            <div class="form-group">
                <h2 class="">Update</h2>
            </div>
            <div class="form-group">
                <hr/>
            </div>      
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" name="username" class="form-control" placeholder="username" value="<?= $users->username; ?>" id="username" />
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" name="firstname" class="form-control" placeholder="FirstName" value="<?= $users->firstname; ?>" id="firstname" />
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" name="lastname" class="form-control"  value="<?= $users->lastname; ?>" id="lastname" />
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    <input type="text" name="email" class="form-control" placeholder="email" value="<?= $users->email; ?>" id="email" />
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                    <input type="text" name="phone" class="form-control" placeholder="phone" value="<?= $users->phone; ?>" id="phone" />
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" name="password" class="form-control" placeholder="password" value="<?= $users->password; ?>"  id="password" />
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="text" name="role" class="form-control" placeholder="role" value="<?= $users->role; ?>" id="role" />
                </div>
            </div>
            <div class="form-group">
                <hr/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block btn-primary" name="UP">UPDATE</button>
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