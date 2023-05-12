<?php
session_start();
?>
<?php

include("connection.php");
if(isset($_SESSION['id'])){
    $sql="INSERT INTO carrello (IDutente) 
    VALUES (". $_SESSION["id"] . ")";
    $result=$conn->query($sql);
    $conn->close();
    header("location:index.php?msg=Nuovo carrello creato!");
}
?>