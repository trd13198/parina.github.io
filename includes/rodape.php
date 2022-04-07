<footer class="mt-4" id="footer">
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-3">
            <ul>
                <li class="list-unstyled">
                    <a href="index.php"><img src="imagens/logo-parina.png" alt="Parina Logo" class="logo-rodape"></a>
                </li>
                <li class="list-unstyled mt-3">
                    <a href="quem-somos.php" class="text-white bg-dark"><h5>Institucional</h5></a>
                </li>
                <li class="list-unstyled mt-3">
                    <a href="prod_consignado.php" class="text-white bg-dark"><h5>Produtos</h5></a>
                </li>
                <li class="list-unstyled mt-3">
                <a href="blog.php" class="text-white bg-dark"><h5>Blog</h5></a>
                </li>
                <li class="list-unstyled mt-3">
                    <a href="contato.php" class="text-white bg-dark"><h5>Atendimento</h5></a>
                </li>
                <li class="list-unstyled mt-3">
                    <a href="contato.php" class="text-white bg-dark"><h5>Trabalhe Conosco</h5></a>
                </li>
                <li class="list-unstyled mt-3">
                    <a href="https://web.whatsapp.com/send?phone=5511984642860" target="_blank" class="text-white bg-dark"><h5>Encontre um Gerente de Negócios</h5></a>
                </li>
                <li class="list-unstyled mt-3">
                    <div class="nav-social">
                        <a href="https://www.facebook.com/Parina-Cred-100962665080554" target="_blank"><img src="imagens/icon_F.png" alt="Facebook" class="icon-facebook d-inline mx-1"></a>
                        <a href="https://instagram.com/parinacred" target="_blank"><img src="imagens/icon_insta.png" alt="Instagram" class="icon-insta mx-1"></a>
                        <a href="https://www.linkedin.com/company/parina-cred" target="_blank"><img src="imagens/icon_Li.png" alt="Linkedin" class="icon-linkedin d-inline mx-1"></a>
                        <a href="https://www.youtube.com/channel/UCeQCBZKxjFFk3Sl1fmJuLSQ" target="_blank"><img src="imagens/icon_YT.png" alt="Youtube" class="icon-yt d-inline mx-1"></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-12 col-lg-4">
            <ul class="footer-2">
                <li class="list-unstyled">
                    <h3 class="text-white servico">Serviços de atendimento ao cliente</h3>
                </li>
                <li class="list-unstyled mt-4">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h5 class="text-white tel-footer">Telefone:</h5>
                            <h5 class="text-white num-tel-footer">(11) 4270-0081</h5>
                        </li>
                        <li class="list-inline-item ml-4">
                            <h5 class="text-white wpp-footer">WhatsApp:</h5>
                            <h5 class="text-white num-wpp-footer">(11) 98464-2860</h5>
                        </li>
                    </ul>  
                </li>
                <li class="list-unstyled mt-3 email">
                    <h3 class="text-white email-footer">E-mail para Contato:</h3>
                    <h3 class="text-white eml-footer">contato@parinacred.com.br</h3>
                </li>
                <li class="list-unstyled mt-3 email">
                    <h3 class="text-white ouvidoria-footer">Ouvidoria:</h3>
                    <h3 class="text-white ouvid-footer">ouvidoria@parinacred.com.br</h3>
                </li>
            </ul>
        </div>
        <div class="col-0 col-lg-4 mt-3 mb-3 d-none d-lg-block d-xl-block form-footer">
            <p class=" text-center txt-form-footer">DÚVIDAS OU SUGESTÕES? NOS ESCREVA!</p>
            <form action="envio-contato-foot.php" method="POST">
                <div class="contact-form row">
                    <div class="form-field col-lg-6">
                        <label for="name" class="label">Seu nome: </label>
                        <input type="text" name="nome" class="input-text">
                    </div>

                    <div class="form-field col-lg-6">
                        <label for="email" class="label">Seu e-mail: </label>
                        <input class="input-text" type="email" name="">
                    </div>

                    <div class="form-field col-lg-6">
                        <label for="fone" class="label">Telefone: </label>
                        <input class="input-text" type="tel" name="">
                    </div>

                    <div class="form-field col-lg-6">
                        <label for="assunto" class="label">Assunto: </label>
                        <input class="input-text" type="text" name="">
                    </div>

                    <div class="form-field col-lg-12">
                        <label for="mensage" class="label">Escreva sua mensagem: </label><br>
                        <input class="input-text" type="text" name="">
                    </div>

                    <div class="form-field col-lg-12">
                        <input type="submit" class="submit-btn" value="ENVIAR MENSAGEM">
                    </div>
                    <?php
                        if((isset($_GET['emailsend'])) && ($_GET['emailsend'] == 'sucess')){?>
                        <p class="text-danger font-weight-bold" style="font-size: 20px; margin-top: 20px;">Email enviado com sucesso!</p>
                    <?php }?>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
    <div style="width: 100%;">
        <p class="font-weight-bold text-center text-white copy">COPYRIGHT &copy <?php echo date('Y')?> - PARINA - Todos os direitos reservados</p>
    </div>
</footer>