<?php
$name = $_POST["name"];
$email = $_POST["email"];
$details = $_POST["details"];

echo "<pre>";
$email_body = "";
$email_body .= "Name: " . $name . "\n";
$email_body	.= "Email: " . $email . "\n";
$email_body	.= "Message: " . $details ."\n";
echo $email_body;
echo "</pre>";

//TO DO: Send Email
header("location:thanks.php");
?>