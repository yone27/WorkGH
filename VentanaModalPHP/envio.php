<?php
        error_reporting(0);
        include_once("xpresentationlayer.php");        
        include_once("xclient.php");
        $serviceCall = new xclient("");

        xpresentationLayer::startHtml("esp");
        xpresentationLayer::buildHead("Xatoxi");
        xpresentationLayer::buildHeaderXatoxi();


        xpresentationLayer::startMain();

        xpresentationLayer::startSectionOpt();
        xpresentationLayer::buildOptionsPrincipal("Billetera", "Billetera");
        xpresentationLayer::buildOptionsPrincipal("Encomienda", "Encomienda");
        xpresentationLayer::buildOptionsPrincipal("Transferencia", "Transferencia");
        xpresentationLayer::endSection();

        xpresentationLayer::startAnimationMenu();
        xpresentationLayer::startSectionButtos();
        xpresentationLayer::buildOptionGrid("Billetera", "Billetera");
        xpresentationLayer::buildOptionGrid("Encomienda", "Encomienda");
        xpresentationLayer::buildOptionGrid("Transferencia", "Transferencia");
        xpresentationLayer::endSection();
        xpresentationLayer::startContentSection();

        //Toda la seccion de billetera
        xpresentationLayer::startContentofOption("Billetera");
        xpresentationLayer::buildInputNumberCenter("MONTO", "amountWallet", "amountWallet", "0.00");
        xpresentationLayer::buildTitleBar("BENEFICIARIO");
        xpresentationLayer::buildSearchUsersWallet("Usuarios", "users", "users", "", "", "", "");
        xpresentationLayer::buildSectionPin();
        xpresentationLayer::endDiv();
        //Fin seccion de billetera

        //Comiendo seccion Encomienda
        xpresentationLayer::startContentofOption("Encomienda");
        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputNumberGrid("Monto", "amountCommend", "amountCommend", "0.00");

        $data_json = $serviceCall->mgetcountryl();
        xpresentationLayer::buildSelectJson("País", "countryCommend", "countryCommend", $data_json, "", "selectValorforId('countryCommend/providerCommend', 'ajax.php?cond=mgetproviderl')");
       
        xpresentationLayer::buildSelectJson("Proveedor", "providerCommend", "providerCommend", "", "", "");

        $data_json = $serviceCall->mgetcurrencyl();
        xpresentationLayer::buildSelectJson("Moneda", "currencyCommend", "CucurrencyrrencyCommend", $data_json, "", "");     
        
        $data_json = $serviceCall->mgetclearencetypel();
        xpresentationLayer::buildSelectJson("Entrega", "sendFormCommend", "sendFormCommend", $data_json, "", ""); 
        xpresentationLayer::buildSelectJson("Forma de pago", "paidFormCommend", "paidFormCommend", $data_json, "", "");     

        xpresentationLayer::endSection();        
        xpresentationLayer::buildInputTextCenter("Referencia", "referenceCommend", "referenceCommend", "0");
        
        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputTextDisable("Tasa de Cambio", "exchangeRateCommend", "exchangeRateCommend", "0.00");
        xpresentationLayer::buildInputTextDisable("Monto Bs", "countryCommend", "countryCommend", "0.00");
        xpresentationLayer::buildSelectJson("Cta. Receptora", "providerCommend", "providerCommend", "", "", "");
        xpresentationLayer::buildInputTextGrid("Referencia", "referenceCommend", "referenceCommend", "");
        xpresentationLayer::endSection();   
        
        xpresentationLayer::buildTitleBar("BENEFICIARIO");    

        xpresentationLayer::buildSearchUsersCommend("Usuarios", "usersCommend", "usersCommend", "", "", "", "");


        xpresentationLayer::startSectionTwoColumns();
        
        xpresentationLayer::buildInputTextGrid("Primer nombre", "firstNameCommend", "firstNameCommend", "");
        xpresentationLayer::buildInputTextGrid("Segundo nombre", "secondNameCommend", "secondNameCommend", "");
        xpresentationLayer::buildInputTextGrid("Primer apellido", "firstSurnameCommend", "firstSurnameCommend", "");        
        xpresentationLayer::buildInputTextGrid("Segundo apellido", "secondSurnameCommend", "secondSurnameCommend", "");  

        xpresentationLayer::buildInputTextLargeCenter("Direccion", "directionCommend", "directionCommend", "");

        xpresentationLayer::buildInputTextGrid("Email", "emailCommend", "emailCommend", "Ejemplo@mail.com");
        xpresentationLayer::buildInputTextGrid("Telefono", "phoneCommend", "phoneCommend", "");
        xpresentationLayer::buildInputTextGrid("Banco", "bankCommend", "bankCommend", "", "");        
        xpresentationLayer::buildInputTextGrid("Cuenta", "accountCommend", "accountCommend", "");  

        xpresentationLayer::endSection();   

        xpresentationLayer::buildSectionPin();

        xpresentationLayer::endDiv();
        //Fin seccion de Encomienda

        //Comiendo seccion Transferencia
        xpresentationLayer::startContentofOption("Transferencia");
        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputNumberGrid("Monto", "amountTransfer", "amountTransfer", "0.00");

        $data_json = $serviceCall->mgetcountryl();
        xpresentationLayer::buildSelectJson("País", "countryTransfer", "countryTransfer", $data_json);

        $data_json = $serviceCall->mgetcurrencyl();
        xpresentationLayer::buildSelectJson("Moneda", "currencyTransfer", "currencyTransfer", $data_json, "", "");     
        
        $data_json = $serviceCall->mgetclearencetypel();
        xpresentationLayer::buildSelectJson("Forma de pago", "paidFormTransfer", "paidFormTransfer", $data_json, "", "");     
        xpresentationLayer::buildInputTextDisable("Tasa de Cambio", "amountTransfer", "amountTransfer", "0.00");
        xpresentationLayer::buildInputTextDisable("Monto Bs", "countryTransfer", "countryTransfer", "0.00");
        xpresentationLayer::buildSelectJson("Cta. Receptora", "providerTransfer", "providerTransfer", "", "", "");
        xpresentationLayer::buildInputTextGrid("Referencia", "referenceTransfer", "referenceTransfer", "");     
        xpresentationLayer::endSection();    
        
        xpresentationLayer::buildTitleBar("BENEFICIARIO");    

        xpresentationLayer::buildSearchUsersCommend("Usuarios", "usersTransfer", "usersTransfer", "", "", "", "");


        xpresentationLayer::startSectionTwoColumns();
        
        xpresentationLayer::buildInputTextGrid("Primer nombre", "firstNameTransfer", "firstNameTransfer", "");
        xpresentationLayer::buildInputTextGrid("Segundo nombre", "secondNameTransfer", "secondNameTransfer", "");
        xpresentationLayer::buildInputTextGrid("Primer apellido", "firstSurnameTransfer", "firstSurnameTransfer", "");        
        xpresentationLayer::buildInputTextGrid("Segundo apellido", "secondSurnameTransfer", "secondSurnameTransfer", "");  

        xpresentationLayer::buildInputTextLargeCenter("Direccion", "directionTransfer", "directionTransfer", "");

        xpresentationLayer::buildInputTextGrid("Email", "emailTransfer", "emailTransfer", "Ejemplo@mail.com");
        xpresentationLayer::buildInputTextGrid("Telefono", "phoneTransfer", "phoneTransfer", "");
        xpresentationLayer::buildInputTextGrid("Banco", "bankTransfer", "bankTransfer", "", "");        
        xpresentationLayer::buildInputTextGrid("Cuenta", "accountTransfer", "accountTransfer", "");  
        xpresentationLayer::buildInputTextGrid("Pais Banco", "countryBankTransfer", "countryBankTransfer", "", "");        
        xpresentationLayer::buildInputTextGrid("Ciudad Banco", "cityBankTransfer", "cityBankTransfer", "");  
        xpresentationLayer::buildInputTextLargeCenter("Direccion Banco", "bankDirectionTransfer", "providerTransfer", "");
        xpresentationLayer::buildInputTextLargeCenter("ABA / SWIFT/ IBAN", "providerTransfer", "bankDirectionTransfer", "");
        xpresentationLayer::buildInputTextGrid("Banco Intermediario", "bankTransferIntermediary", "bankTransferIntermediary", "", "");        
        xpresentationLayer::buildInputTextGrid("Cuenta Intermediario", "accountTransferIntermediary", "accountTransferIntermediary", "");  
        xpresentationLayer::buildInputTextGrid("Pais Intermediario", "countryBankTransferIntermediary", "countryBankTransferIntermediary", "", "");        
        xpresentationLayer::buildInputTextGrid("Ciudad Intermediario", "cityBankTransferIntermediary", "cityBankTransferIntermediary", "");  
        xpresentationLayer::buildInputTextLargeCenter("Direccion Banco Intermediario", "bankDirectionTransferIntermediary", "bankDirectionTransferIntermediary", "");
        xpresentationLayer::buildInputTextLargeCenter("ABA / SWIFT/ IBAN Intermediario", "providerIntermediary", "providerIntermediary", "");
        xpresentationLayer::endSection();   

        xpresentationLayer::buildSectionPin();

        xpresentationLayer::endDiv();
        //Fin seccion de Transferencia
        xpresentationLayer::endDiv();
        xpresentationLayer::endDiv();
        
        xpresentationLayer::endMain();

        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
