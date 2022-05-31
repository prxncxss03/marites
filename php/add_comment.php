<?php
require_once '../require/session.php';
require_once '../require/config.php';
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$post_id = $_SESSION["post_id"];
$message = mysqli_real_escape_string($conn, $_POST["message"]);

if (strlen($message) > 1) {
  $sql = "INSERT INTO post_comment(post_id, user_id, message) VALUES({$post_id}, {$_SESSION["user_id"]}, '{$message}')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo "success";
  }
}

