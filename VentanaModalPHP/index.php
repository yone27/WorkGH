<?php

        include_once("xpresentationlayer.php");
        xpresentationLayer:: startHtml("esp");
        xpresentationLayer:: buildHead("Xatoxi");
        xpresentationLayer:: buildHeaderPrincipalXatoxi();


        xpresentationLayer::startMain();
        

        xpresentationLayer::startInputModal();
        xpresentationLayer::buildPinPrincipalModal("PIN", 4, 4);
        xpresentationLayer::endInputModal();

        xpresentationLayer::startSectionTwoColumns();        
        xpresentationLayer::buildMenuOptionGrid("envio.png","ENVIO", true);
        xpresentationLayer::buildMenuOptionGrid("recepcion.png","RECEPCION", true);
        xpresentationLayer::buildMenuOptionGrid("venta.png","VENTA", true);
        xpresentationLayer::buildMenuOptionGrid("compra.png","COMPRA", true);
        xpresentationLayer::buildMenuOptionComplete("images.png","PERFIL", true);  
        xpresentationLayer::endSection();   

        xpresentationLayer::endMain();

        xpresentationLayer::buildFooterXatoxi();
        xpresentationLayer:: endHtml();
?>