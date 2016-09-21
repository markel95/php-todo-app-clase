<?php

$user = "markel95";

$pass = "";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=c9',$user,$pass);

    
}catch (PDOException $e){
    print "Error!: " .$e -> getMessage() . "<br/>";
    die();
}

?>