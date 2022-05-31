<?php 
    require_once './require/session.php';
    require_once './require/config.php';
    require_once './require/facebook_time_ago.php';
    $user_id = $_SESSION["user_id"];

    require_once './require/user_data.php';
    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

    $get_post_id = $_GET["post_id"];

    // Display post --------------------------------
    $sql = "SELECT post.id, post.user_id, post.title, post.text, post.post_image, post.created_at, user.username, user.image FROM post INNER JOIN user ON post.user_id = user.id WHERE post.id = {$get_post_id}";
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

            $_SESSION["post_id"] = $post_id;
            $_SESSION["user_id_comment"] = $user_id;
        }
    }
    // Display post --------------------------------
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/instaIco.ico">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/leftBody.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/createPost.css">
    <link rel="stylesheet" href="./css/rightBody.css">
    <link rel="stylesheet" href="./css/popUp.css">
    <title>Marites</title>
</head>
<body id="google_translate_element" class="body">
    <div class="pop-up-content-wrapper pop-cover2" id="post-wrapper">
        <div class="pop-up-exit">
            <button href="index.php" class="pop-up-btn-exit">
                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" aria-label="Close"  color="#ffffff" fill="#ffffff" height="24" role="img" viewBox="0 0 24 24" width="24"><polyline fill="none" points="20.643 3.357 12 12 3.353 20.647" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="3px"></polyline><line fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="3px" x1="20.649" x2="3.354" y1="20.649" y2="3.354"></line></svg>
            </button>
        </div>
        <div class="pop-up-post">
            <div class="left-pop-up-post">
                <img class="pop-up-image" src="./images/post/<?php echo $post_image ?>" alt="">
            </div>
            <div class="right-pop-up-post">
                <div class="pop-upper-part">
                    <div class="pop-top">
                        <img class="poster-image" src="./images/profile/<?php echo $user_image ?>" alt="">
                        <span class="poster-name"><?php echo $user_username ?></span>
                    </div>
                    <div class="pop-body">
                        <div class="comment-comment-wrapper">
                            <div class="caption-comment-wrapper">
                                <div class="left-caption-comment">
                                    <img class="poster-image" src="./images/profile/<?php echo $user_image ?>" alt="">
                                </div>
                                <div class="right-caption-comment">
                                    <span class="poster-name">
                                      <?php echo $user_username ?>
                                    </span>
                                    <span class="commentor-message">
                                        <?php echo $text ?>
                                    </span>
                    
                                </div>
                            </div>
                            <div class="comment-container">
                                <div id="#loading" class="comment-loading">
                                    <svg aria-label="Loading..." class="spinner animation-spin" viewBox="0 0 100 100"><rect fill="#555555" height="6" opacity="0" rx="3" ry="3" transform="rotate(-90 50 50)" width="25" x="72" y="47"></rect><rect fill="#555555" height="6" opacity="0.08333333333333333" rx="3" ry="3" transform="rotate(-60 50 50)" width="25" x="72" y="47"></rect><rect fill="#555555" height="6" opacity="0.16666666666666666" rx="3" ry="3" transform="rotate(-30 50 50)" width="25" x="72" y="47"></rect><rect fill="#555555" height="6" opacity="0.25" rx="3" ry="3" transform="rotate(0 50 50)" width="25" x="72" y="47"></rect><rect fill="#555555" height="6" opacity="0.3333333333333333" rx="3" ry="3" transform="rotate(30 50 50)" width="25" x="72" y="47"></rect><rect fill="#555555" height="6" opacity="0.4166666666666667" rx="3" ry="3" transform="rotate(60 50 50)" width="25" x="72" y="47"></rect><rect fill="#555555" height="6" opacity="0.5" rx="3" ry="3" transform="rotate(90 50 50)" width="25" x="72" y="47"></rect><rect fill="#555555" height="6" opacity="0.5833333333333334" rx="3" ry="3" transform="rotate(120 50 50)" width="25" x="72" y="47"></rect><rect fill="#555555" height="6" opacity="0.6666666666666666" rx="3" ry="3" transform="rotate(150 50 50)" width="25" x="72" y="47"></rect><rect fill="#555555" height="6" opacity="0.75" rx="3" ry="3" transform="rotate(180 50 50)" width="25" x="72" y="47"></rect><rect fill="#555555" height="6" opacity="0.8333333333333334" rx="3" ry="3" transform="rotate(210 50 50)" width="25" x="72" y="47"></rect><rect fill="#555555" height="6" opacity="0.9166666666666666" rx="3" ry="3" transform="rotate(240 50 50)" width="25" x="72" y="47"></rect></svg>
                                </div>
                            </div>
                            
                            <!-- <div class="add-more-comment-container">
                                <button class="add-more-comment-btn">
                                    <svg aria-label="Load more comments" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="7.001" x2="17.001" y1="12.005" y2="12.005"></line><line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12.001" x2="12.001" y1="7.005" y2="17.005"></line></svg>
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="lower-comment-part">
                    <div class="bottom-reaction-comment">
                        <div class="bottom-reaction bottom-reaction2">
                            <div class="bottom-reaction-left">
                                <svg  xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" aria-label="Like" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z" fill="#262626"></path></svg>
                                <svg  xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" aria-label="Comment" class="_8-yf5 " color="#fff" fill="#fff" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="2px"></path></svg>
                            </div>
                        </div>
                        <div class="lower-comment-details">
                            <p class="lower-comment-likes">10 likes</p>
                            <p class="lower-comment-time"><?php echo facebook_time_ago($created_at) ?></p>
                        </div>
                        <div class="left-side-comment-wrapper">
                            <div action="" class="comment-left-side">
                                <div class="comment-left-side-text">
                                    <span class="emoji">
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z" fill="#262626"></path></svg>
                                    </span>
                                    <form class="comment-section-wrapper" action="#" id="commentForm">
                                        <input type="text" class="comment-section"  name="message" placeholder="Add a comment..." autocomplete="off"/>
                                    </form>
                                </div>
                            </div>
                            <div class="comment-right-side">
                                <button class="post-button" form="commentForm">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- nav -->
    <?php require_once "./require/nav.php"?>
    <!-- nav -->

    <div class="main-content-wrapper">

    </div>

    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.3.2.min.js"></script>
    <script src="./js/comment.js"></script>
    <script>
      const exit = document.querySelector(".pop-up-btn-exit");

      exit.onclick = () => {
        window.history.back();
      }
    </script>

    <!-- load more comment on click -->
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.3.2.min.js"></script>
</body>
</html>