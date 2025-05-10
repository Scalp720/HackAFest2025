<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <title>Login</title>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="login-form">
    <div class="login-form-container">
        <p class="login-title">Login</p>
        <form class="form">
            <div class="login-input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="">
            </div>
            <div class="login-input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="">
                <div class="forgot">
                    <a rel="noopener noreferrer" href="#">Forgot Password ?</a>
                </div>
            </div>
            <button class="sign">Sign in</button>
        </form>
    </div>
    </div>
</body>
</html>