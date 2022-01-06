<?php

function emptyInputSignup($firstname, $middlename, $lastname, $username, $pwd) {
   $result;
   if (empty($firstname) || empty($middlename) || empty($lastname) || empty($username) || empty($pwd) ) {
      $result = true;
   }
   else {
      $result = false;
   }
   return $result;
}

function invalidUsername($username) {
   $result;
   if (!preg_match("/^[0-9]*$/", $username)){
      $result = true;
   }
   else {
      $result = false;
   }
   return $result;
}

function studentIdExists($conn, $username) {
   $sql = "SELECT * FROM users WHERE username = ?;";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../admin/register_student.php?error=stmtfailed");
      exit();
   }

   mysqli_stmt_bind_param($stmt, "s", $username);
   mysqli_stmt_execute($stmt);

   $resultdata = mysqli_stmt_get_result($stmt);

   if ($row = mysqli_fetch_assoc($resultdata)) {
      return $row;
   }
   else {
      $result = false;
      return $result;
   }

   mysqli_stmt_close($stmt);
}
function createUser($conn, $firstname, $middlename, $lastname, $username, $pwd) {
   $sql = "INSERT INTO users (firstname, middlename, lastname, username, pwd) VALUES (?, ?, ?, ?, ?);";
   $stmt = mysqli_stmt_init($conn);
   if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../admin/register_student.php?error=stmtfailed");
      exit();
   }

   $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

   mysqli_stmt_bind_param($stmt, "sssss", $firstname, $middlename, $lastname, $username, $hashedPwd);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../admin/register_student.php?error=none");
   exit();
}

function emptyInputLogin($username, $pwd) {
   $result;
   if (empty($username) || empty($pwd) ) {
      $result = true;
   }
   else {
      $result = false;
   }
   return $result;
}

function loginUser($conn, $username, $pwd) {
   $studentIdExists = studentIdExists($conn, $username);

   if ($studentIdExists === false) {
      header("location: ../index.php?error=norecord");
      exit();
   }

   $passwordHashed = $studentIdExists["pwd"];
   $checkPassword = password_verify($pwd, $passwordHashed);
   
   if ($checkPassword === false) {
      header("location: ../index.php?error=wrongpassword");
      exit();
   }
   elseif ($checkPassword === true) {
      session_start();
      $_SESSION["Id"] = $studentIdExists["id"];
      $_SESSION["Username"] = $studentIdExists["username"];
      header("location: ../home.php");
      exit();
   }
}