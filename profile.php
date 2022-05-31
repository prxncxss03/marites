<?php 
    require_once './require/session.php';
    require_once './require/config.php';
    $user_id = $_SESSION["user_id"];

    require_once './require/user_data.php';
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
            <div class="left-profile">
                <img class="user-profile-pic" src="./images/profile/<?php echo $profile_image ?>" alt="" srcset="">
                
            </div>
            <div class="right-profile">
                <div class="username-section-wrapper">
                    <p><?php echo $profile_username ?></p>
                    <button class="edit-profile-btn">Edit Profile</button>
                </div>
                <div class="username-details">
                    <span class="number">0</span><span> posts</span>
                </div>
                <div class="username-true-name">
                    <p><?php echo $profile_fullname?></p>
                </div>
                <div class="username-bio">
                    <p>
                        <?php echo $profile_bio ?>
                    </p>
                </div>
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