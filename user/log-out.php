<?php 
header("location:../index.php");
// header("location: ../login.php")
session_start();
session_unset();
session_destroy();

?>