<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "ehsanfalahati2006@gmail.com";
// $Subject = ["subject"];

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
// $Body .= "event: ";
// $Body .= $event;
// $Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "تمرین ارسال شد.";
}else{
    if($errorMSG == ""){
        echo "یه مشکلی وجود داره :( تمرین ارسال نشده";
    } else {
        echo $errorMSG;
    }
}

?>