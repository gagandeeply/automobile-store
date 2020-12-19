<?php 
session_start();
unset($_SESSION["id"]);
unset($_SESSION["uname"]);
unset($_SESSION["email"]);
session_destroy();
header("Location:https://kavity.co"); 
?> 