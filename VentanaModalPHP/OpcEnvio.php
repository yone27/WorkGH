<?php
        include_once("xpresentationlayer.php");
        xpresentationLayer:: startHtml("esp");
        xpresentationLayer:: buildHead("Xatoxi");
        xpresentationLayer:: buildHeaderXatoxi();


        xpresentationLayer::startMain();

        xpresentationLayer::startSectionOpt();
        xpresentationLayer::buildOptionsPrincipal("Billetera");
        xpresentationLayer::buildOptionsPrincipal("Encomienda");
        xpresentationLayer::buildOptionsPrincipal("Transferencia");
        xpresentationLayer::endSection();
        
        xpresentationLayer::endMain();

        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>