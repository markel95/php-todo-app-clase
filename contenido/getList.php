<?php
// http://php.net/manual/en/pdostatement.fetchall.php
require_once("conexiones.php");
try {
    
    $sth = $dbh->prepare("SELECT * from listas");
    $sth->execute();
     
    $result = $sth->fetchAll();
    // print_r($result);
    
    header('Content-Type: application/json');
    echo json_encode($result);
    
    $dbh = null;
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>