<?php
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
