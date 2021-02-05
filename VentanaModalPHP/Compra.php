 <?php
        error_reporting(0);
        include_once("xpresentationlayer.php");
        include_once("xclient.php");
        $serviceCall = new xclient("");

        xpresentationLayer:: startHtml("esp");
        xpresentationLayer:: buildHead("Xatoxi");
        xpresentationLayer:: buildHeaderXatoxi();


        xpresentationLayer::startMain();
        xpresentationLayer::startFirtsSection();
        xpresentationLayer::buildOptionGrid("Compra Divisa");
        xpresentationLayer::endSection();

        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputNumberGrid("Monto", "Amount", "Amount", "0.00");

        $data_json = $serviceCall->mgetcurrencyl();
        xpresentationLayer::buildSelectJson("Divisa", "Currency", "Currency", $data_json, "", "");
        
        xpresentationLayer::buildSelectJson("Abonar en", "PayIn", "PayIn", "", "", "");
        xpresentationLayer::buildSelectJson("Forma de Pago", "PayForm", "PayForm", "", "", "");
        xpresentationLayer::buildSelectLarge("Cuentas Bancarias Receptoras", "AccountBanks", "AccountBanks", "", "", "");
        xpresentationLayer::endSection();        
        xpresentationLayer::buildSectionPin();   
        xpresentationLayer::endMain();

        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>