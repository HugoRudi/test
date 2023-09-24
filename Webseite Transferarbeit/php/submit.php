<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adam Bestattungen</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/9fc0d00d3a.js" crossorigin="anonymous"></script>
</head>

<body>

   <!-- Header with Flexbox -->
   <header>
    <div class="container flex-header">
        <img src="../media/logo.png" alt="Logo" id="header-image">
    </div>
   </header>

    <!-- Main Content with Grid -->
    <div class="container grid-content">
        <aside class="sidebar">
            <div class="container flex-nav">
                <ul class="nav-list">
                    <li><a href="../home.html" style="color: #000;">Home</a></li>
                    <li><a href="../dienstleistungen.html" style="color: #000;">Dienstleistungen</a></li>
                    <li><a href="../urnen.html" style="color: #000;">S&auml;rge / Urnen</a></li>
                    <li><a href="../einzugsgebiet.html" style="color: #000;">Einzugsgebiet</a></li>
                    <li><a href="../kontakt.html" style="color: #000;">Kontakt</a></li>
                </ul>
            </div>
        </aside>
        <section class="main-content">
        <?php

$host = 'localhost';
$db   = 'kontakt';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    $errors = [];

    // Name validation
    if (empty($name) || strlen($name) < 2) {
        $errors[] = "Name should have at least 2 characters.";
    }

    // Email validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email.";
    }

    // Message validation
    if (empty($message) || strlen($message) < 10) {
        $errors[] = "Message should have at least 10 characters.";
    }

    if (empty($errors)) {
        $stmt = $pdo->prepare("INSERT INTO contact_form (name, email, phone, message) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $message]);
        echo "Data submitted successfully!";
    } else {
        foreach($errors as $error) {
            echo $error . "<br>";
        }
    }
}

?>
        </section>
    </div>

    <!-- Footer with Flexbox -->
    <footer>
        <div class="container">
            <div class="footer-left">
                <p>
                    <i class="fa-solid fa-location-dot"></i><span style="padding: 5px;">Hauptstrasse 1 </span></br>
                    <i class="fa-solid fa-building"></i><span style="padding: 6px;">38551 Vollbüttel </span></br>
                </p>
                <p>
                    <i class="fa-solid fa-phone"></i><span style="padding: 5px;">05373/330007</span></br>
                    <i class="fa-solid fa-mobile"></i><span style="padding: 9px;">0171/5333784</span></br>
                </p>
                <p><i class="fa-solid fa-envelope"></i><span style="padding: 5px;"><a href="mailto:hwalter@t-online.de">hwalter@t-online.de</a></span></br>
                    <i class="fa-solid fa-copyright"></i><span style="padding: 6px;">2023 Adam Bestattungen</span>

                </p>
            </div>
        </div>
    </footer>

</body>

</html>