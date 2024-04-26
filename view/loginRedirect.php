<?php
  error_reporting(E_ALL & ~E_NOTICE);
  session_start();
  include("../controller/AccountController.php");
  include("../model/Account.php");
  if($_POST['login'])
  { 
  $act = new Account();
  $logcon = new AccountController();
  $username=$_POST['username'];
  $password=$_POST['password'];
  
  $act->setUsername($username);
  $act->setPassword($password); 
  $logcon->Login($act); // call function to login 
    }
?>