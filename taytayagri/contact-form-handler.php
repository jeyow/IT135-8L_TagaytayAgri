<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST["submit"])) {
    //Retrieve form data
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['uemail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try{ 
       $mail->isSMTP();
       $mail->Host = 'smtp.gmail.com';
       $mail->SMTPAuth = true;
       $mail->Username = 'taytayagriculturetest@gmail.com';
       $mail->Password = 'ygmrrndsakldskqh'; /*password in gmail: it135project */
       $mail->SMTPSecure = "tls";
       $mail->Port = '587';

       $mail->setForm('taytayagriculturetest@gmail.com');
       $mail->addAddress('annpatatas@gmail.com');

       $mail->isHTML(true);
       $mail->Subject = 'Message Received from Contact:' . $first_name . $last_name;
       $mail->Body = "Name: $first_name $last_name <br> Email: $email <br> Subject: $subject <br> Message: $message";

       $mail->send();
       $alert= "<div class='alert-success'><span>Message Sent! Thank you for Contacting Us.</span></div>";
    }catch(Exception $e){
       $alert= "<div class='alert-error'><span>'.$e->getMessage().'</span></div>";
    }

}
?>