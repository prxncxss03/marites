<?php

require_once '../require/config.php';

$credentials = mysqli_real_escape_string($conn, $_POST['credentials']); 
$password = mysqli_real_escape_string($conn, $_POST["password"]);

if (empty($credentials) || empty($password)) {
  echo "Sorry you've entered invalid login credentials. Please try again.";
}
else {
  if (filter_var($credentials, FILTER_VALIDATE_EMAIL)) {
    $sql = "SELECT * FROM user WHERE email = '{$credentials}' AND password = '{$password}'";
  }
  else if (is_numeric($credentials)) {
    $sql = "SELECT * FROM user WHERE mobile = '{$credentials}' AND password = '{$password}'";
  }
  else {
    $sql = "SELECT * FROM user WHERE username = '{$credentials}' AND password = '{$password}'";
  }

  $result = mysqli_query($conn, $sql);
  $row_count = mysqli_num_rows($result);

  if ($row_count > 0) {
    if ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id']; // Getting the user id for session
    }
    
    session_start();
    $_SESSION["user_id"] = $id;
    echo "success";
  }
  else {
    echo "Sorry you've entered invalid login credentials. Please try again.";
  }
}