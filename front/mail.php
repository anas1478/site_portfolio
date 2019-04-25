<?php 

if($_POST) {
    extract($_POST);

    foreach($_POST as $name => $value) {
        $_POST[$name] = htmlspecialchars($value);
    }

    $Name = $user; //senders name 
    $email = $email; //senders e-mail adress 
    $recipient = "PersonWhoGetsIt@emailadress.com"; //recipient 
    $mail_body = $msg; //mail body 
    $subject = "Site portfolio de la part de " . $user; //subject 
    $header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 

    //mail command :) 
    if(mail($recipient, $subject, $mail_body, $header)) {
        header('location: index.php?message=success');
    } else {
        header('location: index.php?message=error');
    }
}


?>