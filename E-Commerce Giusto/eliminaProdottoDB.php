<?php
   ob_start();
   session_start();

    include("connection.php");
    if($_SESSION['admin']=="1"){
        $sql="DELETE FROM prodotti WHERE ID='" . $_GET["id"] . "'";
        $result=$conn->query($sql);
        $conn->close();
        header("location:index.php?msg=prodotto eliminato!");
    } else
        header("location:index.php?msg=non sei un amministratore!");
?>