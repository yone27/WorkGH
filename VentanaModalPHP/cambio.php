<?php
        error_reporting(0);
        include_once("xpresentationlayer.php");        
        include_once("xclient.php");
        $serviceCall = new xclient("");

        include_once("xpresentationlayer.php");
        xpresentationLayer:: startHtml("esp");
        xpresentationLayer:: buildHead("Xatoxi");
        xpresentationLayer:: buildHeaderXatoxi();


        xpresentationLayer::startMain();
        xpresentationLayer::startFirtsSection();
        xpresentationLayer::buildOptionGrid("Cambio");
        xpresentationLayer::endSection();

        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputNumberGrid("Monto", "Amount", "Amount", "0,00");
        xpresentationLayer::buildInputNumberGrid("Banco", "Bank", "Bank", "");
        xpresentationLayer::buildInputNumberGrid("Nro. Referencia", "Reference", "Reference", "");
        xpresentationLayer::buildInputNumberGrid("Routing", "Routing", "Routing", "");
        
        xpresentationLayer::endSection();       


        xpresentationLayer::buildSectionPin();
        xpresentationLayer::endMain();

        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>
