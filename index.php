<?php
    include_once "includes/topo.php";
?>

    <title>Parina</title>
    <!-- Start cookieyes banner --> <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/4aa51677567747a39ba59068/script.js"></script> <!-- End cookieyes banner -->
    
<?php
    include_once "includes/header.php";
    include_once "includes/carrousel.php"; 
    include_once "includes/imgs.php"; 
    include_once "includes/propag.php";
    include_once "includes/parceiros.php";
    include_once "includes/clientes.php";
    include_once "includes/rodape.php";
    include_once "includes/script_final.php";
?>

<!------------------------------------------------>
<!--------------- POP-UP ------------------------->
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
    .pedido {
    margin-top: -300px;
    margin-left: 40%;
    margin-right: 40%;
    margin-bottom: 100px;
}

.modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    opacity:1;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    /* pointer-events: none; */
}

.modalDialog:target {
    opacity: 0;
    pointer-events: auto;
}

.modalDialog>div {
    width: 400px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #fff;
}

.closeModal {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}

.closeModal:after {
    content: "\d7";
}

.closeModal:hover {
    background: #f00;
}


h2.popup-titulo{
    font-size: 40px;
    color: #1F3F6D;
    text-align: center;
    margin-bottom: 1em;
}
</style>
<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
<!-- um texto aleatorio para ver se esta tudo gg -->
<div id="openModal" class="modalDialog">
    <div class="col-8">
        <div id="#openModal" title="Close" class="closeModal"></div>
            <!-- Conteúdo do Modal -->
            <h2 class="popup-titulo">AVISO IMPORTANTE</h2>
            <p style="text-align: center; margin-top: 1em;">A PARINA NÃO SOLICITA QUALQUER TIPO DE DEPÓSITO OU PAGAMENTO PARA LIBERAÇÃO DE CRÉDITO</p><br><br>
            <p style="text-align: center;"><strong>PREVINA-SE DESSE GOLPE</strong></p>
            <hr>
            <!-- Conteúdo do Modal -->
        
    </div>
</div>
<script src="js/custom.js"></script>
<!---------------------------------------->
<script src="js/widget.js"></script>
