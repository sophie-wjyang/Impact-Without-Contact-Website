<?php
    $name = $_POST ['name'];
    $visitor_email = $_POST['email'];
    $message=$_POST['message'];


    $email_from = 'isabellapan666@gmail.com';
    $email_subject= "New Form Submission";
    $email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
                "user Message: $message.\n";


$to = "impactwithoutcontact@gmail.com";

$headers="From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail ($to,$email_subject,$email_body,$headers);

header ("Location: referral.html");