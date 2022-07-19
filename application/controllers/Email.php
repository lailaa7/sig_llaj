<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email extends CI_Controller
{
    public function __construct()
    {
    }


    public function sendmail()
    {

        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'mail.rocky-techno.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'llaj.madiun@rocky-techno.com'; // ubah dengan alamat email Anda
            $mail->Password   = 'sandisaya'; // ubah dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;

            $mail->setFrom('llaj.madiun@rocky-techno.com', 'No reply'); // ubah dengan alamat email Anda
            $mail->addAddress('pogeng45ti@gmail.com');
            $mail->addReplyTo('pogeng45ti@gmail.com', 'No Reply'); // ubah dengan alamat email Anda

            // Isi Email
            $mail->isHTML(true);
            $mail->Subject = 'Reset';
            $mail->Body    = 'Coba lagi';

            $mail->send();

            // Pesan Berhasil Kirim Email/Pesan Error


            echo ' Berhasil';
        } catch (Exception $e) {
            echo "gagal";
        }
    }
}
