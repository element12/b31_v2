<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'jeisonortiz0016@gmail.com';

  $nombre = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $mensaje = $_POST["message"];
  $headers = 'FROM:'. $email;
 mail($receiving_email_address,$subject,$mensaje,$headers)
?>
