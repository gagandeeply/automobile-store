<?php 
session_start();
unset($_SESSION["id"]);
unset($_SESSION["uname"]);
session_destroy();
header("Location:https://kavity.co/admin"); 
?>