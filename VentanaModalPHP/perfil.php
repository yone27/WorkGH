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
        xpresentationLayer::buildOptionGrid("Perfil");
        xpresentationLayer::endSection();

        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputNumberGrid("P. Nombre", "firstName", "firstName", "");
        xpresentationLayer::buildInputNumberGrid("S. Nombre", "secondName", "secondName", "", "", "");
        xpresentationLayer::buildInputNumberGrid("P. Apellido", "firstSurname", "firstSurname", "", "", "");
        xpresentationLayer::buildInputNumberGrid("S. Apellido", "secondSurname", "secondSurname", "", "", "");
        xpresentationLayer::endSection();       

        $data_json = $serviceCall->mgetiddocumenttypel();
        xpresentationLayer::buildSectionDocument("T. Doc.", "Documento", "Fec. Nacimiento", "typeDocument", "document", "birthdate", "typeDocument", "document", "birthdate", $data_json); 
        
        xpresentationLayer::buildTextArea("Direccion", "Direction","Direction", "", "20");
        xpresentationLayer::buildInputTextLargeCenter("Cuenta bancaria", "BankAccount","BankAccount","", 20);
        xpresentationLayer::buildButtonCenter("Aceptar");
        xpresentationLayer::endMain();

        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>
