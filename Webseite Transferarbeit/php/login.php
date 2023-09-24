<?php
session_start();

$host = 'localhost';
$db   = 'users';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);

$username = $_POST["username"];
$password = $_POST["password"]; 

$stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->execute([$username, $password]);

if ($stmt->fetch()) {
    $_SESSION["loggedin"] = true;
    header("Location: backend.php");
    exit;
} else {
    echo "Ungültige Anmeldedaten!";
}
?>
