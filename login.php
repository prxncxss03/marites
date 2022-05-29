<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./images/instaIco.ico">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login - Marites</title>
</head>
<body class="login-body">
    <div class="login-parent">
        <div class="login-wrapper">
            <div class="login">
                <span>
                    <img class="logo2 " src="./images/loogo.svg" alt="logo">
                </span>
                <form class="login-input-wrapper signin" action="#">
                    <div class="error"></div>
                    <input type="text" name="credentials" placeholder="Phone number, username or email">
                    <input type="password" name="password" placeholder="Password">
                    <button class="login-button" id="login-btn">Log in</button>
                </form>
                <a href="#" rel="noopener noreferrer" class="forgot">Forgot Password?</a>
            </div>
            <div class="no-account-wrapper">
                <p>Don't have an account?</p><a href="./register.php" rel="noopener noreferrer">Sign Up</a>
            </div>
    </div>

    </div>
    <footer class="login-footer">
        © 2022 Marites From Ano Latest
    </footer>
    <script src="./js/login.js"></script>
</body>
</html>