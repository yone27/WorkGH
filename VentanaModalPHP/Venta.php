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
        xpresentationLayer::buildInputNumberGrid("Monto", "amount", "amount", "0.00");
        xpresentationLayer::buildSelectJson("Divisa", "currency", "currency", "", "", "");
        xpresentationLayer::buildSelectJson("Debitar de", "payIn", "payIn", "", "", "");
        xpresentationLayer::buildSelectJson("Abonar en", "payForm", "payForm", "", "", "");
        xpresentationLayer::buildInputTextDisable("Tasa de Cambio", "amountChange", "amountChange", "0.00");
        xpresentationLayer::buildInputTextDisable("Monto a recibir Bs.", "amountRecieve", "amountRecieve", "0.00");
        xpresentationLayer::buildSelectLarge("Cta. Receptora", "provider", "provider", "", "", "");
        xpresentationLayer::endSection();        
        xpresentationLayer::buildSectionPin();   
        xpresentationLayer::endMain();

        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>