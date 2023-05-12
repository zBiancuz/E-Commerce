<?php
$username="root"; //default senza password
$password="";
$dbname="5ai_bianchi_ecommerce"; //nome del tuo db
$conn=new mysqli("localhost",$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}
?>