<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/instaIco.ico">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/register.css">
    <title>Register - Marites</title>
</head>
<body class="login-body">
    <div class="login-parent">
        <div class="login-wrapper">
            <div class="login">
                <span>
                    <img class="logo2 " src="./images/loogo.svg" alt="logo">
                </span>
                <!-- <div class="register-desc"> 
                    <p>Sign up to see photos and videos from your friends.</p>
                </div> -->
                <form class="login-input-wrapper signup" action="#">
                    <div class="error"></div>
                    <input type="text" placeholder="Mobile Number or Email" name="mobile-email">
                    <input type="text" placeholder="Full Name" name="name">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <div class="conditions">
                        By signing up, you agree to our <a href="https://help.instagram.com/581066165581870" target="_blank" rel="noopener noreferrer">Terms</a> , <a href="https://help.instagram.com/519522125107875/?maybe_redirect_pol=0" target="_blank" rel="noopener noreferrer">Data Policy</a> and <a href="https://help.instagram.com/1896641480634370?ref=ig" target="_blank" rel="noopener noreferrer">Cookies Policy </a>
                    </div>
                    <button class="login-button" id="register-btn">Sign Up</button>
                </form>
                
            </div>
            <div class="no-account-wrapper">
                <p>Have an account?</p><a href="./login.php" rel="noopener noreferrer">Log in</a>
            </div>
    </div>

    </div>
    <footer class="login-footer">
        © 2022 Marites From Ano Latest
    </footer>

    <!-- Javascript -->
    <script src="./js/register.js"></script>
</body>
</html>