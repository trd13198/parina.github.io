<?php
    include_once "includes/topo.php";
?>

	<title>Matriz</title>

<?php
    include_once "includes/header.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="d-none d-md-block d-lg-block d-xl-block">
            <img src="assets/Grupo 51.png" alt="Imagem matriz" class="img-matriz">
        </div>
    
        <div class="">
            <h1 class="titulo-matriz">NOSSA MATRIZ</h1>
            <h2 class="endereco">Rua Riachuelo,326 - Sala 102 - Sé</h2>
            <h2 class="endereco">SÃO PAULO - SP</h2>
            <hr class="linha">
            <span class="fone">Telefone</span>
            <span class="fone1">Whatsapp</span><br>
            <span class="fone-matriz">(11) 3164-1487</span>
            <span class="fone1-matriz">(11) 98464-2860</span>
        </div>
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
