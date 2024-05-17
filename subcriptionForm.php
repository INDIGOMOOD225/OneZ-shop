<?php
require "faq.php";

// Define your website name and social media links (replace with your information)
$websiteName = "Rogue´s Lair";



function sendNewsletter($email) {

  $subject = "Stay Connected! Subscribe to Our Newsletter";

  $message = "Hi there,\n\n";
$websiteName = "Rogue's Lair";
$exclusiveContent = "Exclusive content";
$latestNews = "Latest news";
$specialOffers = "Special offers";
$valuableTips = "Valuable tips";
$unsubscribeLink = "https://example.com/unsubscribe";
$facebookLink = "https://facebook.com/example";
$twitterLink = "https://twitter.com/example";
$instagramLink = "https://instagram.com/example";

$message .= "Welcome to " . $websiteName . "! We're excited to have you here. \n\n";
$message .= "Want to stay up-to-date on the latest news, offers, and insights from " . $websiteName . "? Subscribe to our newsletter and get them delivered straight to your inbox! \n\n";
$message .= "**Here's what you can expect from our newsletter:**\n\n";
$message .= "* " . $exclusiveContent . "\n";
$message .= "* " . $latestNews . "\n";
$message .= "* " . $specialOffers . "\n";
$message .= "* " . $valuableTips . "\n\n";
$message .= "Subscribing is easy! Just head over to our website: \n" . $_SERVER['HTTP_HOST'] . " \n\n"; // Use $_SERVER['HTTP_HOST'] to get the current domain name
$message .= "We won't spam you – we only send out newsletters a few times a month. You can also unsubscribe at any time with just one click here: " . $unsubscribeLink . " \n\n";
$message .= "Don't miss out! Subscribe today and join our growing community. \n\n";
$message .= "See you soon, \n\n";
$message .= "The " . $websiteName . " Team \n\n";
$message .= "P.S. Follow us on social media for even more updates and engagement! \n";
$message .= "* " . $facebookLink . " \n";
$message .= "* " . $twitterLink . " \n";
$message .= "* " . $instagramLink . " \n";

// Set headers for the email
$headers = "From: " . $websiteName . " <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
$headers .= "Reply-To: " . $websiteName . " <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  // Send the email
  return mail($email, $subject, $message, $headers);
}


$email = "teoburcl@gmail.com"; // Replace with a valid email address
$result = sendNewsletter($email);

if ($result) {
  echo "Newsletter sent successfully!";
} else {
  echo "There was an error sending the newsletter.";
}

?>
