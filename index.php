<?php 
    require_once './require/session.php';
    require_once './require/config.php';
    $user_id = $_SESSION["user_id"];

    require_once './require/user_data.php';
    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
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
            <form class="create-post-form" action="#" enctype='multipart/form-data'>
                <div class="error"></div>
                <div class="form-line">
                    <label for="title">Title</label>
                    <input type="text" name="title">
                </div>
                <div class="form-line">
                    <label for="text">Text</label>
                    <textarea rows="5" cols="50" placeholder="Write a caption..." name="text"></textarea>
                </div>
                <div class="form-line form-line3">
                    <label for="image">Image</label>
                    <input type="file" name="image">
                </div>
                <button class="create-image-post-btn">Post</button>
            </form>
        </div>
    </div>

    <!-- nav -->
    <?php require_once "./require/nav.php"?>
    <!-- nav -->

    <div class="main-content-wrapper">
        
        <div class="body-right-side">
            <div class="body-right-content-side">
                <div class="right-profile-wrapper">
                    <div class="right-right-profile">
                        <img class="right-profile-image" src="./images/profile/<?php echo $profile_image ?>" alt="">
                        <div class="right-profile-username-wrapper">
                            <span class="account-name"><?php echo $profile_username ?></span>
                            <span class="account-subtitle"><?php echo $profile_fullname?></span>
                        </div>
                    </div>
                    <button class="switch-btn"></button>
                </div>
                <div class="suggestions-wrapper">
                    <span class="suggestions-for-you">Suggestions For You</span>
                    <div class="suggestion-person-container">
                        <div class="suggestions-person-right">
                            <img class="suggest-image-follow" src="./images/suggestion/clara.jpeg" alt="">
                            <div class="suggestion-username-wrapper">
                                <span class="suggestion-artist">clara_benin</span>
                                <span class="suggested-for-u">Suggested for you</span>
                            </div>
                        </div>
                        <button class="suggestion-follow">Follow</button>
                    </div>

                    <div class="suggestion-person-container">
                        <div class="suggestions-person-right">
                            <img class="suggest-image-follow" src="./images/suggestion/billie.jpeg" alt="">
                            <div class="suggestion-username-wrapper">
                                <span class="suggestion-artist">billieeillish</span>
                                <span class="suggested-for-u">Suggested for you</span>
                            </div>
                        </div>
                        <button class="suggestion-follow">Follow</button>
                    </div>

                    <div class="suggestion-person-container">
                        <div class="suggestions-person-right">
                            <img class="suggest-image-follow" src="./images/suggestion/ez.jpeg" alt="">
                            <div class="suggestion-username-wrapper">
                                <span class="suggestion-artist">ezmiller</span>
                                <span class="suggested-for-u">Suggested for you</span>
                            </div>
                        </div>
                        <button class="suggestion-follow">Follow</button>
                    </div>

                    <div class="suggestion-person-container">
                        <div class="suggestions-person-right">
                            <img class="suggest-image-follow" src="./images/suggestion/renee.jpeg" alt="">
                            <div class="suggestion-username-wrapper">
                                <span class="suggestion-artist">iamrenee</span>
                                <span class="suggested-for-u">Suggested for you</span>
                            </div>
                        </div>
                        <button class="suggestion-follow">Follow</button>
                    </div>

                    <div class="suggestion-person-container">
                        <div class="suggestions-person-right">
                            <img class="suggest-image-follow" src="./images/suggestion/peniel.jpeg" alt="">
                            <div class="suggestion-username-wrapper">
                                <span class="suggestion-artist">penpen</span>
                                <span class="suggested-for-u">Suggested for you</span>
                            </div>
                        </div>
                        <button class="suggestion-follow">Follow</button>
                    </div>

                    <div class="suggestion-person-container">
                        <div class="suggestions-person-right">
                            <img class="suggest-image-follow" src="./images/suggestion/paolo.webp" alt="">
                            <div class="suggestion-username-wrapper">
                                <span class="suggestion-artist">paolo guico</span>
                                <span class="suggested-for-u">Suggested for you</span>
                            </div>
                        </div>
                        <button class="suggestion-follow">Follow</button>
                    </div>
                </div>
                <div class="right-side-footer">
                    <p>© 2022 MARITES FROM ANO LATEST</p>
                </div>
            </div>
        
        </div>
        <div class="body-left-side">
            <div class="my-day-container">
                <!-- each person -->
                <div class="my-day-person-user">
                    <div class="my-day-person-container">
                        
                        <img class="my-day-person avatar1" src="" alt="">
                    </div>
                    <span class="my-day-username1 my-day-username"></span>
                </div>
                <!--  -->
                <div class="my-day-person-user">
                    <div class="my-day-person-container">
                        <img class="my-day-person avatar2" src="" alt="">
                    </div>
                    <span class="my-day-username my-day-username2">iamomar</span>
                </div>
                <div class="my-day-person-user">
                    <div class="my-day-person-container">
                        
                        <img class="my-day-person avatar3" src="" alt="">
                    </div>
                    <span class=" my-day-username">cathy</span>
                </div>
                <div class="my-day-person-user">
                    <div class="my-day-person-container">
                        
                        <img class="my-day-person avatar4" src="" alt="">
                    </div>
                    <span class=" my-day-username">prince</span>
                </div>

                <div class="my-day-person-user">
                    <div class="my-day-person-container">
                        
                        <img class="my-day-person avatar5" src="" alt="">
                    </div>
                    <span class=" my-day-username">gdwnlyn</span>
                </div>

                <div class="my-day-person-user">
                    <div class="my-day-person-container">
                        
                        <img class="my-day-person avatar6" src="" alt="">
                    </div>
                    <span class=" my-day-username">christine</span>
                </div>
            </div>


            <div class="left-body-post"></div>
        </div>

        
    </div>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.3.2.min.js"></script>
    <script src="./js/post.js"></script>
    <script>
        var start = 0;
        var limit = 2;
        var reachedMax = false;

        $(window).scroll(function(){ 
            if($(window).scrollTop() == ($(document).height() - $(window).height())) {
                getData();
            }
        });

        $(document).ready(function () {
            getData();
        });

        function getData() {
            if (reachedMax) 
                return;
            
            $.ajax({
                url: './php/index.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    getData: 1,
                    start: start,
                    limit: limit
                },
                success: function(response) {
                    if (response == "reachedMax") 
                        reachedMax = true;
                    else {
                        start += limit;
                        $(".left-body-post").append(response);
                    }
                }
            });
        } 
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/random.js"></script>
    <script src="./js/myday.js"></script>
    <script src="./js/indivpost.js"></script>
    <script src="./js/createpost.js"></script>
</body>
</html>