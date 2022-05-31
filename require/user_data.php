<?php 
  // Get user info
  $sql2 = "SELECT * FROM user WHERE id = {$user_id}";
  $result2 = mysqli_query($conn, $sql2);
  $rowCount2 = mysqli_num_rows($result2);

  if ($rowCount2 > 0) {
      if ($row = mysqli_fetch_assoc($result2)) {
          $profile_username = $row["username"];
          $profile_fullname = $row["fullname"];
          $profile_image = $row["image"];
          $profile_bio = $row["bio"];
      }
  } 
