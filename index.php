<?php
"/Applications/XAMPP/xamppfiles/htdocs/index.php"

// Default XAMPP template
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ramen2Go - Food Delivery</title>
    <link rel="stylesheet" href="/XAMPP/xamppfiles/htdocs/assets/css/main.css">
    <script src="/XAMPP/xamppfiles/htdocs/assets/js/main.js"></script>
    <?php include 'index.html'; ?> // Include the contents of index.html

</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome to Ramen2Go</h1>
        </header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/menu.php">Menu</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/contact.php">Contact</a></li>
            </ul>
        </nav>
        <main>
            <h2>Delicious Ramen Delivered to Your Doorstep</h2>
            <p>Order your favorite ramen dishes online and have them delivered to your home or office.</p>
            <p>Choose from a variety of flavors and toppings to create your perfect bowl of ramen.</p>
            <a href="/menu.php" class="btn">Order Now</a>
        </main>
        <footer>
            <p>&copy; <?php echo date("Y"); ?> Ramen2Go. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
