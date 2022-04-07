<?php
    include_once "includes/topo.php";
?>

	<title>Proposta</title>

<?php
    include_once "includes/header.php";
?>

<img src="assets/Grupo 58.png" alt="Imagem proposta" class="img-proposta d-none d-md-block d-lg-block d-xl-block"></div>

<div class="container">
    <h1 class="titulo-proposta">QUERO UMA PROPOSTA</h1>
    <div class="row">
    	<form id="contactForm" action="envio-proposta.php" method="POST">
            <div class="form-group">
                <label for="nome" class="col-12 offset-sm-4 col-md-6 offset-md-6 offset-lg-10 control-label">NOME:</label>
                <div class="col-12 offset-sm-4 offset-md-6 offset-lg-10">
                    <input type="text" aria-required="true" name="contact-name" class="form-control" placeholder="Seu nome completo" maxlength="100" required>
                </div>
            </div>

            <div class="form-group">
                <label for="formGroupInputSmall" class="col-12 offset-sm-4 col-md-6 offset-md-6 offset-lg-10 control-label">CPF:</label>
                <div class="col-12 offset-sm-4 offset-md-6 offset-lg-10">
                    <input class="form-control" type="text" name="cpf" id="cpf" placeholder="000.000.000-00" onkeyup="mascara('###.###.###-##',this,event,true)" maxlength="14" required>
                </div>
                
                <div class="form-group">
                    <label for="telefone" class="col-12 offset-sm-4 col-md-6 offset-md-6 offset-lg-10 control-label">TELEFONE:</label>
                </div>
                <div class="col-12 offset-sm-4 offset-md-6 offset-lg-10">
                    <input class="form-control" type="text" name="telefone" id="telefone" placeholder="(00) 0000-0000" onkeyup="mascara('(##) ####-#####',this,event,true)" maxlength="15" required>
                </div>
            </div>

            <div class="form-group">
                <label for="formGroupInputSmall" class="col-12 offset-sm-4 col-md-6 offset-md-6 offset-lg-10 control-label">CELULAR:</label>
                <div class="col-12 offset-sm-4 offset-md-6 offset-lg-10">
                    <input class="form-control" type="text" name="celular" id="celular" placeholder="(00) 00000-0000" onkeyup="mascara('(##)#####-####',this,event,true)" maxlength="14">
                </div>
            </div>

            <div class="form-group">
                <label for="prod" class="col-12 offset-sm-4 offset-md-6 offset-lg-10 control-label">PRODUTO DESEJADO:</label>
                <div class="col-8 offset-sm-4 offset-md-6 offset-lg-10">
                    <select name="produto" id="produto" required>
                        <option value="" disabled></option>
                        <option value="consignado">Empréstimo Consignado</option>
                        <option value="cartao">Cartão de Crédito</option>
                        <option value="seguro">Seguro</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="date" class="col-12 offset-sm-4 offset-md-6 offset-lg-10 control-label">MELHOR HORÁRIO PARA CONTATO:</label>
                <div class="col-12 offset-sm-4 offset-md-6 offset-lg-10">
                    <input type="time" name="hora" required><br>
                </div>
            </div>

            <div class="col-12 offset-4 col-md-6 offset-md-6 offset-lg-10">
                <input type="submit" value="Enviar" class="btn btn-primary btn-lg">
            </div> 
            <?php
                if((isset($_GET['emailsend'])) && ($_GET['emailsend'] == 'sucess')){?>
                <p class="text-danger font-weight-bold" style="font-size: 20px; margin-top: 20px;">Email enviado com sucesso!</p>
            <?php }?>
           
    	</form>
    </div>
</div>

<script src="js/script.js"></script>

<?php
    include_once "includes/rodape.php";
    include_once "includes/script_final.php";
?>
