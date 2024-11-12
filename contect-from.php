<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "your-email@example.com";  // استبدل هذا بعنوان بريدك الإلكتروني
    $subject = "Do you want to be Ghost?";
    $body = "Ghost
