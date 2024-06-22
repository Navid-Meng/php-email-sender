<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        try{
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->SMTPAuth = true;

            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // sender's gmail account
            $mail->Username = "middleman415@gmail.com";
            $mail->Password = "uyeo fwtb gykj kqch";

            $mail->setFrom("middleman415@gmail.com", "User Contact");

            $mail->addReplyTo($email, $name);

            // receiver's gmail account
            $mail->addAddress("justcode301@gmail.com");

            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();

            echo "Email sent successfully";

        } catch(Exception $e){
            echo "Mailer Error: {$mail->ErrorInfo}";
        }
    }