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
        xpresentationLayer::buildInputNumberCenter("MONTO", "Amount", "Amount", "0.00");
        xpresentationLayer::buildTitleBar("BENEFICIARIO");
        xpresentationLayer::buildSearchUsersWallet("Usuarios", "Users", "Users", "", "", "", "");
        xpresentationLayer::buildSectionPin();
        xpresentationLayer::endDiv();
        //Fin seccion de billetera

        //Comiendo seccion Encomienda
        xpresentationLayer::startContentofOption("Encomienda");
        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputNumberGrid("Monto", "Amount", "Amount", "0.00");

        $data_json = $serviceCall->mgetcountryl();
        xpresentationLayer::buildSelectJson("País", "Country", "Country", $data_json, "", "selectValor('Country', 'Provider', 'ajax.php?cond=CountryProvider')");
       
        xpresentationLayer::buildSelectJson("Proveedor", "Provider", "Provider", "", "", "");

        $data_json = $serviceCall->mgetcurrencyl();
        xpresentationLayer::buildSelectJson("Moneda", "Currency", "Currency", $data_json, "", "");     
        
        $data_json = $serviceCall->mgetclearencetypel();
        xpresentationLayer::buildSelectJson("Entrega", "SendForm", "SendForm", $data_json, "", ""); 
        xpresentationLayer::buildSelectJson("Forma de pago", "PaidForm", "PaidForm", $data_json, "", "");     

        xpresentationLayer::endSection();        
        xpresentationLayer::buildInputTextCenter("Referencia", "Reference", "Reference", "0");
        
        xpresentationLayer::startSectionTwoColumns();
        xpresentationLayer::buildInputTextDisable("Tasa de Cambio", "Amount", "Amount", "0.00");
        xpresentationLayer::buildInputTextDisable("Monto Bs", "Country", "Country", "0.00");
        xpresentationLayer::buildSelectJson("Cta. Receptora", "Provider", "Provider", "", "", "");
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

        xpresentationLayer::endDiv();
        //Fin seccion de Encomienda

        //Comiendo seccion Transferencia
        xpresentationLayer::startContentofOption("Transferencia");
        

        xpresentationLayer::endDiv();
        //Fin seccion de Transferencia
        xpresentationLayer::endDiv();
        xpresentationLayer::endDiv();
        
        xpresentationLayer::endMain();

        xpresentationLayer::buildFooterXatoxi();

        xpresentationLayer::endSection();
        xpresentationLayer:: endHtml();
