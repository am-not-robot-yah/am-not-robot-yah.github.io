<?php

$to = 'jg8168@onelearn.nz';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$tel = $_POST['tel'];
$project = $_POST['Card'];
$range1 = $_POST['range1'];


$body = <<<EMAIL

Hi, my name is $name.

I'd like to discuss the possibility of working together on a $project.

I live in £$range1

Additional Information:
$message

Regards, $name

<hr>
$name
$email
$tel

EMAIL;

$header = "From: $email";

if($_POST['send']){
mail($to, $subject, $body, $header);
$feedback = 'Thank you for your message, we will get back to you shortly.';
}

?>
