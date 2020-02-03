<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "jf.torresp@uniandes.edu.co";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) ||
!isset($_POST['lname']) ||
!isset($_POST['email']) ||
!isset($_POST['address']) ||
!isset($_POST['address']) ||
!isset($_POST['city']) ||
!isset($_POST['phone'])) {

echo "<b>There was an error and the form was not sent. </b><br />";
echo "Please, check the information in the form again.<br />";
die();
}

$email_message = "Information of the form:\n\n";
$email_message .= "Name: " . $_POST['name'] . "\n";
$email_message .= "Last Name: " . $_POST['lname'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Address: " . $_POST['address'] . "\n";
$email_message .= "City: " . $_POST['city'] . "\n";
$email_message .= "Phone: " . $_POST['phone'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "The form was sent successfully";
}
?>