<?php 
session_start();
session_destroy();//acabamos la sesion
header("location: login.php")
?>