<?php

if($_POST) {
    $fname = "";
    $lname = "";
    $email = "";
    $subject = "";

    if(isset($_POST['fname'])) {
        $fname = filter_var($_POST['fname'], FILTER-SANITIZE_STRING;)
        $email_body .= "<div>
                            <label<b> Visitor Name :</b></label>&nbsp;<span>".$fname $lname."</span>
                        </div>";
    }

    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $visitor_email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $emial_body .= "<div>
                            <label><b> Visitor Email:</b></labe>*nbsp;<span>".$email."</span
                        <div>"
    }

    if(isset($_POST['subject'])) {
        $subject = htmlspecialchars($_POST['subject']);
        $email_body .= "<div>
                        <label><b> Visitor Message: </b></label>
                        <div> ".$visitor_message." </div>
                        </div>";


    }
    $recipient = "nolan.pestano@northlandcaps.org"

    $email_body .= "</div>";

    $headers = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";

    if(mail($recipient, $email_body, $headers)) {
        echo "<p> Thank you for contating me, I'll get back to you asap :)</P>";
    } else {
        echo "<p> Something went wrong on my end, sorry </3</p>"
    
    }
    }
    }
}