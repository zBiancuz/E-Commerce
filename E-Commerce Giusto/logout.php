<?php
//fa il logout da tutto l'accesso
session_start();
unset($_SESSION["mail"]);
unset($_SESSION["id"]);
session_destroy();
header('location:index.php?');
?>