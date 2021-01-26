<?php
        include_once("xpresentationlayer.php");
        xpresentationLayer:: startHtml("esp");
        xpresentationLayer:: buildHead("Xatoxi");
        xpresentationLayer:: buildHeaderXatoxi();


        xpresentationLayer::startMain();
        xpresentationLayer::startFirtsSection();
        xpresentationLayer::buildOptionGrid("Billetera");
        xpresentationLayer::buildOptionGrid("Encomienda");
        xpresentationLayer::buildOptionGrid("Transferencia");
        xpresentationLayer::endSection();

        xpresentationLayer::buildInputNumberCenter("MONTO", "Amount", "Amount", "0.00");
        xpresentationLayer::buildTitleBar("BENEFICIARIO");
        xpresentationLayer::buildSearchUsersWallet("Usuarios", "Users", "Users", "", "", "", "");
        xpresentationLayer::buildSectionPin();
        xpresentationLayer::endMain();
        
        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>