<?php
if (!isset($_COOKIE['user_email'])) {
    header("Location: login.html");
    exit;
}
$user = htmlspecialchars($_COOKIE['user_email']);
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title><link rel="stylesheet" href="style.css"></head>
<body>
<div class="container">
    <h2>Welcome, <?php echo $user; ?>!</h2>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>