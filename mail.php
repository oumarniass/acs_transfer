<form action="mail.php" method="post">

    <input type="email" name="mail" id="">
    <input type="text" name="message" id="">
    <input type="submit" value="envoyer" name="submit">
</form>
<?php
session_start();

     if(isset($_POST['submit']))
     {
         $to = $_POST['mail'];
         $test = '';
     $subject = 'le sujet';
     $message = $_POST['message'];
     $message .= "<br><h1>http://php.net/manual/fr/function.mail.php</h1>";

     $headers = 'From: acs_transfer@acs_transfer.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();


     mail($to, $subject, $message, $headers);
     }

 ?>
