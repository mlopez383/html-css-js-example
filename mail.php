<?php
    $to =  "mlopez383@gmail.com";
    $nombre = $_POST["replyFormName"];
    $email = $_POST["replyFormEmail"];
    $text = $_POST["replyFormComment"];
    
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td><strong>Su nombre:</strong> '.$nombre.'</td>
        </tr>
        <tr><td><strong>Su email:</strong> '.$email.'</td></tr>
        <tr><td><strong>Su mensaje:</strong> '.$text.'</td></tr>
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo '<div class="alert alert-success" role="alert">';
        echo '    El mensaje ha sido enviado!';
        echo '</div>';
        
    }else{
        echo '<div class="alert alert-danger" role="alert">';
        echo '    No se pudo enviar el mensaje!';
        echo '</div>';
    }
?>
