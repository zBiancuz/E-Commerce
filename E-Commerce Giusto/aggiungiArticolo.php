<?php
session_start();
ob_start();
?>

<?php
    include("connection.php");
    if(isset($_SESSION["id"])){
        $sql="SELECT ID FROM carrello WHERE IDutente=".$_SESSION["id"]."";
        $result=$conn->query($sql);
        $row = $result->fetch_assoc();
    }
    else{
        header("location:login.php");
    }
        //effettua l'aggiungi tramite id del prodotto, sottrai da quantita e aggiungi al carrello
        $sql = "INSERT INTO contienecarrello (IDprodotto,IDcarrello) 
                VALUES (" . $_GET["id"] . "," . $row["ID"] . ")"; 
        echo $sql;
        $result = $conn->query($sql);
        $conn->close();
        header("location:Carrello.php");
?>