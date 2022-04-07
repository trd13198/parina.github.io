<?php
    include_once "includes/topo.php";
?>

	<title>Seguro</title>

<?php
    include_once "includes/header.php";
?>

<div class="container-fluid">
    <div class="row">
        <img src="assets/Grupo 53.png" class="d-none d-md-block d-lg-block d-xl-block foto-seguro" alt="Foto seguro"></div>
        <h1 class="">SEGURO</h1>
        <p class="">&nbsp;&nbsp;Seguro para quitar o saldo devedor do contrato na falta do cliente.</p><br><br>
    </div>
</div>
<!--<h5 class="parceiros-seguro">Confira nossos parceiros:</h5>

<div class="row">
    <img src="logos_banco/pan.png" alt="Banco Pan" class="img-parceiros offset-sm-1 col-sm-2 offset-lg-4 offset-xl-4">
    <img src="logos_banco/ITAU.png" alt="Itaú" class="img-parceiros col-sm-2 offset-lg-1">
    <img src="logos_banco/BMG.png" alt="Banco BMG"class="img-parceiros-1 offset-sm-1 col-sm-2 offset-lg-4 offset-xl-4">
    <img src="imagens/1238868211899504027_1238868211899504027-1.jpg" class="img-parceiros col-sm-2 offset-lg-1">
</div>-->

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
