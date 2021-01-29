<?php
        error_reporting(0);
        include_once("xpresentationlayer.php");
        xpresentationLayer:: startHtml("esp");
        xpresentationLayer:: buildHead("Xatoxi");
        xpresentationLayer:: buildHeaderXatoxi();


        xpresentationLayer::startMain();

        xpresentationLayer::startForm("idForm");
        xpresentationLayer::startAsideOneColumn();        
        xpresentationLayer::buildInputMedium("Usuario", "User", "User", "");
        xpresentationLayer::buildInputMedium("Email", "Email", "Email", "Ejemplo@gmail.com");

        xpresentationLayer::buildPhoneComplete("Movil", "IdPhoneCountry", "IdPhoneCountry",  "", "", "");
        xpresentationLayer::buildButtonCenter("Registrar");
        xpresentationLayer::endAside();
        xpresentationLayer::endForm();

        xpresentationLayer::endMain();
        
        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>