<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$to = "ayukbrandon@gmail.com"; // YOUR EMAIL
$subject = "New Portfolio Message";

$body = "
Name: $name
Email: $email
Message: $message
";

$headers = "From: $email";

mail($to,$subject,$body,$headers);

header("Location: ../index.html?success=1");

}

?>