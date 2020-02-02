<?php  

  $to = 'jf.torresp@uniandes.edu.co';
  $name = $_POST["name"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $zip = $_POST["zip"];

  if(!empty($name))
  {
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
  }
  if(!empty($email))
  {
    $email = trim($email);
    $email = filter_var($email, FILTER_SANITIZE_STRING);
  }

  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= "From: " . $email . "\r\n"; 
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $message = '<table style="width:100%">
      <tr>
        <td>'.$name.'  '.$lname.'</td>
      </tr>
      <tr><td>Email: '.$email.'</td></tr>
      <tr><td>Address: '.$address.'</td></tr>
      <tr><td>City: '.$city.'</td></tr>
      <tr><td>Zip: '.$zip.'</td></tr>
      
    </table>';

  $headers2 = 'MIME-Version: 1.0' . "\r\n";
  $headers2 .= "From: " . $email . "\r\n"; 
  $headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $message2 = 'I have received your message, I will get back to you as soon as possible';
  if(@mail($to, $email, $message, $headers))
  {
    echo '';
  }else{

  }
  if(@mial($mail, $to, $message2, $headers2))
  {
    echo '';
  }else{

  }
?>