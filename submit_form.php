<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $wilaya = $_POST['wilaya'];

    $stmt = $conn->prepare("INSERT INTO users (full_name, email, password, gender, age, address, wilaya)
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$full_name, $email, $password, $gender, $age, $address, $wilaya]);

    echo "Account created successfully. <a href='login.html'>Login here</a>";
}
?>