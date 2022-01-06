<?php

   if (isset($_POST["register_student"])) {
      
      $firstname = $_POST["firstname"];
      $middlename = $_POST["middlename"];
      $lastname = $_POST["lastname"];
      $username = $_POST["username"];
      $pwd = $_POST["pwd"];

      require_once 'connect.inc.php';
      require_once 'functions.inc.php';

      if (emptyInputSignup($firstname, $middlename, $lastname, $username, $pwd) !== false) {
           header("location: ../admin/register_student.php?error=emptyinput");
           exit();
      }
      if (invalidUsername($username) !== false) {
           header("location: ../admin/register_student.php?error=invalidstudentid");
           exit();
      }
      if (studentIdExists($conn, $username) !== false) {
           header("location: ../admin/register_student.php?error=studentidtaken");
           exit();
      }

      createUser($conn, $firstname, $middlename, $lastname, $username, $pwd);
   }
   else {
      header("location: ../admin/register_student.php");
   }