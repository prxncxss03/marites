<?php 
    require_once './require/session.php';
    require_once './require/config.php';

    $session_id = $_SESSION["user_id"];
    $user_id = $_GET["user_id"];

    require_once './require/user_data.php';

    $sql = "SELECT post.id, post.user_id, post.title, post.text, post.post_image, post.created_at, user.fullname, user.username, user.image FROM post INNER JOIN user ON post.user_id = user.id WHERE post.user_id = {$user_id} ORDER BY post.id DESC";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    $output = "";
    $count = 0;
    

    if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $count += 1;
            $post_id = $row["id"];
            $profile_user_image = $row["image"];
            $profile_user_username = $row["username"];
            $profile_user_fullname = $row["fullname"];
            $post_image = $row["post_image"];
            $output .= '<a href="post.php?post_id=' . $post_id . '" class="profile-post">
                            <img src="./images/post/'.$post_image.'" alt="">
                       </a>';
        }
    }
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
    <link rel="stylesheet" href="./css/profile.css">
    <title>Profile - Marites</title>
</head>
<body id="google_translate_element" class="body ">
    <div class="pop-up-content-wrapper pop-cover2 pop-cover3">
        <div class="pop-up-exit exit2">
            <button class="pop-up-btn-exit">
                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" aria-label="Close"  color="#ffffff" fill="#ffffff" height="24" role="img" viewBox="0 0 24 24" width="24"><polyline fill="none" points="20.643 3.357 12 12 3.353 20.647" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="3px"></polyline><line fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="3px" x1="20.649" x2="3.354" y1="20.649" y2="3.354"></line></svg>
            </button>
        </div>
        <div class="edit-profile-pop-up">
            <div class="create-post-heading">
                <p>Edit Profile</p>
            </div>
            <form class="edit-profile-form" action="">
                <div class="form-grp">
                    <label for="">Edit Picture</label>
                    <input type="file" name="" id="">

                </div>
                <div class="form-grp">
                    <label for="">Edit Bio</label>
                    <textarea name="" id="" cols="30" rows="4" >

                    </textarea>
                </div>
                <button class="edit-btn">Done</button>
            </form>
        </div>
    </div>
    <!-- create post modal -->
    <div class="pop-up-create-post-wrapper pop-cover2">
        <div class="pop-up-c-exit">
            <button class="create-pop-up-btn-exit">
                <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" aria-label="Close"  color="#ffffff" fill="#ffffff" height="24" role="img" viewBox="0 0 24 24" width="24"><polyline fill="none" points="20.643 3.357 12 12 3.353 20.647" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="3px"></polyline><line fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="3px" x1="20.649" x2="3.354" y1="20.649" y2="3.354"></line></svg>
            </button>
        </div>
        <div class="pop-up-c-post">
            <div class="create-post-heading">
                <p>Create new post</p>
            </div>
            <form class="create-post-form" action="">
                <div class="form-line">
                    <label for="title">Title</label>
                    <input type="text">
                </div>
                <div class="form-line">
                    <label for="text">Text</label>
                    <textarea rows="5" cols="50" placeholder="Write a caption...">
                        
                    </textarea>
                </div>
                <div class="form-line form-line3">
                    <label for="image">Image</label>
                    <input type="file">
                </div>
                <button class="create-image-post-btn">Post</button>
            </form>
        </div>
    </div>
    
    <!-- nav -->
    <?php require_once "./require/nav.php"?>
    <!-- nav -->

    <div class="profile-wrapper">
        <div class="main-content-wrapper profile-content-wrapper">
            <div class="profile-content-container">
                <div class="left-profile">
                    <img class="user-profile-pic" src="./images/profile/<?php echo $profile_user_image ?>" alt="" srcset="">
                    
                </div>
                <div class="right-profile">
                    <div class="username-section-wrapper">
                        <p><?php echo $profile_user_username ?></p>
                        <button class="edit-profile-btn">Edit Profile</button>
                    </div>
                    <div class="username-details">
                        <span class="number"><?php echo $count ?></span><span> posts</span>
                    </div>
                    <div class="username-true-name">
                        <p><?php echo $profile_user_fullname ?></p>
                    </div>
                    <div class="username-bio">
                        <p>
                            <?php echo $profile_bio ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="profile-post-container">
                <!-- <a href="#" class="profile-post">
                    <img src="./images/post/1653908401192257011_1464126747260302_4785008348765763254_n.jpg" alt="">
                    <div class="profile-post-banner">
                        <svg id="comment-svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" aria-label="Comment" color="#fff" fill="#fff" height="24" role="img" viewBox="0 0 24 24" width="24"><path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="2px"></path></svg>   
                    </div>
                </a> -->
                <?php echo $output ?>
            </div>
        </div>
    </div>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/random.js"></script>
    <script src="./js/myday.js"></script>
    <script src="./js/indivpost.js"></script>
    <script src="./js/comment.js"></script>
    <script src="./js/createpost.js"></script>
    <script src="./js/editProfile.js"></script>
    <script type="text/javascript" src=".//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>