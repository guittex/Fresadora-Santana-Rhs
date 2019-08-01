<?php
session_start();
if ($_SESSION["timer"]){
    unset($_SESSION["timer"]);
    header('Location: ../login.php');    
}

?>

