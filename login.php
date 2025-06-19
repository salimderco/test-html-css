<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        setcookie("user_email", $user['email'], time() + 3600, "/");
        header("Location: dashboard.php");
    } else {
        echo "Invalid credentials. <a href='login.html'>Try again</a>";
    }
}
?>