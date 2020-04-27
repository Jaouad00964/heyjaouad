<?php 
     $name =  $_GET['name']
     $visitor_email = $_GET['email'];
     $message = $_GET['message'];

     $email_from = 'rifj00964@gmail.com';

     $email_subject = "New Form Submission";

     $email_body = "User Name: $name.\n";
                      "User Email: $visitor_email.\n";
                          "User message: $message.\n";
     $to = " rifj00964@gmail.com";ail_from 

     $headers = " From: $email_from \r\n";

     $headers .= "Reply-To: $visitor_email \r\n";

     mail($to,$email_subject,$email_body,$headers);

     header("Location: index.html");
?>
