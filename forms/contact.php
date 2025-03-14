
<?php
  $receiving_email_address = 'saigaunker12345@gmail.com';

  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From: $from_name <$from_email>\r\n";
  $headers .= "Reply-To: $from_email\r\n";

  if(mail($receiving_email_address, $subject, $message, $headers)) {
      echo "Email sent successfully!";
  } else {
      echo "Failed to send email.";
  }
?>
