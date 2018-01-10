<?php
@extract($_POST);
$admin = 'info@redcross-bkk.com' ; // Change to your admin email 'from' address
$subject = 'Thank You'; //Your email subject
$name = stripslashes($name); //can be stripslashes('name');
$email = stripslashes($email);
$subjects = stripslashes($subjects);
$messages = stripslashes($messages);
$message = '
<html>
<head>
<title>Thank You</title>
</head>
<body>
<div style="color:red"><strong>Thank You For contacting us, Your request is being processed by and operative and we would get to you shortly</strong></div>
</body>
</html>
';
// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
// Additional headers as http://php.net/manual/en/function.mail.php
$headers .= 'From: Admin <info@redcross-bkk.com>' . "\r\n";


//ACTIVE mail below to $admin (you) and $email (the other person)
mail( $admin, "Feedback: $subject", "$name <br> $email <br> $subjects <br> $messages", "From: $admin>" );
$send_contact=mail("$name <$email>", "Feedback: $subject", $message, $headers );
if($send_contact){
echo "Thanks," . $name. ", Your Message has been delivered and we will get back to you as soon as possible....";
} 
else {
echo "ERROR";
}
?>

<html>
<head>
<title>Thank You</title>
</head>
<body>
<div style="color:red"><a href="index.html">Click here to go back to Home-Page</a></div>
</body>
</html>