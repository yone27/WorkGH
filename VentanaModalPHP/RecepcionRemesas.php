<?php
        include_once("xpresentationlayer.php");
        xpresentationLayer:: startHtml("esp");
        xpresentationLayer:: buildHead("Xatoxi");
        xpresentationLayer:: buildHeaderXatoxi();


        xpresentationLayer::startMain();
        xpresentationLayer::startFirtsSection();
        xpresentationLayer::buildOptionGrid("Recepción Remesas");
        xpresentationLayer::endSection();

        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputTextGrid("Clave Remesa", "remittances", "remittances", "");
        xpresentationLayer::buildSelectJson("Forma Recepción", "formRecepcion", "formRecepcion", "", "", "");
        //Cambiar en bs
        xpresentationLayer::buildSelectJson("Cuenta Bancaria", "bankAccount", "bankAccount", "", "", "");
        //Retirar en efectivo
        xpresentationLayer::buildSelectJson("Estados", "state", "state", "", "", "");
        xpresentationLayer::buildSelectJson("Sucursales a Nivel Nacional", "branchOffices", "branchOffices", "", "", "");
        xpresentationLayer::endSection();        

        xpresentationLayer::buildSectionPin();   
        xpresentationLayer::endMain();

        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>