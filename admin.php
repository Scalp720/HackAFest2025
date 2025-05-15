<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <title>Admin Page</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="admin-container">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?>!</h1>
        <p>This is the protected admin area.</p>
        <a href="logout.php" class="logout-link">Logout</a>
    </div>
</body>
</html> 