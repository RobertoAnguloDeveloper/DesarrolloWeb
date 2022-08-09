<?php
    require $_SERVER['DOCUMENT_ROOT'].'/desarrolloweb/controller/PHPMailer/src/Exception.php';
    require $_SERVER['DOCUMENT_ROOT'].'/desarrolloweb/controller/PHPMailer/src/PHPMailer.php';
    require $_SERVER['DOCUMENT_ROOT'].'/desarrolloweb/controller/PHPMailer/src/SMTP.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    class PasswordRecovery {
        private $to;
        private $name;
        private $id;
        private $pass;

        public function __construct($to, $name, $id, $pass) {
            $this->to = $to;
            $this->name = $name;
            $this->id = $id;
            $this->pass = $pass;
        }

        public function send() {
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'enviodecorreosprueba@gmail.com';
                $mail->Password = 'trlhlkdeeeshqwjd';
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                $mail->CharSet = 'UTF-8';
                $mail->setFrom('enviodecorreosprueba@gmail.com', 'DesarrolloWeb');
                $mail->addAddress($this->to);     // Add a recipient
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = "Recuperación de contraseña";
                $mail->Body    = "HOLA <br><b>".$this->name."</b></br>".
                                "Tu Cedula es: <b>".$this->id."</b><br>".
                                "Tu Clave es: <b>".$this->pass."</b><br>".
                                "Para ingresar a la plataforma, ingresa a la siguiente dirección: 
                                    <a href='http://localhost/DesarrolloWeb/index.php'>LOCALHOST</a>";
                
                
                $respuesta = $mail->send();
                $respuesta = (string)$respuesta;
                return "El mensaje ha sido enviado a su correo "
                .substr($this->to,0,(strlen($this->to)-(3*(strlen($this->to)/2))))."******?".$respuesta;
            } catch (Exception $e) {
                echo "<script>alert('El mensaje ha NO ha sido enviado a su correo Error: {$mail->ErrorInfo}');</script>";
            }
        }
    }
        // try {
        //     Server settings
        //     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        //     $mail->isSMTP();                                            //Send using SMTP
        //     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        //     $mail->Username   = 'enviodecorreosprueba@gmail.com';                     //SMTP username
        //     $mail->Password   = 'trlhlkdeeeshqwjd';                               //SMTP password
        //     $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        //     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //     Recipients
        //     $mail->setFrom('enviodecorreosprueba@gmail.com', 'DesarrolloWeb');
        //     $mail->addAddress('roberto.angulo.mt@usa.edu.co', 'Joe User');     //Add a recipient
        //     $mail->addAddress('ellen@example.com');               //Name is optional
        //     $mail->addReplyTo('info@example.com', 'Information');
        //     $mail->addCC('cc@example.com');
        //     $mail->addBCC('bcc@example.com');

        //     //Attachments
        //     $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //     $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //     //Content
        //     $mail->isHTML(true);                                  //Set email format to HTML
        //     $mail->Subject = 'PRUEBA 2';
        //     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        //     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        //     $mail->send();
        //     echo "<script>alert('Message has been sent');</script>";
        // } catch (Exception $e) {
        //     echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
        // }
    

?>