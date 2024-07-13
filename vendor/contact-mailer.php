<?php
    if($_POST)
    {
        require_once "PHPMailer/Exception.php";
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.hostinger.com';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = 'contato@thunderbold.com.br';
        $mail->Password = 'Thunderbolt.90';
        $mail->SetFrom('contato@thunderbold.com.br');
        $mail->Subject = "Contato";
        $email_vars = array(
            'name' => ucwords(strtolower($_POST['name'])),
            'message' => $_POST['message'],
            'email' => $_POST['email'],
            'company' =>  ((isset($_POST['company']) and (!empty($_POST['company']))) ? $_POST['company'] : ''),
            'stage' =>  ((isset($_POST['stage'])and (!empty($_POST['stage']))) ? $_POST['stage'] : ''),
            'telefone' => $_POST['telefone']
        );
        $body = utf8_decode(file_get_contents('../minimal-creative/template/contact_lead.phtml'));

        if(isset($email_vars)){
            foreach($email_vars as $k=>$v){
                $body = str_replace('{'. strtoupper($k).'}', utf8_decode($v), $body);
            }
        }
        $mail->Body = $body;
        $mail->isHTML(true);
        $mail->AddAddress("contato@thunderbold.com.br");
        if(!$mail->Send()) {
            echo "error: " . $mail->ErrorInfo;
        } else {
            /* Enviar email para cliente confirmando contato */
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Port = 587;
            $mail->Username = 'contato@thunderbold.com.br';
            $mail->Password = 'Thunderbolt.90';
            $mail->SetFrom('contato@thunderbold.com.br');
            $mail->Subject = "Contato";
            $email_vars = array(
                'name' => ucwords(strtolower($_POST['name'])),
                'message' => $_POST['message'],
                'email' => $_POST['email'],
                'company' =>  ((isset($_POST['company']) and (!empty($_POST['company']))) ? $_POST['company'] : ''),
                'stage' =>  ((isset($_POST['stage'])and (!empty($_POST['stage']))) ? $_POST['stage'] : ''),
                'telefone' => $_POST['telefone']
            );
            $body = utf8_decode(file_get_contents('../minimal-creative/template/client_contact_lead.phtml'));
        
            if(isset($email_vars)){
                foreach($email_vars as $k=>$v){
                    $body = str_replace('{'.strtoupper($k).'}', utf8_decode($v), $body);
                }
            }
            $mail->Body = $body;
            $mail->isHTML(true);
            $mail->AddAddress($_POST['email']);
            
            if(!$mail->Send()) {
                $output = json_encode(array('type'=>'error', 'text' => 'Houve um problema com o seu envio.'));
                die($output);
            }
            else{
                $output = json_encode(array('type'=>'message', 'text' => 'Olá '.ucwords(strtolower($_POST['name'])) .'. Obrigada por nos contactar.', 'name' => ucwords(strtolower($_POST['name'])), 'email' => $_POST['email']));
                die($output);
            }
        }
    }
?>