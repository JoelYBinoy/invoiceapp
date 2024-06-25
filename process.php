<?php
    $to = "jbefootball4@gmail.com"; // Set the recipient's email address here
    $from = $_REQUEST['email']; // Use the email field for the 'From' field
    $subject = $_REQUEST['subject'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";

    $fields = array();
    $fields["name"] = "Name";
    $fields["email"] = "Email";
    $fields["subject"] = "Subject";
    $fields["message"] = "Message";

    $body = "Here is what was sent:\n\n";
    foreach($fields as $a => $b){
        $body .= sprintf("%20s: %s\n", $b, htmlspecialchars($_REQUEST[$a]));
    }

    $send = mail($to, $subject, $body, $headers);

    if($send){
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
?>
