<?php
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["message"];

    $emaildestinatario = "contato@parinacred.com.br";

    require 'PHPMailer/class.phpmailer.php';
    require 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';
    //Config do servidor de email
    $mail->Host = "smtp.flockmail.com";
    $mail->Port ="587";
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = "true";
    $mail->Username = "parceria.rh@parinacred.com.br";
    $mail->Password = "Parceria.parina10";

    //Config das mensagens
    $mail->setFrom($mail->Username, "Mensagem do site"); //Remetente
    $mail->addAddress($emaildestinatario); //Destinatário
    $mail->Subject = "Novo contato do site"; //Assunto do E-mail

    $conteudo_email = "
    Assunto: $assunto
    Você recebeu mensagem de 
    $nome, entrando em contato pelo site. Segue os dados da pessoa para retorno:<br>
    Nome: $nome<br>
    Telefone: $telefone<br>
    Email: $email<br><br>
    Sua mensagem é:<br>
    $mensagem
    ";
    $mail->IsHTML(true);
    $mail->Body = $conteudo_email;

    if($mail->send()){
        header('Location: index.php?emailsend=sucess');
    }
    else{
        header('Location: index.php?emailsend=error');
    }
?>