<?php
session_start();
ob_start();
include ("connection.php");


$mail=$_POST["email"];	

$pass=$_POST["psw"];

$stmt=$conn->prepare("SELECT * FROM user WHERE email=? AND pswd=?"); //statement per le sql injection
$stmt->bind_param("ss",$mail,$pass);

$stmt->execute();
$result=$stmt->get_result();

if($result->num_rows>0){
	$row=$result->fetch_assoc();


	$_SESSION["id"]=$row["ID"];
	$_SESSION["mail"]=$row["email"];
	if($row["amministratore"] == 1){
		$_SESSION["admin"]=$row["amministratore"];
	}
	
	
	$stmt->close();
	$conn->close();
	header("location:index.php");
	
}
else{
	
	header("location:login.php?msg=password o mail non validi");
}
?>