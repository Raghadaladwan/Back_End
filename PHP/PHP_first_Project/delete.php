<?php 
    require 'config.php';
    $id = $_GET['id'];
    $sql='delete from users where id=:id';
    $statment=$connection->prepare($sql);
    $statment->execute([':id' => $id]);
    header ("location:Dashboard.php")

?>