<?php

if (isset($_POST["login"])){
   $username = $_POST["username"];
   $pwd = $_POST["password"];

   require_once 'connect.inc.php';
   require_once 'functions.inc.php';

   if (emptyInputLogin($username, $pwd) !== false) {
      header("location: ../index.php?error=emptyinput");
      exit();
   }
   loginUser($conn, $username, $pwd);
}
else {
   header("location: ../index.php");
   die();
}