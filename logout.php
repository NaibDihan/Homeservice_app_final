<?php
//include constants.php for SITEURL
include('config/constants.php');
//1. Destroy the session
session_destroy(); // unset $_SESSION['username']=$username
//2. Redirect to login.php page
header('location:'.SITEURL);
?>