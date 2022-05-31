<?php 

require_once '../require/session.php';
require_once '../require/config.php';
require_once '../require/facebook_time_ago.php';
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$post_id = $_SESSION["post_id"];

$sql = "SELECT post_comment.id, post_comment.user_id, post_comment.message, post_comment.created_at, user.username, user.image FROM post_comment INNER JOIN user ON post_comment.user_id = user.id WHERE post_comment.post_id = {$post_id}";

$result = mysqli_query($conn, $sql);
$rowCount = mysqli_fetch_assoc($result);
$output = "";

if ($rowCount > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $message = $row["message"];
    $created_at = $row["created_at"];
    $username = $row["username"];
    $image = $row["image"];
    $user_id = $row["user_id"];
    $_SESSION["comment_user_id"] = $row["user_id"];

    $output .= '<div class="indiv-comment-wrapper">
                  <div class="left-indiv-comment">
                      <a href="./comment_profile.php?user_id='.$user_id.'">
                        <img class="poster-image" src="./images/profile/'.$image.'" alt="">
                      </a>
                  </div>
                  <div class="right-indiv-comment">
                      <span class="poster-name">
                          '.$username.'
                      </span>
                      <span class="commentor-message">
                         '.$message.'
                      </span>
                      <div class="comment-details">
                          <p>'.facebook_time_ago($created_at).'</p>
                      </div>
                  </div>
                </div>';
  }
}

echo $output;


