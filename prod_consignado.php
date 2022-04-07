<?php
    include_once "includes/topo.php";
?>

	<title>Empréstimo Consignado</title>

<?php
    include_once "includes/header.php";
?>
<div class="container-fluid">
    <div class="row">
        <img src="assets/g44.png" class="d-none d-md-block d-lg-block d-xl-block img-consignado" alt="Imagem Consignado">
        <h1 class="">EMPRÉSTIMO<br>CONSIGNADO</h1>
        <h2 class="">Consignado INSS</h2>
        <p class="">&nbsp;&nbsp;Empréstimo Consignado para Aposentados e Pensionistas INSS com desconto em folha de pagamento.</p><br><br>

        <!--<h5 class="titulo-parceiros-consignado">Confira nossos parceiros:</h5>

        <div class="row">
            <img src="logos_banco/SAFRA1.png" alt="Banco Safra" class="img-parceiros col-5 offset-sm-1 col-sm-5 offset-lg-1 offset-xl-4">
            <img src="logos_banco/pan.png" alt="Banco Pan" class="img-parceiros col-5 col-sm-5 offset-lg-1">
            <img src="logos_banco/ITAU.png" alt="Itaú" class="img-parceiros col-5 offset-sm-1 col-sm-5 offset-lg-1">
            <img src="logos_banco/BMG.png" alt="Banco BMG" class="img-parceiros-1 col-5 col-sm-5 offset-lg-1 offset-xl-4">
            <img src="logos_banco/BRADESCO.png" alt="Bradesco" class="img-parceiros-1 col-5 offset-sm-1 col-sm-5 offset-lg-1">
            <img src="logos_banco/C6.png" alt="C6 Bank" class="img-parceiros-1 col-5 col-sm-5 offset-lg-1">
            <img src="logos_banco/CETELEM.png" alt="Cetelem" class="img-parceiros-1 col-5 offset-sm-1 col-sm-5 offset-lg-1 offset-xl-4">
            <img src="logos_banco/logo-correspondente.png" alt="Daycoval" class="img-parceiros-1 col-5 col-sm-5 offset-lg-1">
        </div>-->
    </div>
</div>

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "100962665080554", // Facebook page ID
            whatsapp: "+55(11) 98464-2860", // WhatsApp number
            call_to_action: "", // Call to action
            button_color: "#1f3f6d", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

<?php
    include_once "includes/rodape.php";
    include_once "includes/script_final.php";
?>
