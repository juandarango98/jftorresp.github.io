<?php
if(isset($_POST['email'])) {

// Sent email to me
$email_to = "jf.torresp@uniandes.edu.co";
$email_subject = "Contact from your website";

// Validate data from user
if(!isset($_POST['name']) ||
!isset($_POST['lname']) ||
!isset($_POST['email']) ||
!isset($_POST['address']) ||
!isset($_POST['city']) ||
!isset($_POST['phone'])) {

echo "<b>There was an error and the form was not sent. </b><br />";
echo "Please, check the information in the form again.<br />";
die();
}

// Content of the message to sent.
$email_message = "Information of the form:\n\n";
$email_message .= "Name: " . $_POST['name'] . "\n";
$email_message .= "Last Name: " . $_POST['lname'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Address: " . $_POST['address'] . "\n";
$email_message .= "City: " . $_POST['city'] . "\n";
$email_message .= "Phone: " . $_POST['phone'] . "\n\n";

// Sent mail using mail function of PHP
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "The form was sent successfully";
}
?>