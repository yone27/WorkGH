<?php
        error_reporting(0);
        include_once("xpresentationlayer.php");        
        include_once("xclient.php");
        $serviceCall = new xclient("");

        xpresentationLayer::startHtml("esp");
        xpresentationLayer::buildHead("Xatoxi");
        xpresentationLayer::buildHeaderXatoxi();


        xpresentationLayer::startMain();

        xpresentationLayer::startForm("idForm");
        xpresentationLayer::startAsideOneColumn();        
        xpresentationLayer::buildInputMedium("Usuario", "User", "User", "");
        xpresentationLayer::buildInputMedium("Email", "Email", "Email", "Ejemplo@gmail.com");

        $data_jsonAreaPhone = $serviceCall->mgetallcountrydetaill();
        $data_jsonCodePhone = $serviceCall->mgetcellphoneareacodel("58");
        //print_r($data_json);
        xpresentationLayer::buildPhoneComplete("Movil", "CodeCountry", "codeArea",  "Phone", "CodeCountry", "codeArea",  "Phone", $data_jsonAreaPhone, $data_jsonCodePhone, "selectValorPhone('CodeCountry', 'codeArea', 'ajax.php?cond=CodeCountrycodeArea')");
        xpresentationLayer::buildButtonCenter("Aceptar");
        xpresentationLayer::endAside();
        xpresentationLayer::endForm();

        xpresentationLayer::endMain();
        
        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>