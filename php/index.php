<?php

if (isset($_POST["getData"])) {
    require_once '../require/session.php';
    require_once '../require/config.php';
    $user_id = $_SESSION["user_id"];

    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

    $start = mysqli_real_escape_string($conn, $_POST["start"]);
    $limit = mysqli_real_escape_string($conn, $_POST["limit"]);

    // Display post --------------------------------
    $sql = "SELECT post.id, post.user_id, post.title, post.text, post.post_image, post.created_at, user.username, user.image FROM post INNER JOIN user ON post.user_id = user.id ORDER BY post.id DESC LIMIT {$start}, {$limit}";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    $output = "";

    if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $post_id = $row["id"];
            $user_id = $row["user_id"];
            $title = $row["title"];
            $text = $row["text"];
            $post_image = $row["post_image"];
            $created_at = $row["created_at"];
            $user_username = $row["username"];
            $user_image = $row["image"];

            $output .= '<div class="individual-post">
                            <div class="title-header-post">
                                <div class="left-side-title-header">
                                    <a href="post_profile.php?user_id='.$user_id.'">
                                        <img class="poster-image" src="./images/profile/'.$user_image.'" alt="">
                                    </a>
                                    <span class="poster-name">'.$user_username.'</span>
                                </div>
                                <div class="right-side-title-header">
                                    <img src="./images/menu.png" alt="menu">
                                </div>
                            </div>
                            <img class="main-post-image" src="./images/post/'.$post_image.'" alt="">
                            <div class="bottom-part">
                                <div class="bottom-reaction">
                                    <div class="bottom-reaction-left">
                                        <svg class="heart-reaction" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" aria-label="Like" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z" fill="#262626"></path></svg>
                                        <a href="post.php?post_id=' . $post_id . '">
                                            <svg class="comment-reaction" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" aria-label="Comment" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none" stroke="#262626" stroke-linejoin="round" stroke-width="2px"></path></svg>
                                        </a>
                                    </div>
                                </div>
                                <span class="caption-message">
                                    <div class="title">'.$title.'</div>
                                    <span class="poster-name">'.$user_username.'</span>
                                    <span class="poster-message">
                                        '.$text.'
                                    </span>
                                </span>
                            </div>
                        </div>';
        }
    }
    else {
    $output = "reachedMax";
    }
}

echo $output;


// Display post --------------------------------


