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
        $mail->Subject = "Detalhes do Projeto";
        $email_vars = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'project_type' => $_POST['project_type'],
            'user_has_screen_design' => $_POST['user_has_screen_design'],
            'user_has_site' => $_POST['user_has_site'],
            'project_stage' => $_POST['project_stage'],
            'project_definition' => $_POST['project_definition']
        );
        $body = utf8_decode(file_get_contents('../minimal-creative/template/project_lead.phtml'));

        if(isset($email_vars)){
            foreach($email_vars as $k=>$v){
                $body = str_replace('{'. strtoupper($k).'}', utf8_decode($v), $body);
            }
        }
        $mail->Body = $body;
        $mail->isHTML(true);
        $mail->AddAddress("contato@thunderbold.com.br");
       
        if(!$mail->Send()) {
            $output = json_encode(array('type'=>'error', 'text' => 'Houve um problema com o seu envio.'));
            die($output);
        }
        else{
            $output = json_encode(array('type'=>'message', 'text' => 'Olá '.$_POST['name'] .' Obrigada pelos detalhes do projeto, em breve o contactaremos.'));
            die($output);
        }
    }
?>