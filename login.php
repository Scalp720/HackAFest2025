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
    <?php if (isset($_GET['error'])): ?>
        <div class="error-popup">Enter Admin Credentials</div>
    <?php endif; ?>
    <div class="login-form">
    <div class="login-form-container">
        <p class="login-title">Login</p>
        <form class="form" method="POST" action="login_process.php">
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

<!-- FUNCTION validatePassword(inputPassword):
    // Randomized character list (not in password order)
    SET charPool = ['k', 'p', 'e', 't', 'c', 'i', 'i', 'r', 'd', 's', 'd', 'i']

    // Map: index positions that reconstruct the correct password from charPool
    SET indexMap = [9, 4, 7, 5, 1, 3, 0, 5, 8, 10, 5, 2]

    // Rebuild the password from the pool using the index map
    SET reconstructed = EMPTY STRING

    FOR i FROM 0 TO LENGTH(indexMap) - 1:
        SET reconstructed = reconstructed + charPool[indexMap[i]]

    // Compare with input
    IF inputPassword = reconstructed:
        RETURN True
    ELSE:
        RETURN False
-->