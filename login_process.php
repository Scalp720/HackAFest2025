<?php
session_start();

// Database credentials
$host = 'localhost';
$db = 'hackafest';
$user = 'root'; // Change if your MySQL user is different
$pass = '';    // Change if your MySQL password is set

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare('SELECT * FROM admin WHERE username = ? AND password = ?');
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Login successful
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header('Location: admin.php');
        exit();
    } else {
        // Login failed
        header('Location: login.php?error=1');
        exit();
    }
}

// If not POST, redirect to login
header('Location: login.php');
exit(); 