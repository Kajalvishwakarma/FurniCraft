<?php 

include('dbconn.php');

use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp1\htdocs\mail_practice\PHPMailer\src\Exception.php';
require 'C:\xampp1\htdocs\mail_practice\PHPMailer\src\SMTP.php';
require 'C:\xampp1\htdocs\mail_practice\PHPMailer\src\PHPMailer.php';


$mail = new PHPMailer(true);
$uemail = $_POST["email"];
$email = 'kajalvishwakarma281@gmail.com';
$password = 'ycdh ehlb xhrq fzup';

try {
$mail->isSMTP();                                     
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;                            
$mail->Username = $email;                 
$mail->Password = $password;                           
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                           
$mail->Port = 25;                                   

$mail->setFrom($email, $uemail);
$mail->addAddress($uemail);
$mail->addReplyTo($email, 'FURNICRAFT');

// $mail->addAddress("name@example.com", "Recepient Name");

// $mail->addAttachment('panda.png', 'panda.png');

$mail->isHTML(true);

$mail->Subject = 'FURNICRAFT';
$mail->Body = '<h5>HELLO THIS IS FURNICRAFT</h5><br><br>
<p><i>Thank You For Subscribing FurniCraft 😃</i></p><br>';
// $mail->AltBody = "This is the plain text version of the email content";

    $mail->send();
    echo "
    <!doctype html>
<html lang='en'>

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS v5.2.1 -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
        <link rel='stylesheet' href='style.css'>
        <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container-fluid {
            padding: 160px 0 100px 0;
            background-image: url(img/loginbg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card {
            margin: 0 auto;
            background-color: rgba(197, 217, 232, 0.4);
            max-width: 600px;
            height: auto;
        }

        @media (min-width: 576px) {
            /* Adjust styles for small screens and larger */
            .container-fluid {
                padding: 100px 0 80px 0;
            }

            .card {
                margin: 20px;
            }
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
    <div class='container-fluid'>
    
    <center>
        <div class='card'>
            <div class='card-body text-center'>
                <h1 class='display-6' style='color: rgb(29, 141, 179);'>THANK YOU !!</h1><br>
                <blockquote class='blockquote mb-0'>
                    <p><i>Thank You For Subscribing Furnicraft</i></p>
                    <center>
                        <p>
                            <a href='home.php' class='d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none'>
                                <img src='img/logo.png' class='img-fluid' height='70px' width='70px' alt='' style='mix-blend-mode: multiply' />
                            </a>
                        </p>
                    </center>
                    <footer class='blockquote-footer'>
                        <i>We are always constantly learning, evolving, and changing in both visible and unseen ways.</i>
                        <cite title='Source title'>☺</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
        <a name='' id='' class='btn btn-outline-dark' href='home.php' role='button'>BACK</a>
    </center>
</div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js'
        integrity='sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r' crossorigin='anonymous'>
        </script>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js'
        integrity='sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+' crossorigin='anonymous'>
        </script>
</body>

</html>";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>

