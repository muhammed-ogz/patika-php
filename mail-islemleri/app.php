<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';
$faker = \Faker\Factory::create('tr_TR');
if (isset($_POST['submit'])) {


    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.kayseri.edu.tr';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '223010710014@kayseri.edu.tr';                     //SMTP username
        $mail->Password   = '!Adanalinicolas33))';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet    = PHPMailer::CHARSET_UTF8;                //Türkçe karakterleri kabul etmesi için

        //Recipients
        $mail->setFrom('noreply@kayseri.edu.tr', 'kayseri.edu.tr');
        $mail->addAddress($_POST['email'], $_POST['isim']);     //Add a recipient
        $mail->addReplyTo('reply@kayseri.edu.tr', 'Cevap adresi');

        //Attachments
        $mail->addAttachment('kula.jpg','galata-kule.jpg');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $_POST['isim'];
        $mail->Body    = $_POST['alan'];
        $mail->AltBody = 'Sayın ' . $_POST['isim'] . ' mailiniz bize ulaştı en kısa sürede size dönüş yapacağız.<br>' . $faker->text(20);

        $mail->send();
        echo 'Mesaj başarı ile gönderildi';
    } catch (Exception $e) {
        echo "<pre>";
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>

<form action="" method="POST">

    isim : <input type="text" name="isim" value="<?= $faker->firstName() . ' ' . $faker->lastName(); ?>">
    <br>
    E-mail Adresi : <input type="email" value="muhammetnabioguz@gmail.com" name="email">
    <br>
    içerik : <textarea name="alan" id="" cols="30" rows="10" placeholder="metin giriniz..."></textarea>
    <br>
    <button type="submit" name="submit" value="1">Gönder</button>
</form>