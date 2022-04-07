<?php
    $nome = $_POST['contact-name'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $produto = $_POST['produto'];
    $hora = $_POST['hora'];
    
    $emaildestinatario = "vendas@parinacred.com.br";

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

    $conteudo_email = "Você recebeu mensagem de 
    $nome, entrando em contato pelo site solicitando uma proposta. Segue os dados da pessoa para retorno:<br>
    Nome: $nome<br>
    CPF: $cpf<br>
    Celular: $celular<br>
    Telefone: $telefone<br>
    Produto: $produto<br><br>
    Horário para atendimento: $hora<br>
    ";
    $mail->IsHTML(true);
    $mail->Body = $conteudo_email;

    if($mail->send()){
        header('Location: proposta.php?emailsend=sucess');
    }
    else{
        header('Location: proposta.php?emailsend=error');
    }

?>