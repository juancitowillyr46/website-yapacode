<?php 

require 'vendor/autoload.php';


if($_POST){

    $mail = new \PHPMailer\PHPMailer\PHPMailer(true); // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'juancitowillyr46@gmail.com';                 // SMTP username
        $mail->Password = 'genesisr4723pq';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('contacto@yapacode.com', 'Contacto');
        $mail->addAddress('juan.rodas.manez@gmail.com', 'Juan Rodas');     // Add a recipient
        $mail->addAddress('juancitowillyr46@gmail.com', 'Juan Rodas');     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contacto';

        $html .= '<p>Nombre: '.$_POST['name'].'<br>Correo: '.$_POST['email'].'<br>Mensaje: '.$_POST['message'].'</p><br>';


        $mail->Body = $html;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        header('Location: index.php?success=on');

        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

}
