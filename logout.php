<?php 

  session_start(); 

  $appUsername = $_SESSION["authenticatedUser"]; 
  $_SESSION["message"] =  "User $appUsername has logged out."; 
  
  session_unset("authenticatedUser"); 

  // Relocate back to the login page 
  header("Location: login.php"); 
  //session_destroy();    
?>   
