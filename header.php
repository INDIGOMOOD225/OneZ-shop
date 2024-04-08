<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Add CSS styles for graphical elements */
        header {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 32px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #ff0000;
        }
    </style>
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