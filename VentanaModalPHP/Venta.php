<?php
        error_reporting(0);
        include_once("xpresentationlayer.php");
        xpresentationLayer:: startHtml("esp");
        xpresentationLayer:: buildHead("Xatoxi");
        xpresentationLayer:: buildHeaderXatoxi();


        xpresentationLayer::startMain();
        xpresentationLayer::startFirtsSection();
        xpresentationLayer::buildOptionGrid("Venta Divisa");
        xpresentationLayer::endSection();

        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputNumberGrid("Monto", "Amount", "Amount", "0.00");
        xpresentationLayer::buildSelectJson("Divisa", "Currency", "Currency", "", "", "");
        xpresentationLayer::buildSelectJson("Debitar de", "PayIn", "PayIn", "", "", "");
        xpresentationLayer::buildSelectJson("Abonar en", "PayForm", "PayForm", "", "", "");
        xpresentationLayer::buildInputTextDisable("Tasa de Cambio", "Amount", "Amount", "0.00");
        xpresentationLayer::buildInputTextDisable("Monto a recibir Bs.", "Country", "Country", "0.00");
        xpresentationLayer::buildSelectLarge("Cta. Receptora", "Provider", "Provider", "", "", "");
        xpresentationLayer::endSection();        
        xpresentationLayer::buildSectionPin();   
        xpresentationLayer::endMain();

        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>