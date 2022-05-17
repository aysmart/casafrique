<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['adminlogin2'])!="")
  { 
    $_SESSION['adminlogin']="";
    $_SESSION['adminfullName']="";
    $_SESSION['errmsg']="";
    unset($_SESSION['AdminSID']);
    session_destroy();
header('location:index');
}

?>