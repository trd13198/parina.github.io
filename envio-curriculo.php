<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $areainteresse = $_POST['interesse'];
    $vagaestagio = $_POST['localinteresse'];
    $mensagem = $_POST["message"];
    $path = 'upload/' . $_FILES["resume"]["name"];
    move_uploaded_file($_FILES["resume"]["tmp_name"], $path);

    $emaildestinatario = "parceria.rh@parinacred.com.br";

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
    $mail->Subject = "Novo contado para Trabalhar Conosco"; //Assunto do E-mail

    $conteudo_email = "Você recebeu mensagem de 
    $nome, entrando em contato pelo site para trabalhar conosco. Segue os dados da pessoa para retorno:<br>
    Nome: $nome<br>
    Email: $email<br>
    Telefone: $telefone<br>
    Área de interesse informada: $areainteresse<br>
    Se o interesse é sobre vaga de estágio, foi marcado $vagaestagio.<br>
    Sua mensagem é:<br>$mensagem<br><br>
    Segue o anexo do seu currículo:
    $arquivo
    ";
    $mail->IsHTML(true);
    $mail->Body = $conteudo_email;
    $mail->AddAttachment($path);

    if($mail->send()){
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();
        header('Location: contato.php?emailworksend=sucess');
    }
    else{
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();
        header('Location: contato.php?emailworksend=error');
    }
?>