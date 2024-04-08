<?php
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ramen2Go - Food Delivery</title>
    <link rel="stylesheet" href="/XAMPP/xamppfiles/htdocs/assets/css/main.css">
    <script src="/XAMPP/xamppfiles/htdocs/assets/js/main.js"></script>
    <?php include 'index.html'; ?> 

    <style>
        <?php if ($theme === 'dark'): ?>
        body {
            background-color: #333;
            color: #fff;
        }
        <?php endif; ?>
    </style>
</head>
<body>
    <div class="container">
        <header>
            <?php include 'header.php';?>
            <label for="theme-switch">Dark Mode</label>
            <input type="checkbox" id="theme-switch" <?php echo $theme === 'dark' ? 'checked' : ''; ?>>
        </header>
        <main>
            <h2>Delicious Ramen Delivered to Your Doorstep</h2>
            <p>Order your favorite ramen dishes online and have them delivered to your home or office.</p>
            <p>Choose from a variety of flavors and toppings to create your perfect bowl of ramen.</p>
            <a href="/menu.php" class="btn">Order Now</a>
        </main>
        <footer>
            <?php include 'footer.php'; ?>
        </footer>
    </div>

    <script>
        const themeSwitch = document.getElementById('theme-switch');
        themeSwitch.addEventListener('change', function() {
            document.cookie = `theme=${this.checked ? 'dark' : 'light'}; path=/`;
            location.reload();
        });
    </script>
</body>
</html>
