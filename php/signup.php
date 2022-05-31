<?php
require_once '../require/config.php';

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$mobile_email = mysqli_real_escape_string($conn, $_POST["mobile-email"]);

if (empty($name) || empty($username) || empty($password) || empty($mobile_email)) {
  echo "Sorry fields can't be blank, please try again";
}
else if (!preg_match('/^([_a-z0-9]+(.[_a-z0-9]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,5}))|(\d+$)$/', $mobile_email)) {
  echo "Please enter a valid mobile or email";
}
else if (strlen($username) < 7) {
  echo "Your username must be atleast 7 characters long";
}
else {
  $sql = "SELECT * FROM user WHERE username = '{$username}'";
  $result = mysqli_query($conn, $sql);
  $row_count = mysqli_num_rows($result);

  if ($row_count > 0) {
    echo "Sorry your username is already taken. Please try a different username";
  }
  else {
    if (is_numeric($mobile_email)) { // If mobile_email is mobile
      $sql = "SELECT * FROM user WHERE mobile = '{$mobile_email}'";
      $result = mysqli_query($conn, $sql);
      $row_count = mysqli_num_rows($result);

      if ($row_count > 0) {
        echo "Sorry your mobile number is already taken. Please try a different mobile number";
      }
      else {
        if (isset($_FILES["image"])) {
          $img_name = $_FILES["image"]["name"]; 
          $img_type = $_FILES["image"]["type"]; 
          $tmp_name = $_FILES["image"]["tmp_name"]; 

          $img_explode = explode(".", $img_name);
          $img_ext = end($img_explode);
          $extentions = ["png", "jpeg", "jpg"];

          if (in_array($img_ext, $extentions) === true) { 
            $time = time(); 
            $new_img_name = $time.$img_name;

            if (move_uploaded_file($tmp_name, "../images/profile/" . $new_img_name)) {
              $sql = "INSERT INTO user(fullname, mobile, username, password, image) VALUES('{$name}', '{$mobile_email}', '{$username}', '{$password}', '{$new_img_name}')";
              $result = mysqli_query($conn, $sql);
              echo "success";
            }
          }
          else {
            echo "Only (JPG, JPEG, PNG) files are allowed";
          }
        }
        else {
          echo "Please add your profile picture";
        }
      }
    }
    else if (filter_var($mobile_email, FILTER_VALIDATE_EMAIL)) { // If mobile_email is email
      $sql = "SELECT * FROM user WHERE email = '{$mobile_email}'";
      $result = mysqli_query($conn, $sql);
      $row_count = mysqli_num_rows($result);

      if ($row_count > 0) {
        echo "Sorry your email is already taken. Please try a different email";
      }
      else {
        $img_name = $_FILES["image"]["name"]; 
        $img_type = $_FILES["image"]["type"]; 
        $tmp_name = $_FILES["image"]["tmp_name"]; 

        $img_explode = explode(".", $img_name);
        $img_ext = end($img_explode);
        $extentions = ["png", "jpeg", "jpg"];

        if (in_array($img_ext, $extentions) === true) { 
          $time = time(); 
          $new_img_name = $time.$img_name;

          if (move_uploaded_file($tmp_name, "../images/profile/" . $new_img_name)) {
            $sql = "INSERT INTO user(fullname, email, username, password, image) VALUES('{$name}', '{$mobile_email}', '{$username}', '{$password}', '{$new_img_name}')";
            $result = mysqli_query($conn, $sql);
            echo "success";
          }
        }
        else {
          echo "Only (JPG, JPEG, PNG) files are allowed";
        }
      }
    }
  }
}

