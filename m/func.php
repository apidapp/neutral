<?php



function sendMail($subject, $msg, $email) {
        $mail = new PHPMailer;
        $mail->isSendMail();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = '';
        $mail->Host = "mail.nodesynchronize.live"; // Domain namwe
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = "info@nodesynchronize.live"; // Webmail
        $mail->Password = 'Trymee100@@'; // Password
        $mail->setFrom('info@nodesynchronize.live', 'c-dapp');
        $mail->addAddress($email);
        $mail->Subject = $subject;
        $mail->msgHTML($msg);
        $mail->isHTML( true );
        
        if($mail->Send()) {
            
            return true;
        }
    }

function urlize($str){
        $edit = preg_replace("#([^a-zA-Z0-9\s]+)#is", "", $str);
        $edit2 = preg_replace("#([\s]+)#is", "\n", $edit);
        return $edit2;
    }

?>


