<?php
session_start();
require __DIR__ . '/config/db.php';
$users = getUsersCollection();
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
if (!$email || !$password) {
    die("Email and password are required.");
}
$user = $users->findOne(['email' => $email]);
if (!$user) {
    die("User not found.");
}
if (!password_verify($password, $user['password'])) {
    die("Invalid password.");
}
$_SESSION['user'] = $user['email'];
header("Location: dashboard.php");
exit;
?>


