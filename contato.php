<?php
    include_once "includes/topo.php";
?>

	<title>Contato</title>
    
<?php
    include_once "includes/header.php";
?>

<div class="d-none d-md-block d-lg-block d-xl-block">
    <img src="assets/Grupo 55.png" class="img-contato" alt="Imagem contato">
</div>
<h1 class="titulo-contato">CONTATO</h1>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h2 class="contato-fale-conosco">Fale Conosco</h2>

            <form action="envio-contato.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label>Código do Parceiro *</label>
                        <input type="text" name="codparceiro" maxlength="100" class="form-control" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nome Completo *</label>
                        <input type="text" name="nome" data-msg-required="Por favor, coloque o nome completo" maxlength="100" class="form-control" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Cidade *</label>
                        <input type="text" name="cidade" data-msg-required="Por favor, coloque a cidade" maxlength="100" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Estado *</label>
                        <select class="form-control mb-3" name="estado" required>
                            <option value="" disabled></option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AM">AM</option>
                            <option value="AP">AP</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RS">RS</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label>Telefone *</label>
                        <input type="text" name="telefone" data-msg-required="Por favor, coloque o telefone" maxlength="100" class="form-control" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label>E-mail *</label>
                        <input type="email" name="email" data-msg-required="Por favor, coloque um e-mail." maxlength="100" class="form-control" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label>Mensagem *</label>
                        <textarea maxlength="5000" name="message" data-msg-required="Please enter your message." rows="10" class="form-control" required></textarea>
                    </div>
                </div>

                <input type=submit value="Enviar" class="btn btn-primary">

                <?php
                    if((isset($_GET['emailsend'])) && ($_GET['emailsend'] == 'sucess')){?>
                    <p class="text-danger font-weight-bold" style="font-size: 20px; margin-top: 20px;">Recebemos sua mensagem em breve retornaremos</p>
                <?php }?>

            </form> <!--Final do primeiro formulario-->
        </div>


        <div class="col-12 col-lg-6">
            <h2 class="contato-trabalhe-conosco">Trabalhe Conosco</h2>
            <form id="contactFormtrabalhe" action="envio-curriculo.php" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col">
                        <label>Nome Completo *</label>
                        <input type="text" name="nome" data-msg-required="Por favor, coloque o nome completo" maxlength="100" class="form-control" required>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col">
                        <label>E-mail *</label>
                        <input type="email" name='email' data-msg-required="Por favor, coloque um e-mail." data-msg-email="Por favor, coloque um endereço de e-mail válido." maxlength="100" class="form-control" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label>Telefone *</label>
                        <input type="text" name="telefone" data-msg-required="Por favor, coloque o telefone" maxlength="100" class="form-control" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label>Área de Interesse</label>
                        <select class="form-control mb-3" name="interesse">
                            <option value="" selected=""></option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Financeiro">Financeiro</option>
                            <option value="Informatica e Tecnologia">Informatica e Tecnologia</option>
                            <option value="Operacional">Operacional</option>
                            <option value="Recursos Humanos">Recursos Humanos</option>
                            <option value="Serviços Gerais">Serviços Gerais</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label>Local de Interesse</label>
                        <select class="form-control mb-3" name="localinteresse">
                            <option value="" selected=""></option>
                            <option value="SP - MATRIZ - SP">SP - MATRIZ</option>
                            <option value="HOME-OFFICE">HOME-OFFICE</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label>Você procura vaga para estágio? *</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="opcaoRadios" id="Sim" checked="">
                                    Sim
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="opcaoRadios" id="Nao">
                                    Não
                                </label>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label>Enviar currículo</label>
                        <input type="file" name='uploaded_file' id='uploaded_file' multiple='multiple' accept=".doc,.docx,.txt,.pdf" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <label>Mensagem *</label>
                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control alinhamento" name="message" required></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col">
                        <input type="submit" value="Enviar" name="upload" class="btn btn-primary">
                    </div>
                </div>
                <?php
                    if((isset($_GET['emailworksend'])) && ($_GET['emailworksend'] == 'sucess1')){?>
                    <p class="text-danger font-weight-bold" style="font-size: 20px; margin-top: 20px;">Recebemos sua mensagem em breve retornaremos</p>
                <?php }?>
            </form>
        </div>
    </div>
</div>

<script src="js/widget.js"></script>

<?php
    include_once "includes/rodape.php";
    include_once "includes/script_final.php";
?>
