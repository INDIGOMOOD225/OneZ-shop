<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="header.css">
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <nav>
            <ul>
                <li><a href="index.php" <?php if ($currentPage == 'index.php') echo 'class="active"'; ?>>Home</a></li>
                <li><a href="about.php" <?php if ($currentPage == 'about.php') echo 'class="active"'; ?>>About</a></li>
                <li><a href="contact.php" <?php if ($currentPage == 'contact.php') echo 'class="active"'; ?>>Contact</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>
