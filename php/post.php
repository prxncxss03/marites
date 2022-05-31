<?php
session_start();
$session_id = $_SESSION["user_id"];

require_once '../require/config.php';

$title = mysqli_real_escape_string($conn, $_POST['title']);
$text = mysqli_real_escape_string($conn, $_POST['text']);
// $image = mysqli_real_escape_string($conn, $_POST['image']);

if (empty($title) || empty($text)) {
  echo "Please fill out all the requirements";
}
else if (empty($_FILES["image"]["name"])) {
  echo "Please add your post image";
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

    if (move_uploaded_file($tmp_name, "../images/post/" . $new_img_name)) {
      $sql = "INSERT INTO post (user_id, title, text, post_image) VALUES ({$session_id}, '{$title}', '{$text}', '{$new_img_name}')";
      $result = mysqli_query($conn, $sql);

      echo "success";
    }
    else {
      echo "something went wrong";
    }
  }
  else {
    echo "Only (JPG, JPEG, PNG) files are allowed";
  }
}