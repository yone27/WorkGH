<?php
        error_reporting(0);
        include_once("xpresentationlayer.php");
        xpresentationLayer:: startHtml("esp");
        xpresentationLayer:: buildHead("Xatoxi");
        xpresentationLayer:: buildHeaderXatoxi();

        include_once("xclient.php");
        $test = new xclient("");
        






        xpresentationLayer::startMain();
        xpresentationLayer::startFirtsSection();        
        xpresentationLayer::buildOptionGrid("Billetera");
        xpresentationLayer::buildOptionGrid("Encomienda");
        xpresentationLayer::buildOptionGrid("Transferencia");
        xpresentationLayer::endSection();

        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputNumberGrid("Monto", "Amount", "Amount", "0.00");
        $data_json = $test->mgetcountryl();
        xpresentationLayer::buildSelectJson("País", "Country", "Country", $data_json, "", "", "");
        $data_json = $test->mgetproviderl();
        xpresentationLayer::buildSelectJson("Proveedor", "Provider", "Provider", "", "", "", "");
        xpresentationLayer::buildSelectJson("Moneda", "Currency", "Currency", "", "", "", "");        
        xpresentationLayer::buildSelectJson("Forma de envío", "SendForm", "SendForm", "", "", "", "");   
        xpresentationLayer::buildSelectJson("Forma de pago", "PaidForm", "PaidForm", "", "", "", "");     
        xpresentationLayer::endSection();        
        xpresentationLayer::buildInputTextCenter("Referencia", "Reference", "Reference", "0");
        
        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputTextDisable("Monto a Recibir", "Amount", "Amount", "0.00");
        xpresentationLayer::buildInputTextDisable("Monto", "Country", "Country", "0.00");
        xpresentationLayer::buildSelectJson("Cta. Receptora", "Provider", "Provider", "", "", "", "");
        xpresentationLayer::buildInputTextGrid("Referencia", "Reference", "Reference", "");
        xpresentationLayer::endSection();   
        
        xpresentationLayer::buildTitleBar("BENEFICIARIO");    

        xpresentationLayer::buildSearchUsersCommend("Usuarios", "Users", "Users", "", "", "", "");


        xpresentationLayer::startSectionTwoColumns();
        
        xpresentationLayer::buildInputTextGrid("Primer nombre", "FirstName", "FirstName", "");
        xpresentationLayer::buildInputTextGrid("Segundo nombre", "SecondName", "SecondName", "");
        xpresentationLayer::buildInputTextGrid("Primer apellido", "FirstSurname", "FirstSurname", "");        
        xpresentationLayer::buildInputTextGrid("Segundo apellido", "SecondSurname", "SecondSurname", "");  

        xpresentationLayer::buildInputTextLargeCenter("Direccion", "Direction", "Direction", "");

        xpresentationLayer::buildInputTextGrid("Email", "Email", "Email", "Ejemplo@mail.com");
        xpresentationLayer::buildInputTextGrid("Telefono", "Phone", "Phone", "");
        xpresentationLayer::buildInputTextGrid("Banco", "Bank", "Bank", "", "");        
        xpresentationLayer::buildInputTextGrid("Cuenta", "Account", "Account", "");  

        xpresentationLayer::endSection();   

        xpresentationLayer::buildSectionPin();
        xpresentationLayer::endMain();
        
        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
?>