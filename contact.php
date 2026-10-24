<?php 

session_start();

$_SESSION["nom"]=$value;
unset($_SESSION["nom"]);
?>