<?php 
session_start();
session_destroy();
header("Location:/ekart/template/login.php");
?>