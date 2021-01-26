<?php
        include_once("xpresentationlayer.php");
        xpresentationLayer:: startHtml("esp");
        xpresentationLayer:: buildHead("Xatoxi");
        xpresentationLayer:: buildHeaderXatoxi();


        xpresentationLayer::startMain();

        xpresentationLayer::startAsideOneColumn();        
        xpresentationLayer::buildInputMedium("Usuario", "User", "User", "");
        xpresentationLayer::buildInputMedium("Email", "Email", "Email", "Ejemplo@gmail.com");

        xpresentationLayer::buildPhoneComplete("Movil", "IdPhoneCountry", "IdPhoneCountry",  "", "", "");
        xpresentationLayer::endAside();

        xpresentationLayer::endMain();
        
        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>