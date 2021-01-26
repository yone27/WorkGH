<?php
    
   session_start();

   /*==========================================================================  
     Class: xpresentationLayer
     Description: MVC View. XATOXI Helper Methods
     Version: 1.0
     Remarks:
     ========================================================================*/

   class xpresentationLayer {

      /*=======================================================================
    Function: startHtml
    Description: HTML TAG START according to language "lang"
        Parameters: $lang <--
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 09:40
    ===================================================================== */
    static function startHtml($lang) {

       echo '<!DOCTYPE html>';
       echo '<HTML lang="'.$lang.'">';
   } // startHtml
  
  /*=======================================================================
    Function: endHtml
    Description: HTML TAG END and add the file .js
        Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 09:40
    ===================================================================== */
    static function endHtml() {
       echo '</HTML>';
       echo  ' <SCRIPT src="js/main.js" language="javascript" type="text/javascript"></SCRIPT>';
   } // endHtml
  
      /*=======================================================================
    Function: buildHead
    Description: HTML Head, rendering "title"
        Parameters: $title <-- name of App
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 09:40
    ===================================================================== */
    
      static function buildHead($title) {
            echo  '<HEAD>';
            echo  ' <TITLE>'.$title.'</TITLE> ';
            echo  ' <META charset="UTF-8"> ';
            echo  ' <META name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> ';
            echo  ' <LINK rel="stylesheet" type="text/css" href="css/style.css"> ';            
            echo  ' </HEAD> ';
    } 
    
    /*=======================================================================
    Function: buildHeaderXatoxi
    Description: Construye el encabezado de la app xatoxi 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildHeaderXatoxi(){
      echo '<HEADER class="header">';
      echo '<DIV class="encabezado encabezado-home">';
      echo '    <IMG class="logo" src="img/home.png" alt="">';
      echo '    <IMG class="logo" src="img/logo.png">';
      echo '</DIV>';
      echo '</HEADER>';
    } // buildHeaderXatoxi

    /*=======================================================================
    Function: buildHeaderPrincipalXatoxi
    Description: Construye el encabezado de la app xatoxi 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildHeaderPrincipalXatoxi(){
      echo '<HEADER class="header">';
		  echo '  <DIV class="encabezado">';
		  echo '  	<IMG class="logo" src="img/logo.png">';
		  echo '  </DIV>';
	    echo '</HEADER>';
    } // buildHeaderPrincipalXatoxi

    /*=======================================================================
    Function: startMain
    Description: Empieza tag MAIN 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function startMain(){
      echo '<MAIN class="wrapper">';
    } // startMain
  
    /*=======================================================================
    Function: endMain
    Description: Finaliza el tag MAIN
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function endMain(){
      echo '</MAIN>';
    } // endMain

    /*=======================================================================
    Function: startFirtsSection
    Description: Start tag SECTION (First Section)
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function startFirtsSection(){
      echo '<SECTION class="grid-3">';
    } //startFirtsSection

    /*=======================================================================
    Function: endSection
    Description: End tag SECTION 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function endSection(){
      echo ' </SECTION>';
    } //endSection

    /*=======================================================================
    Function: buildOptionGrid
    Description: Build options in the first section with a limit of 3 and set the $title name
    Parameters: $title <-- Name Option
                $data_id <-- Para relacionar con las opciones de buildOptionsPrincipal
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildOptionGrid($title, $data_id =""){
      echo '    <ARTICLE class="grid-item grid-item-Opc-2" data-id="'.$data_id.'" >';
      echo '        <H1>'.$title.'</H1>';
      echo '    </ARTICLE>';
    } //buildOptionGrid
    
    /*=======================================================================
    Function: startSectionTwoColumns
    Description: Start Tag SECTION  (SecondSection) with 2 columns
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function startSectionTwoColumns(){
      echo '<SECTION class=" grid-row marginSect grid-2">';
    }//startSectionTwoColumns
    
  /*=======================================================================
    Function: buildInputNumberGrid
    Description: Build Input number with decimals (2 Columns)
    Parameters: $titleLabel <-- Name label
                $idInput <-- Id Input
                $nameInput <-- Name Input
                $placeholder <-- Message Field
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildInputNumberGrid($titleLabel, $idInput, $nameInput, $placeholder=""){
      echo '<ARTICLE class="grid-item-no-border">';
      echo '    <ASIDE>';
      echo '        <DIV class="grid-item-no-border grid-item-2">';
      echo '            <LABEL class="font-Bold">'.$titleLabel.'</LABEL>';
      echo '            <INPUT type="number" name="'.$nameInput.'" id="'.$idInput.'" pattern="[0-9]+([\.,][0-9]+)?" step=".01" placeholder="'.$placeholder.'">';
      echo '        </DIV>';
      echo '    </ASIDE>';
      echo '</ARTICLE>';
    }//buildInputNumberGrid

    /*=======================================================================
    Function: buildInputNumberCenter
    Description: Build Input number with decimals (Center)
    Parameters: $titleLabel <-- Name label
                $idInput <-- Id Input
                $nameInput <-- Name Input
                $placeholder <-- Message Field
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildInputNumberCenter($titleLabel, $idInput, $nameInput ,$placeholder=""){

        echo '<SECTION  class="grid-section grid-row marginSect">';
        echo '    <ASIDE>';
        echo '        <DIV class="grid-item-no-border grid-item-2">';
        echo '            <LABEL class="font-Bold">'.$titleLabel.'</LABEL>';
        echo '            <INPUT type="number" name="'.$nameInput.'" id="'.$idInput.'" pattern="[0-9]+([\.,][0-9]+)?" step=".01" placeholder="'.$placeholder.'">';
        echo '        </DIV>                ';
        echo '    </ASIDE>';
        echo '</SECTION>';
        
    }//buildInputNumberCenter

    /*=======================================================================
    Function: buildInputTextCenter
    Description: Build Input Text with Align Rigth (Center)
    Parameters: $titleLabel <-- Name label
                $idInput <-- Id Input
                $nameInput <-- Name Input
                $placeholder <-- Message Field
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */
    static function buildInputTextCenter($titleLabel, $idInput, $nameInput ,$placeholder=""){

      echo '<SECTION class="marginSect grid-item-2">';
      echo '    <ASIDE>';
      echo '        <DIV class="grid-item-no-border grid-item-2">';
      echo '            <LABEL class="font-Bold">'.$titleLabel.'</LABEL>';
      echo '            <INPUT type="text" name="'.$nameInput.'" id="'.$idInput.'" placeholder="'.$placeholder.'" class="input-radius text-align-Right">';      
      echo '        </DIV>';
      echo '    </ASIDE>';
      echo '</SECTION>';
    
    }//buildInputTextCenter


    /*=======================================================================
    Function: buildSelectJson
    Description: Build Select with Jason 
    Parameters: $title <-- Contiene el titulo del objeto		
                $name <-- Contiele el nombre del objeto html
                $id  <-- Contiele el id del objeto html
                $json <-- Contiele los datos en formato json				
                $showCol <-- Valor de la columna a mostrar de la BD
    Algorithm:
    Remarks:
    Standarized: 2021/01/18 14:00
    ===================================================================== */       
    static function buildSelectJson($title,$name,$id,$json,$showCol="",$event="") {
        echo '<ARTICLE class="grid-item-no-border">';
        echo '<ASIDE>';
        echo '    <LABEL class="font-Bold">'.$title.'</LABEL>';
        echo '</ASIDE>';
        $event = 'onchange="'.$event.'"';        
        echo '<ASIDE class="aside">';
        echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' class="select-width">';
        echo '<OPTION disabled selected>Seleccione</OPTION>';                
        array_walk($json, function(&$value, $key)use(&$showCol) {                        
            if (trim($showCol) == trim($key)){
		        echo '<OPTION value="'.$key.'" selected>'.$value.' </OPTION>';
            }else{			
                echo '<OPTION value="'.$key.'">'.$value.'</OPTION>';                    
            }
        });
        echo '</SELECT>';
        echo '</ASIDE>';	
        echo '</ARTICLE>';		
    }//buildSelectJson

    /*=======================================================================
    Function: buildSelectLarge
    Description: Construlle un select largo, centrado, en un div que centra (ocupa toda la columna)
    Parameters: $title <-- Contiene el titulo del objeto		
                $name <-- Contiele el nombre del objeto html
                $id  <-- Contiele el id del objeto html
                $json <-- Contiele los datos en formato json				
                $showCol <-- Valor de la columna a mostrar de la BD
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 09:00
    ===================================================================== */       
    static function buildSelectLarge($title,$name,$id,$json,$showCol="",$event=""){
      echo '<DIV class="grid-item-no-border grid-item-1 grid-item-2">';
      echo '    <LABEL class="font-Bold">'.$title.'</LABEL>';
      echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' class="select-large">';
      echo '<OPTION disabled selected>Seleccione</OPTION>';                
      array_walk($json, function(&$value, $key)use(&$showCol) {                        
          if (trim($showCol) == trim($key)){
          echo '<OPTION value="'.$key.'" selected>'.$value.' </OPTION>';
          }else{			
              echo '<OPTION value="'.$key.'">'.$value.'</OPTION>';                    
          }
      });
      echo '</SELECT>';
      echo '</DIV>';
    }//buildSelectLarge

    /*=======================================================================
    Function: buildSectionPin
    Description: Construye la tercera seccion con el pin
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 10:12
    ===================================================================== */       
    static function buildSectionPin() {
    echo '<SECTION class="grid-section grid-row marginSect">';
    echo '<FIGURE class="figure-img"><IMG src="img/LOCK.png" alt="" class="img-pin"></FIGURE>';
    echo '</SECTION>';
    }//buildSectionPin

    /*=======================================================================
    Function: buildFooterXatoxi
    Description: Construye el footer de la aplicacion Xatoxi
    Parameters:
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 10:12
    ===================================================================== */       
    static function buildFooterXatoxi() {
    echo '<FOOTER class="main-footer">';
    echo '    <DIV class="pie_pagina">';
    echo '        <H6>by XATOXI</H6>';
    echo '    </DIV>';
    echo '</FOOTER>';
    }//buildFooterXatoxi

    /*=======================================================================
    Function: buildTitleBar
    Description: Build a title bar
    Parameters: $tittle <-- Name Option
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildTitleBar($title){
      echo '<DIV class="section-Titles">';
      echo '    <H1 class="titles">'.$title.'</H1>';
      echo '</DIV>';
    }//buildTitleBar

    /*=======================================================================
    Function: buildSearchUsersWallet
    Description: Build a contact list without option to register a new contact
    Parameters: $name <-- Contiele el nombre del objeto html
                $id  <-- Contiele el id del objeto html
                $json <-- Contiele los datos en formato json				
                $showCol <-- Valor de la columna a mostrar de la BD
                $placeholder <-- Define la mascara o titulo informativo del objeto cuando esta en blanco
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildSearchUsersWallet($name,$id,$json,$showCol="",$event=""){
      echo '<SECTION class="marginSect">';
      echo '    <ASIDE class="aside">';
      echo '       <SELECT name="'.$name.'" id="'.$id.'" '.$event.' class="select-width-user select-appearance-user">';
      echo '       <OPTION disabled selected>Seleccione</OPTION>';                
      array_walk($json, function(&$value, $key)use(&$showCol) {                        
          if (trim($showCol) == trim($key)){
          echo '<OPTION value="'.$key.'" selected>'.$value.' </OPTION>';
          }else{			
              echo '<OPTION value="'.$key.'">'.$value.'</OPTION>';                    
          }
      });
      echo '        </SELECT>';
      echo '        <BUTTON class="btn-contacts btn"><figure><img src="img/address-book.png" alt=""></figure></BUTTON>';
      echo '        <BUTTON class="btn-search btn"><figure><img src="img/search.png" alt=""></figure></BUTTON>';
      echo '    </ASIDE>';
      echo '</SECTION>';
    }//buildSearchUsersWallet

    /*=======================================================================
    Function: buildSearchUsersCommend
    Description: Build a contact list with option to register a new contact
    Parameters: $name <-- Contiele el nombre del objeto html
                $id  <-- Contiele el id del objeto html
                $json <-- Contiele los datos en formato json				
                $showCol <-- Valor de la columna a mostrar de la BD
                $placeholder <-- Define la mascara o titulo informativo del objeto cuando esta en blanco
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildSearchUsersCommend($name,$id,$json,$showCol="",$event=""){
      echo '<ASIDE class="aside">';
      echo '       <SELECT name="'.$name.'" id="'.$id.'" '.$event.' class="select-width-user select-appearance-user">';
      echo '       <OPTION disabled selected>Seleccione</OPTION>';                
      array_walk($json, function(&$value, $key)use(&$showCol) {                        
          if (trim($showCol) == trim($key)){
          echo '<OPTION value="'.$key.'" selected>'.$value.' </OPTION>';
          }else{			
              echo '<OPTION value="'.$key.'">'.$value.'</OPTION>';                    
          }
      });
      echo '        </SELECT>';
      echo '    <BUTTON class="btn-contacts btn">';
      echo '        <FIGURE><IMG src="img/address-book.png" alt=""></FIGURE>';
      echo '    </BUTTON>';
      echo '    <BUTTON class="btn-search btn">';
      echo '        <FIGURE><IMG src="img/search.png" alt=""></FIGURE>';
      echo '    </BUTTON>';
      echo '    <BUTTON class="btn-search btn">';
      echo '        <FIGURE><IMG src="img/plus-square.png" alt=""></FIGURE>';
      echo '    </BUTTON>';
      echo '</ASIDE>';
    }//buildSearchUsersCommend
    
    /*=======================================================================
    Function: buildInputTextGrid
    Description: Input text (2 columns)
    Parameters: $titleLabel <-- Label Name
                $idInput <-- Input Id
                $nameInput <-- Input Nme
                $placeholder <-- Name Show Field
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildInputTextGrid($titleLabel, $idInput, $nameInput, $placeholder=""){
      echo '<ARTICLE class="grid-item-no-border">';
      echo '    <ASIDE>';
      echo '        <DIV class="grid-item-no-border grid-item-2">';
      echo '            <LABEL class="font-Bold">'.$titleLabel.'</LABEL>';
      echo '            <INPUT type="text" name="'.$nameInput.'" id="'.$idInput.'" placeholder="'.$placeholder.'" class="input-radius">';
      echo '        </DIV>';
      echo '    </ASIDE>';
      echo '</ARTICLE>';
    }//buildInputTextGrid
    
    /*=======================================================================
    Function: buildInputTextDisable
    Description: Input text Disabled (2 columns)
    Parameters: $titleLabel <-- Label Name
                $idInput <-- Input Id
                $nameInput <-- Input Nme
                $placeholder <-- Name Show Field                
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildInputTextDisable($titleLabel, $idInput, $nameInput, $placeholder=""){
      echo '<ARTICLE class="grid-item-no-border">';
      echo '    <ASIDE>';
      echo '        <DIV class="grid-item-no-border grid-item-2">';
      echo '            <LABEL class="font-Bold">'.$titleLabel.'</LABEL>';
      echo '            <INPUT type="text" name="'.$nameInput.'" id="'.$idInput.'" placeholder="'.$placeholder.'" disabled class="input-radius">';
      echo '        </DIV>';
      echo '    </ASIDE>';
      echo '</ARTICLE>';
    }//buildInputTextDisable

/*=======================================================================
    Function: buildInputTextLargeCenter
    Description: Input text large center 
    Parameters: $titleLabel <-- Label Name
                $idInput <-- Input Id
                $nameInput <-- Input Nme
                $placeholder <-- Name Show Field                
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildInputTextLargeCenter($titleLabel, $idInput, $nameInput, $placeholder=""){
      echo '<DIV class="grid-item-no-border grid-item-1 grid-item-2">';
      echo '    <LABEL class="font-Bold">'.$titleLabel.'</LABEL>';
      echo '    <INPUT type="text" name="'.$nameInput.'" id="'.$idInput.'" placeholder="'.$placeholder.'" class="input-text-large input-radius">';
      echo '</DIV>';
    }//buildInputTextLargeCenter


    /*================== =====================================================
    Function: buildMenuOptionGrid
    Description: Build option with title and image dinamyc
    Parameters: $nameImg <-- Image name
                $titleOption <-- Option name              
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildMenuOptionGrid($nameImg, $titleOption, $modal){
      $opnModal = "";

      if($modal == true)
      {
        $opnModal = "openModal";
      }

      echo '<ARTICLE class="grid-item '.$opnModal.'">';
      echo '    <FIGURE>';
      echo '        <IMG class="imgMenu" src="img/'.$nameImg.'">';
      echo '    </FIGURE>';
      echo '    <H1>'.$titleOption.'</H1>';
      echo '</ARTICLE>';
    }//buildMenuOptionGrid

    /*=======================================================================
    Function: buildMenuOptionGrid
    Description: Build option with title and image dinamyc
    Parameters: $nameImg <-- Image name
                $titleOption <-- Option name              
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildMenuOptionComplete($nameImg, $titleOption, $modal){
      $opnModal = "";

      if($modal == true)
      {
        $opnModal = "openModal";
      }

      echo '<ARTICLE class="grid-item grid-item-2 '.$opnModal.'">';
      echo '    <FIGURE>';
      echo '        <IMG class="imgMenu" src="img/'.$nameImg.'">';
      echo '    </FIGURE>';
      echo '    <H1>'.$titleOption.'</H1>';
      echo '</ARTICLE>';
    }//buildMenuOptionComplete

    /*=======================================================================
    Function: buildInputMedium
    Description: Build input size medium
    Parameters: $nameImg <-- Image name
                $titleOption <-- Option name              
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 12:00
    ===================================================================== */
    static function buildInputMedium($titleLabel, $idInput, $nameInput, $placeholder=""){
      echo '<DIV class="grid-item-no-border grid-item-1">';
      echo '  <LABEL for="amount" class="font-Bold margin-label">'.$titleLabel.'</LABEL>';
      echo '  <INPUT type="text" name="'.$nameInput.'" id="'.$idInput.'" placeholder="'.$placeholder.'" class="input-radius input-medium">';
      echo '</DIV>';
    }//buildInputMedium

    /*=======================================================================
    Function: startSectionTwoColumns
    Description: Start Tag ASIDE  (SecondSection) with 1 column
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 14:00
    ===================================================================== */
    static function startAsideOneColumn(){
      echo '<ASIDE class="grid-1">';
    }//startSectionTwoColumns
    
    /*=======================================================================
    Function: endAside
    Description: end Tag ASIDE 
    Parameters: 
    Algorithm:
    Remarks:
    Standarized: 2021/01/19 14:00
    ===================================================================== */
    static function endAside(){
      echo '</ASIDE>';
    }//endAside

    /*=======================================================================
    Function: buildInputMedium
    Description: Build section phones witch country phone, area cod and number (Fields Centers)
    Parameters: $nameImg <-- Image name
                $titleOption <-- Option name              
    Algorithm:
    Remarks:
    Standarized: 2021/01/20 12:00
    ===================================================================== */
    static function buildPhoneComplete($titleLabel, $name,$id,$json,$showCol="",$event=""){
    
    echo '<DIV class="grid-item-no-border grid-item-1">';
    echo '  <LABEL for="amount" class="font-Bold margin-label">'.$titleLabel.'</LABEL>';
    echo '  <DIV class="flex-content">';

    echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' class="select-width">';
    echo '<OPTION disabled selected>Seleccione</OPTION>';                
    array_walk($json, function(&$value, $key)use(&$showCol) {                        
        if (trim($showCol) == trim($key)){
        echo '<OPTION value="'.$key.'" selected>'.$value.' </OPTION>';
        }else{			
            echo '<OPTION value="'.$key.'">'.$value.'</OPTION>';                    
        }
    });
    echo '</SELECT>';


    echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' class="select-width">';
      echo '<OPTION disabled selected>Seleccione</OPTION>';                
      array_walk($json, function(&$value, $key)use(&$showCol) {                        
          if (trim($showCol) == trim($key)){
          echo '<OPTION value="'.$key.'" selected>'.$value.' </OPTION>';
          }else{			
              echo '<OPTION value="'.$key.'">'.$value.'</OPTION>';                    
          }
      });
      echo '</SELECT>';

    echo '      <INPUT type="text" name="firstSurname" id="firstSurname" class="input-radius">';
    echo '  </DIV>';
    echo '</DIV>';
    }

    /*=======================================================================
    Function: buildInputMedium
    Description: Build section phones witch country phone, area cod and number (Fields Centers)
    Parameters: $nameImg <-- Image name
                $titleOption <-- Option name              
    Algorithm:
    Remarks:
    Standarized: 2021/01/20 12:00
    ===================================================================== */
    static function buildpinTemporal($titleLabel, $name,$id,$json,$showCol="",$event=""){
      echo '<P class="resOp"> Usuario creado satisfactoriamente, su PIN de entrada es:</P>';
      echo '<DIV class="centrarObjets">';
      echo '    <P class="font-subtitle">7213</P>';
      echo '    <A href="#close" class="button"> Continuar </A>';
      echo '</DIV>';
    }//

    /*=======================================================================
    Function: buildOptionsPrincipal
    Description: Build principal options of the services
    Parameters: $nameImg <-- Image name
                $titleOption <-- Option name  
                $data_id <-- Para relacionar con las opciones de buildOptionGrid    
    Algorithm:
    Remarks:
    Standarized: 2021/01/20:00
    ===================================================================== */
    static function buildOptionsPrincipal($titleLabel, $data_id =""){
      echo '<SECTION class="grid-2">';
		  echo '	<ARTICLE class="grid-item-Opc grid-item-2" data-id="'.$data_id.'">';
		  echo '		<H1>'.$titleLabel.'</H1>';
		  echo '	</ARTICLE>';
      echo '</SECTION>';
    }//buildOptionsPrincipal

    /*=======================================================================
    Function: buildPinPrincipalModal 
    Description: Build Principal Pin Modal, with forgot password and Register options
                  the class "close"   close the modal 
    Parameters: $title <-- Image name
                $limitPass <-- Length limit   
                $minLength <-- Min character (the field turn red if the length is <)
    Algorithm:
    Remarks:
    Standarized: 2021/01/21 10:00
    ===================================================================== */
    static function buildPinPrincipalModal($title, $limitPass, $minLength){
      echo '<DIV class="divpin">';
      echo '<H1>'.$title.'</H1>';
      echo '</DIV>';
      echo '<DIV class="centrarObjets"><input type="password" name="pass" id="pass" pattern=".{'.$minLength.',}" maxlength="'.$limitPass.'"></DIV>';
      echo '<DIV>';
      echo '<TABLE class="centrarObjets">';
      echo '    <TBODY>';
      echo '        <TR></TR>';
      echo '        <TR></TR>';
      echo '        <TR></TR>';
      echo '        <TR>';
      echo '            <TD> <input value=" 1 " onclick="number(1)" type="button" class="botones"></TD>';
      echo '            <TD> <input value=" 2 " onclick="number(2)" type="button" class="botones"></TD>';
      echo '            <TD> <input value=" 3 " onclick="number(3)" type="button" class="botones"></TD>';
      echo '        </TR>';
      echo '        <TR>';
      echo '            <TD> <input value=" 4 " onclick="number(4)" type="button" class="botones"></TD>';
      echo '            <TD> <input value=" 5 " onclick="number(5)" type="button" class="botones"></TD>';
      echo '            <TD> <input value=" 6 " onclick="number(6)" type="button" class="botones"></TD>';
      echo '        </TR>';
      echo '        <TR>';
      echo '            <TD> <input value=" 7 " onclick="number(7)" type="button" class="botones"></TD>';
      echo '            <TD> <input value=" 8 " onclick="number(8)" type="button" class="botones"></TD>';
      echo '            <TD> <input value=" 9 " onclick="number(9)" type="button" class="botones"></TD>';
      echo '        </TR>';
      echo '        <TD></TD>';
      echo '        <TD><input value=" 0 " onclick="number(0)" type="button" class="botones"></TD>';
      echo '        <TD> <input type="image" name="botondeenvio" src="img/iconoborrar.png" class="imgErase"></TD>';
      echo '        <TD></TD>';
      echo '        </TR>';
      echo '    </TBODY>';
      echo '</TABLE>';
      echo '<A class="wordsFM" href="">Olvido de Clave?</A>';
      echo '<DIV class="centrarObjets">';
      echo '    <SPAN class="button close"> Aceptar </SPAN>';
      echo '</DIV>';
      echo '<A class="wordsFM " href="Register.php">Registro</A>';
      echo '</DIV>';
    }//buildPinPrincipalModal

    /*=======================================================================
    Function: startInputModal
    Description: build header  modal
    Parameters:      
    Algorithm:
    Remarks:
    Standarized: 2021/01/21 10:00
    ===================================================================== */
    static function startInputModal(){
        echo '<DIV id="tvesModal" class="modalContainer">';
        echo '   <DIV class="modal-content">';
        echo '      <SPAN class="close">×</SPAN>';
                
    }//startInputModal

    /*=======================================================================
    Function: endInputModal
    Description: end header modal
    Parameters:        
    Algorithm:
    Remarks:
    Standarized: 2021/01/21 10:00
    ===================================================================== */
    static function endInputModal(){      
      echo '    </DIV>';
      echo '</DIV>';
    }//endInputModal

    /*=======================================================================
    Function: startInputModal
    Description: build header with title without logos
    Parameters:      Transacción Satisfactoria
    Algorithm:
    Remarks:
    Standarized: 2021/01/21 10:00
    ===================================================================== */
    static function buildHeaderText($title){
      echo '<HEADER class="header header-text">';
      echo '  <H1 class="titles">'.$title.'</H1>';
      echo '</HEADER>';
    }

    /*=======================================================================
    Function: startInputModal
    Description: build header with title without logos
    Parameters:      
    Algorithm:
    Remarks:
    Standarized: 2021/01/21 10:00
    ===================================================================== */
    static function buildSuccessful($title, $buttonTitle){
        echo '<DIV class="centrarObjets">';
        echo '    <FIGURE><IMG src="img/success.png" alt="" class="logo"></FIGURE>';
        echo '    <H1>'.$title.'</H1>';
        echo '    <BUTTON class="button"> '.$buttonTitle.'</BUTTON>';
        echo '</DIV>';
    }


// buildHead
} // xpresentationLayer

?>
