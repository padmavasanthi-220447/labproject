<?php
<<<<<<< HEAD
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
=======
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$conn = new mysqli("localhost", "root", "", "smart_agriculture");

if ($conn->connect_error) {
    die("DB error: " . $conn->connect_error);
}

echo "Connected to DB<br>";

if (isset($_POST['login'])) {
    echo "Form submitted<br>";

    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Email: $email<br>";
    echo "Password received<br>";

    $sql = "SELECT * FROM agriculture WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    echo "Rows found: " . $result->num_rows . "<br>";

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if ($password !== $user['password']) {
        echo "❌ Passwords do not match";
        exit();
        }else {
            echo "✅ LOGIN SUCCESS";
        }
    } else {
        echo "❌ EMAIL NOT FOUND";
    }
}
?>
>>>>>>> 39990d794ec70b79db8407fa8db4c1f0dc1428f9
