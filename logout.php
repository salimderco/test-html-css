<?php
setcookie("user_email", "", time() - 3600, "/");
header("Location: login.html");
exit;
?>