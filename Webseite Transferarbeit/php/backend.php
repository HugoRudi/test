<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.html");
    exit;
}

$host = 'localhost';
$db   = 'kontakt';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);

$stmt = $pdo->prepare("SELECT * FROM contact_form");
$stmt->execute();
$messages = $stmt->fetchAll();

?>
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
        <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Nachricht</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $message): ?>
                <tr>
                    <td><?php echo htmlspecialchars($message["Name"]); ?></td>
                    <td><?php echo htmlspecialchars($message["Email"]); ?></td>
                    <td><?php echo htmlspecialchars($message["Phone"]); ?></td>
                    <td><?php echo htmlspecialchars($message["Message"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
         </table>
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

