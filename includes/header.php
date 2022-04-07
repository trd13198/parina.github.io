<nav id="row">
        <div  class="topbar col-12 offset-md-5 col-md-7 offset-lg-7 col-lg-5">
            <div class="container clearfix">
                <ul class="list-unstyled list-inline d-inline">
                    <li class="list-inline-item"><a href="mailto:contato@parinacred.com.br" class="email-top"><i class="fa fa-envelope"></i> contato@parinacred.com.br</a></li>
                    <li class="list-inline-item"><a href="tel:+551142700081" class="tel-top"><i class="fa fa-phone"></i>(11) 4270-0081</a></li>
                    <li class="list-inline-item"><a href="tel:+5511984642860" class="tel-top"><i class="fa fa-whatsapp"></i>(11) 98464-2860</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="sticky-top">
        <nav class="navbar navbar-expand-md navbar-light navbar-static-top primary">
        
            <a href="index.php" class="logo-header navbar-brand d-inline"><img alt="parina" src="img/parina.png" class="fotologo"></a>
    
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navegacao">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navegacao">
                
                <ul class="navbar-nav list-unstyled ml-auto mr-auto">
                    <li class="nav-item dropdown item-drop">
                        <a href="" class="nav-link dropdown-toggle institucional-txt" data-toggle="dropdown">INSTITUCIONAL</a>
                        <div class="dropdown-menu institucional-menu">
                            <a class="dropdown-item" href="quem-somos.php">Quem Somos</a>
                            <a class="dropdown-item" href="matriz.php">Matriz</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown item-drop">
                        <a href="" class="nav-link dropdown-toggle produtos-txt" data-toggle="dropdown">PRODUTOS</a>
                        <div class="dropdown-menu produtos-menu">
                            <a class="dropdown-item" href="fgts.php">FGTS</a>
                            <a class="dropdown-item" href="prod_consignado.php">Empréstimo Consignado</a>
                            <a class="dropdown-item" href="prod_cartao_de_credito.php">Cartão Consignado</a>
                            <a class="dropdown-item" href="prod_seguro.php">Seguros</a>
                        </div>
                    </li>

                    <li class="nav-item item-drop">
                        <a class="nav-link blog-txt" href="blog.php">BLOG</a>
                    </li>

                    <li class="nav-item item-drop">
                        <a class="nav-link contato-txt" href="contato.php">CONTATO</a>
                    </li>

                    <span class="target"></span>

                    <li class="nav-item item-drop">
                        <a href="proposta.php" class="nav-link botao-proposta">QUERO UMA PROPOSTA</a>
                    </li>

                    <li class="nav-item social-icons">
                        <a href="https://www.facebook.com/Parina-Cred-100962665080554" target="_blank"><img src="img/facebook.png" class="logo-facebook"></img></a>
                        <a href="https://instagram.com/parinacred" target="_blank"><img src="img/instagram.png" class="logo-insta"></img></a>
                        <a href="https://www.linkedin.com/company/parina-cred" target="_blank"><img src="img/linkedin.png" class="logo-lnk"></img></a>
                        <a href="https://www.youtube.com/channel/UCeQCBZKxjFFk3Sl1fmJuLSQ" target="_blank"><img src="img/youtube.png" class="logo-yt"></img></a>
                    </li>
                </ul>
            </div>
            
        </nav>
    </header>
    
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
  <script type="text/javascript">
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 1) {               // se rolar 1px ativa o evento
            $(".sticky-top").addClass("ativo");    //coloca a classe "ativo" no id=menu
          } else {
            $(".sticky-top").removeClass("ativo"); //se for menor que 1px retira a classe "ativo" do id=menu
          }
        });
  </script>
