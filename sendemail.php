<?php

$name = @trim(stripslashes($_POST["name"]));
$from = @trim(stripslashes($_POST["email"]));
$subject = @trim(stripslashes($_POST["subject"]));
$message = @trim(stripslashes($_POST["message"]));
$client_ip = $_SERVER['REMOTE_ADDR'];
$date = time();
$contact_date = date("j/n/Y", $date);
$email_body = "Message received- $contact_date \nName: $name \nE-Mail $from \nSubject: $subject \nMessage: $message \nIP: $client_ip \nDe: $from \nReply-To: $from \n";
$to = "jithinbp@gmail.com";//replace with your email

//$headers = array();
//$headers[] = "MIME-Version: 1.0";
//$headers[] = "Content-type: text/plain; charset=iso-8859-1";
//$headers[] = "From: {$name} <{$from}>";
//$headers[] = "Reply-To: <{$from}>";
//$headers[] = "Subject: {$subject}";
//$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $email_body, "Content-type: text/plain; charset=\"utf-8\"\n From: $to");

// echo "<script language=javascript>alert(“Thanks for contact us. We will be in contact soon.”);</script>";
//location.href="index.html#get-in-touch";
//</script>";

die;
?>
