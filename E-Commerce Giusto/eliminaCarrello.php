<?php
session_start();
?>

<?php
include("connection.php");
if(isset($_SESSION['id'])){
    $sql="DELETE FROM carrello WHERE IDutente='" . $_SESSION["id"] . "'";
    $result=$conn->query($sql);
    $conn->close();
    header("location:NuovoCarrello.php?");
}
?>