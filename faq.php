<?php
"./htdocs/faq.php";
include "parts/header.php";
include "parts/footer.php";
include "subscriptionForm.php";


?>

<!DOCTYPE html>
<html>
<head>
    <title>Rogue´s Lair</title>
    <link rel="stylesheet" href="css/main.css">
    <?php include 'faq.html'; ?> // Include the contents of index.html

</head>
<body>
    <?php include 'header.php';?>
    <?php include 'footer.php';?>
    <?php include 'subscriptionForm.php';?>
    <h2>Subscribe to our Newsletter</h2>

<p>Sign up to receive updates on our latest FAQs and news.</p>

<form action="subscriptionForm.php" method="post">
  <label for="email">Email Address:</label>
  <input type="email" id="email" name="email" placeholder="Enter your email address" required>
  <button type="submit">Subscribe</button>
</form>
    
</body>
</html>
<--$_COOKIE
<label for="email">Email Address:</label>
  <input type="email" id="email" name="email" placeholder="Enter your email address" required>
  <button type="submit">Subscribe</button>
--/>