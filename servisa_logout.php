<?php 
    session_start(); 
    session_destroy(); 
  
    header('location: servisa_login.php'); 
?>