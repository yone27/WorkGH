<?php 
	
   session_start();

   /*==========================================================================  
     Class: presentationLayer
     Description: MVC View. Helper Methods
     Version: 1.0
     Remarks:
     ========================================================================*/

   class presentationLayer {

      /*=======================================================================
	Function: buildInitHTML
	Description: HTML Head, rendering "title"
        Parameters: $title <-- 
	Algorithm:
	Remarks:
	Standarized: 2020/02/14 16:33
	===================================================================== */
	
      static function buildInitHTML($title) {
         echo '<HTML>';
	 echo '<HEAD>';
	 echo '<TITLE>'.$title.'</TITLE>';
	 echo '<meta http-equiv="Content-Type"';
	 echo 'content="text/html; charset=utf-8">';
	 echo '</HEAD>';
      } // buildInitHTML 

      /*=======================================================================
	Function: buildEndHTML
	Description: HTML TAG CLOSE
        Parameters: 
	Algorithm:
	Remarks:
	Standarized: 2020/02/14 16:33
	===================================================================== */
	
      static function buildEndHTML() {
         echo '</HTML>';
      } // buildEndHTML 

      /*=======================================================================
	Function: buildInitFORM
	Description: FORM TAG, with form "action" and form "name"
        Parameters: $action <-- 
		    $name   <--
	Algorithm:
	Remarks:
	Standarized: 2020/02/14 18:15
	===================================================================== */
      static function buildInitForm($action,$name) {
         echo '<FORM action="'.$action.'" ';
	 echo 'method="post" name="'.$name.'" class="italsis">';
      } //buildInitForm 

      /*=======================================================================
	Function: buildEndForm
	Description: FORM TAG CLOSE
        Parameters: 
	Algorithm:
	Remarks:
	Standarized: 2020/02/14 18:38
	===================================================================== */
      static function buildEndForm() {
         echo '</FORM>';
	 echo '<P>&nbsp;</P>';
      } // buildEndForm






		static function buildHeaderSIMADI() {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		echo '<A href="#"><img class="logo" src="/italsis/images/oi.png" alt="Organizacion Italcambio" title="Organizacion Italcambio"></a>';
            		//echo '<A href="#"><img class="logo" src="images/mg_logo.png" alt="MoneyGram" title="MoneyGram"></a>';
			//echo '<A href="#"><img class="logo" src="images/igmg.jpg" alt="Organizacion Italcambio -- MoneyGram" title="Organizacion Italcambio -- MoneyGram" align="center"></a>';

			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
		}

		static function buildHeaderIC() {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		echo '<A href="#"><img class="logo" src="/italsis/images/oi.png" alt="Organizacion Italcambio" title="Organizacion Italcambio"></a>';
            		//echo '<A href="#"><img class="logo" src="images/mg_logo.png" alt="MoneyGram" title="MoneyGram"></a>';
			//echo '<A href="#"><img class="logo" src="images/igmg.jpg" alt="Organizacion Italcambio -- MoneyGram" title="Organizacion Italcambio -- MoneyGram" align="center"></a>';

			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
		}

		static function buildHeaderFRONTERA() {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		echo '<A href="#"><img class="logo" src="/italsis/images/oi.png" alt="Organizacion Italcambio" title="Organizacion Italcambio"></a>';
            		//echo '<A href="#"><img class="logo" src="images/mg_logo.png" alt="MoneyGram" title="MoneyGram"></a>';
			//echo '<A href="#"><img class="logo" src="images/igmg.jpg" alt="Organizacion Italcambio -- MoneyGram" title="Organizacion Italcambio -- MoneyGram" align="center"></a>';

			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
		}

		static function buildHeader() {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		//echo '<A href="#"><img class="logo" src="images/oi.png" alt="Organizacion Italcambio" title="Organizacion Italcambio"></a>';
            		//echo '<A href="#"><img class="logo" src="images/mg_logo.png" alt="MoneyGram" title="MoneyGram"></a>';
			echo '<A href="#"><img class="logo" src="images/igmg.jpg" alt="Organizacion Italcambio -- MoneyGram" title="Organizacion Italcambio -- MoneyGram" align="center"></a>';

			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
		}

		static function buildHeaderItaldocumento() {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		echo '<A href="#"><img class="logo" src="images/oi.png" alt="Organizacion Italcambio" title="Organizacion Italcambio"></a>';
            		//echo '<A href="#"><img class="logo" src="images/mg_logo.png" alt="MoneyGram" title="MoneyGram"></a>';
			//echo '<A href="#"><img class="logo" src="images/igmg.jpg" alt="Organizacion Italcambio -- MoneyGram" title="Organizacion Italcambio -- MoneyGram" align="center"></a>';

			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
		}

		static function buildHeaderDOL() {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		//echo '<A href="#"><img class="logo" src="images/oi.png" alt="Organizacion Italcambio" title="Organizacion Italcambio"></a>';
            		//echo '<A href="#"><img class="logo" src="images/mg_logo.png" alt="MoneyGram" title="MoneyGram"></a>';
			echo '<A href="#"><img class="logo" src="images/Logo.jpg" alt="Dinero On Line Inc. -- DOL" title="Dinero On Line Inc. -- DOL" align="center"></a>';

			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
		}


		static function buildHeaderESP() {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		echo '<A href="#"><img class="logo" src="images/oi.png" alt="Organizacion Italcambio" title="Organizacion Italcambio"></a>';
            		echo '<A href="#"><img class="logo" src="images/banderaesp.png" alt="Espana" title="Espana"></a>';
            		echo '<A href="#"><img class="logo" src="images/mg_logo.png" alt="MoneyGram" title="MoneyGram"></a>';

			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
		}
		static function buildHeaderRD() {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		echo '<A href="#"><img class="logo" src="images/oi.png" alt="Organizacion Italcambio" title="Organizacion Italcambio"></a>';
            		echo '<A href="#"><img class="logo" src="images/banderard.jpg" alt="Republica Dominicana" title="Republica Dominicana"></a>';
            		echo '<A href="#"><img class="logo" src="images/mg_logo.png" alt="MoneyGram" title="MoneyGram"></a>';

			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
		}

		static function buildHeaderPanama() {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		echo '<A href="#"><img class="logo" width="30%" height="30%"  src="images/italtransfer.png" alt="Organizacion Italcambio" title="Organizacion Italcambio"></a>';
			//echo '<A href="#"><img class="logo" src="images/banderapanama.jpg" alt="Panama" title="Panama"></a>';
            		//echo '<A href="#"><img class="logo" src="images/mg_logo.png" alt="MoneyGram" title="MoneyGram"></a>';
			//echo '<A href="#"><img  width="50%" src="images/Moneygram Panama.jpg" alt="Organizacion Italcambio / MoneyGram" title="Organizacion Italcambio / MoneyGram"></a>';

			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
		}

		static function buildImg($pSend,$pRecv,$pPrint,$pAmd,$pAcc,
					$pSMORE="",$pUMORE="",$pCMORE="") {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		echo '<A href="'.$pRecv.'"><img class="logo" src="images/recibo.png" alt="Recibir" title="Recibir"></a>';
			if ($pSend != "") {
				echo '<A href="'.$pSend.'"><img class="logo" src="images/envio.png" alt="Enviar" title="Enviar"></a>';
			}
			echo '<A href="'.$pPrint.'"><img class="logo" src="images/reporte.jpg" alt="Reporte" title="Reporte"></a>';
			echo '<A href="'.$pAmd.'"><img class="logo" src="images/modificar.jpg" alt="Modificar" title="Modificar"></a>';		
			if ($pAcc != "") {
				echo '<A href="'.$pAcc.'"><img class="logo" src="images/contab.png" alt="SACC" title="SACC"></a>';		
			}
			if ($pSMORE != "") {
				echo '<A href="'.$pSMORE.'"><img class="logo" src="images/statusmore.png" alt="Status Giros MORE" title="SMORE"></a>';		
			}
			if ($pUMORE != "") {
				echo '<A href="'.$pUMORE.'"><img class="logo" src="images/modificarmore.jpg" alt="Actualizar Giros MORE" title="UMORE"></a>';		
			}
			if ($pCMORE != "") {
				echo '<A href="'.$pCMORE.'"><img class="logo" src="images/cancelmore.jpg" alt="Cancelar Giros MORE" title="CMORE"></a>';		
			}
			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
    			
		}

		static function buildDICOM($pChgEmail,$pChgPwd) {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		echo '<A href="'.$pChgEmail.'"><img class="logo" src="italsis/images/email.jpg" alt="Cambiar Email" title="Cambiar Email"></a>';
			echo '<A href="'.$pChgPwd.'"><img class="logo" src="italsis/images/chgpwd.jpg" alt="Resetear Contrasena" title="Resetear Contrasena"></a>';
			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
    			
		}

		static function buildImgPREPAID($pCard) {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
            		echo '<A href="'.$pCard.'"><img class="logo" src="images/tarjeta.jpg" alt="Tarjetas" title="Tarjetas"></a>';
			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
    			
		}


		static function buildImgMaster($pPrint) {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
		echo '<A href="'.$pPrint.'"><img class="logo" src="images/reporte.jpg" alt="Reporte" title="Reporte"></a>';
			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
    			
		}


		static function buildImgAdm($pPaym,$pDelv,$pPrint,$pKpi,$pCompl,$pBlock,$pBlockP,
				$pRisk,$pBack,$pSMORE,$pOcc,$pFindP, $pPos,$pGua,
				$pUMORE="",$pCMORE="",$pIMORE="",$pCCDOL="",$pRiskC="",
				$pCfg="",$pCom="",$pComShared="",
				$pDBCustomers="",$pImg="",$pApr="",$pRat="",$puDOL="",$pPen="",
				$pComSADOL="",$pComSADOLGoal="",$pAg="",$pBenef="",$pIP="",$pRules="",$pRulesExc="",
				$pTok="",$pMarkPaid="",$pEmail="",$pRatEx="",
				$pITDOC="",$palarm="",$pdued="",$psbp="",$pPep="",$pDelExc="",
				$pIngEgr="",$pActProv="",$pAutom = "",$pExit="") {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';

			if ($pExit != "")
				echo '<A href="'.$pExit.'"><img class="logob" src="images/salir.jpg" alt="Salir" title="Salir"></a>';
			
			
			if ($pGua != "")
            			echo '<A href="'.$pGua.'"><img class="logob" src="images/garantia.jpg" alt="Garantias" title="Garantias"></a>';
			if ($pPaym != "")
            			echo '<A href="'.$pPaym.'"><img class="logob" src="images/pago.jpg" alt="Pagos" title="Pagos"></a>';
			if ($pDelv != "")
            			echo '<A href="'.$pDelv.'"><img class="logob" src="images/pagare.jpg" alt="Entrega" title="Entregas"></a>';
			if ($pPrint != "")
				echo '<A href="'.$pPrint.'"><img class="logob" src="images/reporte.jpg" alt="Reporte" title="Reporte"></a>';
			if ($pKpi != "")
				echo '<A href="'.$pKpi.'"><img class="logob" src="images/kpi.jpg" alt="Kpi" title="Kpi"></a>';
			
			if ($pCompl != "")
				echo '<A href="'.$pCompl.'"><img class="logob" src="images/compliance.jpg" alt="Cumplimiento" title="Reporte Cumplimiento"></a>';
			if ($psbp != "")
				echo '<A href="'.$psbp.'"><img class="logob" src="images/sbp.png" alt="Superintendencia de Bancos Panama" title="Reportes Superintendencia de Bancos"></a>';
			if ($pAutom != "")
				echo '<A href="'.$pAutom.'"><img class="logob" src="images/pagautom.png" alt="Pagos Automaticos" title="Pagos Automaticos"></a>';
			
			if ($palarm != "")
				echo '<A href="'.$palarm.'"><img class="logob" src="images/alarmapproval.jpg" alt="Alertas" title="Alertas Cumplimiento"></a>';
			if ($pdued != "")
				echo '<A href="'.$pdued.'"><img class="logob" src="images/duediligence.jpg" alt="Alertas Debida Diligencia" title="Alertas Debida Diligencia"></a>';
			
			if ($pBlock != "")
				echo '<A href="'.$pBlock.'"><img class="logob" src="images/block.jpg" alt="Bloqueo Referencia" title="Bloqueo Referencia"></a>';
			if ($pBlockP != "")
				echo '<A href="'.$pBlockP.'"><img class="logob" src="images/blockp.jpg" alt="Bloqueo Persona" title="Bloqueo Persona"></a>';
			if ($pRisk != "")
				echo '<A href="'.$pRisk.'"><img class="logob" src="images/limit.jpg" alt="Limite Sub Agentes" title="Limite Sub Agentes"></a>';
			if ($pBack != "")
				echo '<A href="'.$pBack.'"><img class="logob" src="images/reverso.jpg" alt="Reverso Pago" title="Reverso Pago"></a>';
			if ($pSMORE != "")
				echo '<A href="'.$pSMORE.'"><img class="logob" src="images/statusmore.png" alt="Status Giros MORE" title="SMORE"></a>';		
			if ($pOcc != "")
				echo '<A href="'.$pOcc.'"><img class="logob" src="images/ocupaciones.jpg" alt="Maestro de Ocupaciones" title="Ocupaciones"></a>';		
			if ($pRiskC != "")
				echo '<A href="'.$pRiskC.'"><img class="logob" src="images/riskcountry.jpg" alt="Paises en Riesgo" title="Paises en Riesgo"></a>';
			if ($pFindP != "")
				echo '<A href="'.$pFindP.'"><img class="logob" src="images/buscarp.jpg" alt="Buscar Cliente" title="Clientes"></a>';		
			if ($pPos != "")
				echo '<A href="'.$pPos.'"><img class="logob" src="images/posicion.jpg" alt="Posicion Italtransfer" title="Posicion Italtransfer"></a>';		
			if ($pUMORE != "") {
				echo '<A href="'.$pUMORE.'"><img class="logob" src="images/modificarmore.jpg" alt="Actualizar Giros" title="UMORE"></a>';		
			}
			if ($pCMORE != "") {
				echo '<A href="'.$pCMORE.'"><img class="logob" src="images/cancelmore.jpg" alt="Cancelar Giros" title="CMORE"></a>';		
			}
			if ($pIMORE != "") {
				echo '<A href="'.$pIMORE.'"><img class="logob" src="images/facdol.png" alt="Colcoar como no facturada referencia DOL" title="DOL"></a>';		
			}
			if ($pCCDOL != "") {
				echo '<A href="'.$pCCDOL.'"><img class="logob" src="images/confirmcancel.png" alt="Confirmar Cancelacion Giros " title="CCDOL"></a>';		
			}
			if ($pCfg != "") {
				echo '<A href="'.$pCfg.'"><img class="logob" src="images/gadm.png" alt="Gastos Administrativos " title="GADM"></a>';		
			}
			if ($pCom != "") {
				echo '<A href="'.$pCom.'"><img class="logob" src="images/comisiones.png" alt="Comisiones " title="COM"></a>';		
			}
			if ($pComShared != "") {
				echo '<A href="'.$pComShared.'"><img class="logob" src="images/sharedcom.jpg" alt="Comisiones Compartidas" title="COMCOMP"></a>';		
			}
			if ($pDBCustomers !="") {
				echo '<A href="'.$pDBCustomers.'"><img class="logob" src="images/bdclientes.jpg" alt="BD Clientes" title="BD CLIENTES"></a>';		
			} 
			if ($pImg !="") {
				echo '<A href="'.$pImg.'"><img class="logob" src="images/verdoc.jpg" alt="BD Imagenes" title="Imagenes"></a>';		
			}
			if ($pApr !="") {
				echo '<A href="'.$pApr.'"><img class="logob" src="images/approved.png" alt="Aprobacion" title="aprobacion"></a>';		
			}
			if ($pRat !="") {
				echo '<A href="'.$pRat.'"><img class="logob" src="images/tasascambio.png" alt="Tasas" title="tasas"></a>';		
			}
			if ($puDOL !="") {
				echo '<A href="'.$puDOL.'"><img class="logob" src="images/usersDOL.png" alt="Operadores" title="operadores"></a>';		
			}
			if ($pPen !="") {
				echo '<A href="'.$pPen.'"><img class="logob" src="images/penalidad.jpg" alt="Penalidad MG" title="penalidad"></a>';		
			}
			if ($pComSADOL !="") {
				echo '<A href="'.$pComSADOL.'"><img class="logob" src="images/comisionsa.jpg" alt="Comision SA DOL" title="COMISION SA DOL"></a>';		
			}
			if ($pComSADOLGoal !="") {
				echo '<A href="'.$pComSADOLGoal.'"><img class="logob" src="images/meta.jpg" alt="Comision SA DOL Goal" title="COMISION SA DOL Goal"></a>';		
			}
			if ($pAg !="") {
				echo '<A href="'.$pAg.'"><img class="logob" src="images/agentes.jpg" alt="Agentes" title="agentes"></a>';		
			}
			if ($pBenef !="") {
				echo '<A href="'.$pBenef.'"><img class="logob" src="images/benef.png" alt="Beneficiarios" title="beneficiarios"></a>';		
			}
			if ($pIP !="") {
				echo '<A href="'.$pIP.'"><img class="logob" src="images/ip.jpg" alt="IP Agentes" title="IP Agentes"></a>';		
			}
			if ($pRules !="") {
				echo '<A href="'.$pRules.'"><img class="logob" src="images/comprules.jpg" alt="Reglas Cumplimiento Pais" title="Reglas Cumplimiento Pais"></a>';		
			}
			if ($pRulesExc !="") {
				echo '<A href="'.$pRulesExc.'"><img class="logob" src="images/complianceexc.jpg" alt="Reglas Cumplimiento Cambio Pais" title="Reglas Cumplimiento Cambio Pais"></a>';		
			}
			if ($pTok !="") {
				echo '<A href="'.$pTok.'"><img class="logob" src="images/token.jpg" alt="Tokens" title="Tokens Subagentes"></a>';		
			}
			if ($pMarkPaid !="") {
				echo '<A href="'.$pMarkPaid.'"><img class="logob" src="images/giropagado.jpg" alt="Marcar Giro Pagado" title="Marcar Giro Pagado"></a>';		
			}
			if ($pEmail !="") {
				echo '<A href="'.$pEmail.'"><img class="logob" src="images/email.jpg" alt="Email Sub Agentes" title="Email Sub Agentes"></a>';		
			}
			if ($pRatEx !="") {
				echo '<A href="'.$pRatEx.'"><img class="logob" src="images/tasascambio.png" alt="Tasas" title="tasas"></a>';		
			}
			if ($pITDOC !="") {
				echo '<A href="'.$pITDOC.'"><img class="logob" src="images/italdocumento.jpg" alt="Italdocumento" title="italdocumento"></a>';		
			}
			if ($pPep != "") {
				echo '<A href="'.$pPep.'"><img class="logob" src="images/pep.png" alt="Lista Pep" title="Lista Pep"></a>';
			}
			if ($pDelExc != "") {
				echo '<A href="'.$pDelExc.'"><img class="logob" src="images/dropexoper.jpg" alt="Eliminar Operacion" title="Eliminar Operacion"></a>';
			}
			if ($pIngEgr != "") {
				echo '<A href="'.$pIngEgr.'"><img class="logob" src="images/ingegr.png" alt="Autorizar Egresos Ingresos" title="Autorizar Ingresos Egresos"></a>';
			}
			if ($pActProv != "") {
				echo '<A href="'.$pActProv.'"><img class="logob" src="images/actprove.png" alt="Activar/Desactivar Proveedores" title="Activar/Desactivar Proveedores"></a>';
			}
			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
    			
		}


		static function buildImgAdmDOL($pPrint,$pExit,$pCompl="",$pdued= "", $pBlock="",
				$pBlockP="",$pRiskC="",$pBack="",$pSMORE="",$pOcc="",$pFindP="",
				$pathAlarm="",$pathRules="",$pathItaldocumento="",$psbp="",$pPep) {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
			if ($pPrint != "")
				echo '<A href="'.$pPrint.'"><img class="logob" src="images/reporte.jpg" alt="Reporte" title="Reporte"></a>';
			if ($pExit != "")
				echo '<A href="'.$pExit.'"><img class="logob" src="images/salir.jpg" alt="Salir" title="Salir"></a>';
			if ($pCompl != "")
				echo '<A href="'.$pCompl.'"><img class="logob" src="images/compliance.jpg" alt="Cumplimiento" title="Reporte Cumplimiento"></a>';
			if ($pdued != "")
				echo '<A href="'.$pdued.'"><img class="logob" src="images/duediligence.jpg" alt="Alertas Debida Diligencia" title="Alertas Debida Diligencia"></a>';
			
			if ($psbp != "")
				echo '<A href="'.$psbp.'"><img class="logob" src="images/sbp.png" alt="Superintendencia de Bancos Panama" title="Reportes Superintendencia de Bancos"></a>';
			if ($pBlock != "")
				echo '<A href="'.$pBlock.'"><img class="logob" src="images/block.jpg" alt="Bloqueo Referencia" title="Bloqueo Referencia"></a>';
			if ($pBlockP != "")
				echo '<A href="'.$pBlockP.'"><img class="logob" src="images/blockp.jpg" alt="Bloqueo Persona" title="Bloqueo Persona"></a>';
			if ($pRiskC != "")
				echo '<A href="'.$pRiskC.'"><img class="logob" src="images/riskcountry.jpg" alt="Paises en Riesgo" title="Paises en Riesgo"></a>';
			if ($pBack != "")
				echo '<A href="'.$pBack.'"><img class="logob" src="images/reverso.jpg" alt="Reverso Pago" title="Reverso Pago"></a>';
			if ($pSMORE != "")
				echo '<A href="'.$pSMORE.'"><img class="logob" src="images/statusmore.png" alt="Status Giros MORE" title="SMORE"></a>';		
			if ($pOcc != "")
				echo '<A href="'.$pOcc.'"><img class="logob" src="images/ocupaciones.jpg" alt="Maestro de Ocupaciones" title="Ocupaciones"></a>';		
			if ($pFindP != "")
				echo '<A href="'.$pFindP.'"><img class="logob" src="images/buscarp.jpg" alt="Buscar Cliente" title="Clientes"></a>';		
			if ($pathRules !="") {
				echo '<A href="'.$pathRules.'"><img class="logob" src="images/comprules.jpg" alt="Reglas Cumplimiento Pais" title="Reglas Cumplimiento Pais"></a>';		
			}
			if ($pathItaldocumento !="") {
				echo '<A href="'.$pathItaldocumento.'"><img class="logob" src="images/italdocumento.jpg" alt="Italdocumento" title="italdocumento"></a>';		
			}
			if ($pathAlarm != "") {
				echo '<A href="'.$pathAlarm.'"><img class="logob" src="images/alarmapproval.jpg" alt="Alertas" title="Alertas Cumplimiento"></a>';
			}
			if ($pPep != "") {
				echo '<A href="'.$pPep.'"><img class="logob" src="images/pep.png" alt="Lista Pep" title="Lista Pep"></a>';
			}
			
			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
    			
		}
		static function buildImgAdmITD($pITD,$pExit) {
			//<!-- Header -->
    			echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';
  			//<!-- Top Section -->
      			echo '<DIV class="container">';
        		echo '<DIV class="row">';
        		echo '<DIV class="col-md-12">';
          		//<!-- Main Menu -->
          		echo '<NAV class="navbar navbar-default header-4" role="navigation">';
          		//<!-- Brand and toggle get grouped for better mobile display -->
          		echo '<DIV class="navbar-header">';
			if ($pITD != "")
				echo '<A href="'.$pITD.'"><img class="logo" src="images/italdocumento.jpg" alt="Italdocumento" title="italdocumento"></a>';
			if ($pExit != "")
				echo '<A href="'.$pExit.'"><img class="logo" src="images/salir.jpg" alt="Salir" title="Salir"></a>';
			
			echo '</DIV>';
        		echo '</NAV>';
    			echo '</DIV>';
     			echo '</DIV>';
      			echo '</DIV>';
    			echo '</HEADER>';
    			
		}



		static function buildImgFlagPan() {
			echo '<TABLE bgcolor="#D2E9FF">';
			echo '<TR bgcolor="#D2E9FF">';
			echo '<TD bgcolor="#D2E9FF">';
			echo '<A href="getratesPL.php?idcountrydst=233"><img src="../../../images/flags/USA.png" alt="Estados Unidos" title="USA" height="30" width="60"></a>';
			echo '</TD>';
			echo '<TD bgcolor="#D2E9FF">';
			echo '<A href="getratesPL.php?idcountrydst=157"><img src="../../../images/flags/MEX.png" alt="Mexico" title="MEX" height="30" width="60"></a>';
			echo '</TD>';
			echo '<TD bgcolor="#D2E9FF">';
			echo '<A href="getratesPL.php?idcountrydst=177"><img src="../../../images/flags/PHL.png" alt="Filipinas" title="PHI" height="30" width="60"></a>';
			echo '</TD>';
			//echo '<TD bgcolor="#D2E9FF">';
			//echo '<A href="getratesPL.php?idcountrydst=48"><img src="../../../images/flags/CHN.png" alt="China" title="CHN" height="30" width="60"></a>';
			//echo '</TD>';
			echo '<TD bgcolor="#D2E9FF">';
			echo '<A href="getratesPL.php?idcountrydst=49"><img src="../../../images/flags/COL.png" alt="Colombia" title="COL" height="30" width="60"></a>';
			echo '</TD>';
			echo '<TD bgcolor="#D2E9FF">';
			echo '<A href="getratesPL.php?idcountrydst=61"><img src="../../../images/flags/DOM.png" alt="Republica Doinicana" title="DOM" height="30" width="60"></a>';
			echo '</TD>';
			echo '</TR>';
			echo '</TABLE>';
			
    			
		}


static function buildImgFlagRd() {
			echo '<TABLE bgcolor="#D2E9FF">';
			echo '<TR bgcolor="#D2E9FF">';
			echo '<TD bgcolor="#D2E9FF">';
			echo '<A href="getratesPL.php?idcountrydst=233"><img src="../../../images/flags/USA.png" alt="Estados Unidos" title="USA" height="30" width="60"></a>';
			echo '</TD>';
			echo '<TD bgcolor="#D2E9FF">';
			echo '<A href="getratesPL.php?idcountrydst=99"><img src="../../../images/flags/HTI.png" alt="Haiti" title="HTI" height="30" width="60"></a>';
			echo '</TD>';
			echo '<TD bgcolor="#D2E9FF">';
			echo '<A href="getratesPL.php?idcountrydst=68"><img src="../../../images/flags/ESP.png" alt="Espana" title="ESP" height="30" width="60"></a>';
			echo '</TD>';
			//echo '<TD bgcolor="#D2E9FF">';
			//echo '<A href="getratesPL.php?idcountrydst=48"><img src="../../../images/flags/CHN.png" alt="China" title="CHN" height="30" width="60"></a>';
			//echo '</TD>';
			echo '<TD bgcolor="#D2E9FF">';
			echo '<A href="getratesPL.php?idcountrydst=49"><img src="../../../images/flags/COL.png" alt="Colombia" title="COL" height="30" width="60"></a>';
			echo '</TD>';
			echo '<TD bgcolor="#D2E9FF">';
			echo '<A href="getratesPL.php?idcountrydst=173"><img src="../../../images/flags/PAN.png" alt="Panama" title="PAN" height="30" width="60"></a>';
			echo '</TD>';
			echo '</TR>';
			echo '</TABLE>';
			
    			
		}

		static function buildCheckAllDevices($title,$name,$id,$val,$disabled = "",$event="") {

			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
			echo '<INPUT '.$disabled.' name = "'.$name.'"  type = "checkbox" id="'.$name.'"';
			if ($val == "Y" || $val == "on") { 
				echo ' checked';
			}
			if ($event != "") {
				echo ' onClick="'.$event.'"';
			}
			echo ' >'; 
       			echo ' </INPUT>';
			echo ' </LABEL>';
		} //buildCheck

		static function buildCheck($title,$name,$id,$val,$disabled = "",$event="") {

			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			echo '<INPUT '.$disabled.' name = "'.$name.'"  type = "checkbox" id="'.$name.'"';
			if ($val == "Y" || $val == "on") { 
				echo ' checked';
			}
			if ($event != "") {
				echo ' onClick="'.$event.'"';
			}
			echo ' >'; 
       			echo ' </INPUT>';
			echo ' </LABEL>';
		} //buildCheck

                static function buildChecksinpuntos($title,$name,$id,$val,$disabled = "",$event="") {

			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
			echo '<INPUT '.$disabled.' name = "'.$name.'"  type = "checkbox" id="'.$name.'"';
			if ($val == "Y" || $val == "on") { 
				echo ' checked';
			}
			if ($event != "") {
				echo ' onClick="'.$event.'"';
			}
			echo ' >'; 
       			echo ' </INPUT>';
			echo ' </LABEL>';
		} //buildChecksinpuntos


    static function buildFormTitleSP($title,$subTitle="Por favor llene los campos indicados con texto.") {
      echo '<H1>'.$title; 
            echo '<SPAN>'.$subTitle.'</SPAN>';
          echo '</H1>';
    }
    
        static function buildFormTitleespecific($title,$subTitle="Please fill all the texts in the fields.",$marquee="") {
            echo '<H1>'.$title; 
            echo '<SPAN>'.$subTitle.'</SPAN>';
            if ($marquee != "") { 
                echo '<MARQUEE SCROLLDELAY =100> '.$marquee.' </MARQUEE>';
		}
            echo '</H1>';
        }


		
		static function buildFormTitle($title,$subTitle="Please fill all the texts in the fields.") {
			echo '<H1>'.$title; 
        		echo '<SPAN>'.$subTitle.'</SPAN>';
    			echo '</H1>';
		}

		
		static function buildInitColumn() {
			echo '<DIV class="formcolumn">';
		}
		static function buildInitColumn3() {
			echo '<DIV class="formcolumn3">';
		}
		static function buildEndColumn() {
			echo '</DIV>';
		}

		static function buildLabel($val) {
			echo '<LABEL>';
        		echo $val;
			echo '</LABEL>';	
		}

		static function buildIdInput($val,$form,$fLink) {
			echo '<LABEL>';
        		echo '<SPAN>Id :</SPAN>';
			echo '<INPUT name = "id"  type = "text" id="id" ';  
              		echo ' value = "'.$val.'" size="10" maxlength="10"'; 
              		echo ' onBlur="changeAction('.$form.','."'".$fLink."'".')"';
                	echo ' placeholder="Internal Id">'; 
       			echo ' </INPUT>	';
        		echo ' </LABEL>';
		}

		static function buildIdInputHidden($val,$form,$fLink) {
			//echo '<LABEL>';
			//echo '<SPAN>Id :</SPAN>';
			echo '<INPUT name = "id"  type = "hidden" id="id" ';
			echo ' value = "'.$val.'" size="10" maxlength="10"';
			echo ' onBlur="changeAction('.$form.','."'".$fLink."'".')"';
			echo ' placeholder="Internal Id">';
			echo ' </INPUT>	';
			//echo ' </LABEL>';
		}

		static function buildInputCustomDocumentID($nameS,$idS,$modS,$foreignTableS,$curValS,$foreignschemeS,
			$title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="",$disabledsel="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<SELECT class="italsisv3" '.$disabledsel.' name="'.$nameS.'" id="'.$idS.'">';
			$modS->fillForeignTableCombo($foreignTableS,$curValS,$foreignschemeS);
			echo '</SELECT>';
			echo '<INPUT class="italsisv3" '.$readonly.' name = "'.$name.'" type="text" onkeypress="return isNumber(event)" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
		}

		static function buildInputAllDevices($title,$name,$id,$val,
					$maxlength="50",$readonly="",$onblur="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT '.$readonly.' name = "'.$name.'" type="text" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
		}

		static function buildInput($title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT '.$readonly.' name = "'.$name.'" type="text" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
		}
		static function buildInputEvent($title,$name,$id,$val,$maxlength="50",$readonly="",$onchange="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($onchange != "")
				$onchange = ' onChange="'.$onchange.'" ';
			echo '<INPUT '.$readonly.' name = "'.$name.'" type="text" id="'.$id.'" value = "'.$val.'" ';
			echo $onchange; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
		}

            	static function buildInputsinpuntos($title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT '.$readonly.' name = "'.$name.'" type="text" onkeydown="tecla(event);" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
		}

		static function buildInputWithValidator($title,$name,$id,$val,$maxlength="50",
				$readonly="",$onblur="",$event1="",$js1="",$event2="",$js2="",$event3="",$js3="") {
			echo '<LABEL>';
			echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
			  $onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT '.$readonly.' name = "'.$name.'" type="text" id="'.$id.'"  ';
			if ($event1!="") {
				echo ''.$event1.'="'.$js1.'" ';
			}
			if ($event2!="") {
				echo ''.$event2.'="'.$js2.'" ';
			}
			if ($event3!="") {
				echo ''.$event3.'="'.$js3.'" ';
			}                 
			echo    ''. 'onblur="this.value=this.value.toUpperCase();" value = "'.$val.'" '
					. 'required ';
			echo $onblur;
			echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';
		}
	
		
		static function buildInputNoSpace($title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT '.$readonly.' name = "'.$name.'" type="text" onkeypress="return isNoSpace(event)" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
		}

		static function buildInputUS($title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT '.$readonly.' name = "'.$name.'" type="text" onkeypress="return isUSLetter(event)" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
		}

		static function buildInputNumberAllDevices($title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT  onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" '.$readonly.' name = "'.$name.'" type="text" onkeypress="return isNumber(event)" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
		}

		static function buildInputNumber($title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT '.$readonly.' name = "'.$name.'" type="text" onkeypress="return isNumber(event)" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
		}

		static function buildInputNumberDot($title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT '.$readonly.' name = "'.$name.'" type="text" onkeypress="return isNumberDot(event)" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
		}
		
		static function buildInputAddress($title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT '.$readonly.' name = "'.$name.'" type="text" onkeypress="return isUSLetterOrNumber(event)" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
		}

		static function buildButton($name,$id,$val) {
			echo '<LABEL>';
        		echo '<INPUT type="submit" id="'.$id.'" name ="'.$name.'" value = "'.$val.'" ></INPUT>';
			echo '</LABEL>';	
		}

		static function buildRadio($title,$name,$id,$val,$checked="",$event="",$open=1,$close=1) {
			if ($open)
				echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($event != "")
				$event = ' onChange="submit()" ';
			if ($checked != "")
				$checked = " checked ";
			echo '<INPUT type="radio" '.$checked.$event.' name="'.$name.'" id="'.$id.'" value="'.$val.'"></INPUT>';
			if ($close)
				echo '</LABEL>';	
		}
			
		static function buildTextAreaAllDevices($title,$name,$id,$val,$rows="4",$cols="50",$maxlength="100") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
			echo '<TEXTAREA name = "'.$name.'" id="'.$id.'" rows="'.$rows.'" cols="'.$cols.'" maxlength="'.$maxlength.'"' ; 
                       	echo 'placeholder="'.$title.'">';
			echo $val;
			echo '</TEXTAREA>';	
        		echo '</LABEL>';	
		}

		static function buildTextArea($title,$name,$id,$val,$rows="4",$cols="50") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			echo '<TEXTAREA name = "'.$name.'" id="'.$id.'" rows="'.$rows.'" cols="'.$cols.'"' ; 
                       	echo 'placeholder="'.$title.'">';
			echo $val;
			echo '</TEXTAREA>';	
        		echo '</LABEL>';	
		}

		static function buildTextAreaUS($title,$name,$id,$val,$rows="4",$cols="50") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			echo '<TEXTAREA onkeypress="return isUSLetter(event)" name = "'.$name.'" id="'.$id.'" rows="'.$rows.'" cols="'.$cols.'"' ; 
                       	echo 'placeholder="'.$title.'">';
			echo $val;
			echo '</TEXTAREA>';	
        		echo '</LABEL>';	
		}
		
		static function buildTextAreaAddress($title,$name,$id,$val,$rows="4",$cols="50") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			echo '<TEXTAREA onkeypress="return isUSLetterOrNumber(event)" name = "'.$name.'" id="'.$id.'" rows="'.$rows.'" cols="'.$cols.'"' ; 
                       	echo 'placeholder="'.$title.'">';
			echo $val;
			echo '</TEXTAREA>';	
        		echo '</LABEL>';	
		}
		

		static function buildInputPasswordAllDevices($title,$name,$id,$val,$maxlength="50") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
			echo '<INPUT name = "'.$name.'" type="password" id="'.$id.'" value = "'.$val.'" '; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';	
        		echo '</LABEL>';	
		}

		static function buildInputPassword($title,$name,$id,$val,$maxlength="50") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			echo '<INPUT name = "'.$name.'" type="password" id="'.$id.'" value = "'.$val.'" '; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';	
        		echo '</LABEL>';	
		}


		static function buildInputFile($title,$name,$id,$val) {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			echo '<INPUT type="file" name="'.$name.'" id="'.$id.'" value = "'.$val.'">';
			echo '</LABEL>';
		}

		static function buildScriptCalendar($name,$minYear="1900",$maxYear="2030") {
			$script = "<script>";
			$script .= "$.datepicker.regional['es'] = {";
 			$script .= "closeText: 'Cerrar',";
 			$script .= "prevText: '<Ant',";
 			$script .= "nextText: 'Sig>',";
 			$script .= "currentText: 'Hoy',";
 			$script .= "monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],";
 			$script .= "monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],";
 			$script .= "dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],";
 			$script .= "dayNamesShort: ['Dom','Lun','Mar','Mi�','Juv','Vie','Sab'],";
 			$script .= "dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],";
 			$script .= "weekHeader: 'Sm',";
 			$script .= "dateFormat: 'dd/mm/yy',";
 			$script .= "firstDay: 1,";
 			$script .= "isRTL: false,";
 			$script .= "showMonthAfterYear: false,";
 			$script .= "yearSuffix: ''";
 			$script .= "};";
 			$script .= "$.datepicker.setDefaults($.datepicker.regional['es']);";
			$script .= "$(function () {";
			$script .= '$("#'.$name.'").datepicker({';
			$script .= "changeMonth: true,";
      			$script .= "changeYear: true,";
      			$script .= 'yearRange: "'.$minYear.':'.$maxYear.'"';
			$script .= "});";
			$script .= "});";
			$script .= "</script>";
			echo $script;
		}

		static function buildScriptCalendar2($name,$minYear="1900",$maxYear="2030") {
			$script = "<script>";
			$script .= "$.datepicker.regional['es'] = {";
 			$script .= "closeText: 'Cerrar',";
 			$script .= "prevText: '<Ant',";
 			$script .= "nextText: 'Sig>',";
 			$script .= "currentText: 'Hoy',";
 			$script .= "monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],";
 			$script .= "monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],";
 			$script .= "dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],";
 			$script .= "dayNamesShort: ['Dom','Lun','Mar','Mi�','Juv','Vie','Sab'],";
 			$script .= "dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],";
 			$script .= "weekHeader: 'Sm',";
 			$script .= "dateFormat: 'dd-mm-yy',";
 			$script .= "firstDay: 1,";
 			$script .= "isRTL: false,";
 			$script .= "showMonthAfterYear: false,";
 			$script .= "yearSuffix: ''";
 			$script .= "};";
 			$script .= "$.datepicker.setDefaults($.datepicker.regional['es']);";
			$script .= "$(function () {";
			$script .= '$("#'.$name.'").datepicker({';
			$script .= "changeMonth: true,";
      			$script .= "changeYear: true,";
      			$script .= 'yearRange: "'.$minYear.':'.$maxYear.'"';
			$script .= "});";
			$script .= "});";
			$script .= "</script>";
			echo $script;
		}

		static function buildScriptCalendar3($name,$minYear="1900",$maxYear="2030") {
			$script = "<script>";
			$script .= "$.datepicker.regional['es'] = {";
 			$script .= "closeText: 'Cerrar',";
 			$script .= "prevText: '<Ant',";
 			$script .= "nextText: 'Sig>',";
 			$script .= "currentText: 'Hoy',";
 			$script .= "monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],";
 			$script .= "monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],";
 			$script .= "dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],";
 			$script .= "dayNamesShort: ['Dom','Lun','Mar','Mi�','Juv','Vie','Sab'],";
 			$script .= "dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],";
 			$script .= "weekHeader: 'Sm',";
 			$script .= "dateFormat: 'yy-mm-dd',";
 			$script .= "firstDay: 1,";
 			$script .= "isRTL: false,";
 			$script .= "showMonthAfterYear: false,";
 			$script .= "yearSuffix: ''";
 			$script .= "};";
 			$script .= "$.datepicker.setDefaults($.datepicker.regional['es']);";
			$script .= "$(function () {";
			$script .= '$("#'.$name.'").datepicker({';
			$script .= "changeMonth: true,";
      			$script .= "changeYear: true,";
      			$script .= 'yearRange: "'.$minYear.':'.$maxYear.'"';
			$script .= "});";
			$script .= "});";
			$script .= "</script>";
			echo $script;
		}

		static function buildToolTip() {
			$script = "<script>";
			$script .= "$(function() {";
    			$script .= "$( document ).tooltip();";
  			$script .= "});";
  			$script .= "</script>";
			echo $script;
		}


		static function buildDialogBox() {
			$script ='<script>';
  			$script .=' $(function() {';
    			$script .=' var dialog, form,'; 
	      		$script .=' name = $( "#name" ),';
      			$script .=' email = $( "#email" ),';
      			$script .=' password = $( "#password" ),';
      			$script .=' allFields = $( [] ).add( name ).add( email ).add( password ),';
      			$script .=' tips = $( ".validateTips" );';
    			$script .=' function addUser() {';
             		$script .=' $( "#users tbody" ).append( "<tr>" +';
          		$script .=' "<td>" + name.val() + "</td>" +';
          		$script .=' "<td>" + email.val() + "</td>" +';
          		$script .=' "<td>" + password.val() + "</td>" +';
        		$script .=' "</tr>" );';
        		$script .=' dialog.dialog( "close" );';
      			$script .=' }';
      			$script .=' return valid;';
    			$script .=' }';
    			$script .=' dialog = $( "#dialog-form" ).dialog({';
      			$script .=' autoOpen: false,';
      			$script .=' height: 300,';
     			$script .=' width: 350,';
      			$script .=' modal: true,';
      			$script .=' buttons: {';
        		$script .=' "Create an account": addUser,';
        		$script .=' Cancel: function() {';
          		$script .=' dialog.dialog( "close" );';
        		$script .=' }';
      			$script .=' },';
      			$script .=' close: function() {';
        		$script .=' form[ 0 ].reset();';
        		$script .=' allFields.removeClass( "ui-state-error" );';
      			$script .=' }';
    			$script .=' });';
    			$script .=' form = dialog.find( "form" ).on( "submit", function( event ) {';
      			$script .=' event.preventDefault();';
      			$script .=' addUser();';
    			$script .=' }); ';
    			$script .=' $( "#create-user" ).button().on( "click", function() {';
      			$script .=' dialog.dialog( "open" );';
    			$script .=' });';
  			$script .=' });';
  			$script .=' </script>';
			echo $script;
		}
		
		function initTabs($name) {
			$script = '<script>';
  			$script .= '$(function() {';
    			$script .= '$( "#'.$name.'" ).tabs({';
			$script .= 'beforeLoad: function( event, ui ) {';
        			$script .= 'ui.jqXHR.fail(function() {';
          			$script .= 'ui.panel.html(" Falla ");';
        			$script .= '});';
      			$script .= '}';
    			$script .= '});';
  			$script .= '})';
  			$script .= '</script>';
			echo $script;



		}
		function buildTabs($name,$arTitle,$arPL) {
			$script = '<div id="'.$name.'">';
  			$script .= '<ul>';
			$nt = count($arTitle);
			for($i = 0;$i<$nt;$i++) {
    				$script.= '<li><a href="'.$arPL[$i].'">'.$arTitle[$i].'</a></li>';
			}
			$script .= '</ul>';

			$script.= '</div>';
			echo $script;
		}



		static function buildCaptchaPathAllDevices($pathI,$title,$w=100,$h=40,$noc=5) {
			echo '<LABEL>';	
			echo '<SPAN>'.$title.'</SPAN>';
			$path = $pathI."/includes/captcha.php?width=".$w."&height=".$h."&characters=".$noc;
			echo '<IMG align="center" style="padding-right: 5px; border: 0" src="'.$path.'"></IMG>';
			echo '</label>';
		}

		static function buildCaptchaPath($pathI,$title,$w=100,$h=40,$noc=5) {
			echo '<LABEL>';	
			echo '<SPAN>'.$title.' :</SPAN>';
			$path = $pathI."/includes/captcha.php?width=".$w."&height=".$h."&characters=".$noc;
			echo '<IMG align="center" style="padding-right: 5px; border: 0" src="'.$path.'"></IMG>';
			echo '</label>';
		}
		
   
		static function buildCaptcha($title,$w=100,$h=40,$noc=5) {
			echo '<LABEL>';	
			echo '<SPAN>'.$title.' :</SPAN>';
			$path = PATH."/includes/captcha.php?width=".$w."&height=".$h."&characters=".$noc;
			echo '<IMG align="center" style="padding-right: 5px; border: 0" src="'.$path.'"></IMG>';
			echo '</label>';
		}

		static function getCaptcha() {
			return isset($_SESSION['captcha']) ? $_SESSION['captcha'] : '';
		}


		static function getUser() {
			return isset($_SESSION['user']) ? $_SESSION['user'] : '';
		}

		static function setUser($user) {
			$_SESSION["user"]=$user;
		}

		static function sessionLogged() {
			$user = presentationLayer::getUser();
			if ($user == "") {
				utilities::redirect(PATH."index.php");	
			}
			return ($user);
		}

		static function buildSubmit($title,$name,$id,$value="") {
			echo '<DIV align="center">';
			echo '<BUTTON type="submit" name="'.$name.'" id="'.$id.'" align="center" class="css_button" value = "'.$value.'">'.$title.'</BUTTON>';
			echo '</DIV>';
		}

		static function buildSubmit2($title1,$name1,$id1,$value1,
						$title2,$name2,$id2,$value2,
						$title3="",$name3="",$id3="",$value3="",
						$title4="",$name4="",$id4="",$value4="",
						$title5="",$name5="",$id5="",$value5="",
						$title6="",$name6="",$id6="",$value6="",
						$title7="",$name7="",$id7="",$value7="",
						$title8="",$name8="",$id8="",$value8="",
						$title9="",$name9="",$id9="",$value9="",
						$title10="",$name10="",$id10="",$value10="",
						$title11="",$name11="",$id11="",$value11="",
						$title12="",$name12="",$id12="",$value12="",
						$title13="",$name13="",$id13="",$value13="",
						$title14="",$name14="",$id14="",$value14="",
						$title15="",$name15="",$id15="",$value15="",
						$title16="",$name16="",$id16="",$value16="",
						$title17="",$name17="",$id17="",$value17="",
						$title18="",$name18="",$id18="",$value18="",
						$title19="",$name19="",$id19="",$value19="",
						$title20="",$name20="",$id20="",$value20="",
						$title21="",$name21="",$id21="",$value21="",
						$title22="",$name22="",$id22="",$value22="",
						$title23="",$name23="",$id23="",$value23="",
						$title24="",$name24="",$id24="",$value24="",
						$title25="",$name25="",$id25="",$value25="",
						$title26="",$name26="",$id26="",$value26="",
						$title27="",$name27="",$id27="",$value27="",
						$title28="",$name28="",$id28="",$value28="",
						$title29="",$name29="",$id29="",$value29="",
						$title30="",$name30="",$id30="",$value30="") {
			echo '<DIV align="center">';
			echo '<BUTTON type="submit" name="'.$name1.'" id="'.$id1.'" align="center" class="css_button" value = "'.$value1.'">'.$title1.'</BUTTON>';
			echo '<BUTTON type="submit" name="'.$name2.'" id="'.$id2.'" align="center" class="css_button" value = "'.$value2.'">'.$title2.'</BUTTON>';	
			if ($title3 != "") {
				echo '<BUTTON type="submit" name="'.$name3.'" id="'.$id3.'" align="center" class="css_button" value = "'.$value3.'">'.$title3.'</BUTTON>';	
			}
			if ($title4 != "") {
				echo '<BUTTON type="submit" name="'.$name4.'" id="'.$id4.'" align="center" class="css_button" value = "'.$value4.'">'.$title4.'</BUTTON>';	
			}
			if ($title5 != "") {
				echo '<BUTTON type="submit" name="'.$name5.'" id="'.$id5.'" align="center" class="css_button" value = "'.$value5.'">'.$title5.'</BUTTON>';	
			}
			if ($title6 != "") {
				echo '<BUTTON type="submit" name="'.$name6.'" id="'.$id6.'" align="center" class="css_button" value = "'.$value6.'">'.$title6.'</BUTTON>';	
			}
			if ($title7 != "") {
				echo '<BUTTON type="submit" name="'.$name7.'" id="'.$id7.'" align="center" class="css_button" value = "'.$value7.'">'.$title7.'</BUTTON>';	
			}	
			if ($title8 != "") {
				echo '<BUTTON type="submit" name="'.$name8.'" id="'.$id8.'" align="center" class="css_button" value = "'.$value8.'">'.$title8.'</BUTTON>';	
			}
			if ($title9 != "") {
				echo '<BUTTON type="submit" name="'.$name9.'" id="'.$id9.'" align="center" class="css_button" value = "'.$value9.'">'.$title9.'</BUTTON>';	
			}
			if ($title10 != "") {
				echo '<BUTTON type="submit" name="'.$name10.'" id="'.$id10.'" align="center" class="css_button" value = "'.$value10.'">'.$title10.'</BUTTON>';	
			}
			if ($title11 != "") {
				echo '<BUTTON type="submit" name="'.$name11.'" id="'.$id11.'" align="center" class="css_button" value = "'.$value11.'">'.$title11.'</BUTTON>';	
			}
			if ($title12 != "") {
				echo '<BUTTON type="submit" name="'.$name12.'" id="'.$id12.'" align="center" class="css_button" value = "'.$value12.'">'.$title12.'</BUTTON>';	
			}
			if ($title13 != "") {
				echo '<BUTTON type="submit" name="'.$name13.'" id="'.$id13.'" align="center" class="css_button" value = "'.$value13.'">'.$title13.'</BUTTON>';	
			}
			if ($title14 != "") {
				echo '<BUTTON type="submit" name="'.$name14.'" id="'.$id14.'" align="center" class="css_button" value = "'.$value14.'">'.$title14.'</BUTTON>';	
			}
			if ($title15 != "") {
				echo '<BUTTON type="submit" name="'.$name15.'" id="'.$id15.'" align="center" class="css_button" value = "'.$value15.'">'.$title15.'</BUTTON>';	
			}
			if ($title16 != "") {
				echo '<BUTTON type="submit" name="'.$name16.'" id="'.$id16.'" align="center" class="css_button" value = "'.$value16.'">'.$title16.'</BUTTON>';	
			}
			if ($title17 != "") {
				echo '<BUTTON type="submit" name="'.$name17.'" id="'.$id17.'" align="center" class="css_button" value = "'.$value17.'">'.$title17.'</BUTTON>';	
			}
			if ($title18 != "") {
				echo '<BUTTON type="submit" name="'.$name18.'" id="'.$id18.'" align="center" class="css_button" value = "'.$value18.'">'.$title18.'</BUTTON>';	
			}
			if ($title19 != "") {
				echo '<BUTTON type="submit" name="'.$name19.'" id="'.$id19.'" align="center" class="css_button" value = "'.$value19.'">'.$title19.'</BUTTON>';	
			}
			if ($title20 != "") {
				echo '<BUTTON type="submit" name="'.$name20.'" id="'.$id20.'" align="center" class="css_button" value = "'.$value20.'">'.$title20.'</BUTTON>';	
			}
			if ($title21 != "") {
				echo '<BUTTON type="submit" name="'.$name21.'" id="'.$id21.'" align="center" class="css_button" value = "'.$value21.'">'.$title21.'</BUTTON>';	
			}
			if ($title22 != "") {
				echo '<BUTTON type="submit" name="'.$name22.'" id="'.$id22.'" align="center" class="css_button" value = "'.$value22.'">'.$title22.'</BUTTON>';	
			}
			if ($title23 != "") {
				echo '<BUTTON type="submit" name="'.$name23.'" id="'.$id23.'" align="center" class="css_button" value = "'.$value23.'">'.$title23.'</BUTTON>';	
			}
			if ($title24 != "") {
				echo '<BUTTON type="submit" name="'.$name24.'" id="'.$id24.'" align="center" class="css_button" value = "'.$value24.'">'.$title24.'</BUTTON>';	
			}
			if ($title25 != "") {
				echo '<BUTTON type="submit" name="'.$name25.'" id="'.$id25.'" align="center" class="css_button" value = "'.$value25.'">'.$title25.'</BUTTON>';	
			}
			if ($title26 != "") {
				echo '<BUTTON type="submit" name="'.$name26.'" id="'.$id26.'" align="center" class="css_button" value = "'.$value26.'">'.$title26.'</BUTTON>';	
			}
			if ($title27 != "") {
				echo '<BUTTON type="submit" name="'.$name27.'" id="'.$id27.'" align="center" class="css_button" value = "'.$value27.'">'.$title27.'</BUTTON>';	
			}
			if ($title28 != "") {
				echo '<BUTTON type="submit" name="'.$name28.'" id="'.$id28.'" align="center" class="css_button" value = "'.$value28.'">'.$title28.'</BUTTON>';	
			}
			if ($title29 != "") {
				echo '<BUTTON type="submit" name="'.$name29.'" id="'.$id29.'" align="center" class="css_button" value = "'.$value29.'">'.$title29.'</BUTTON>';	
			}
			if ($title30 != "") {
				echo '<BUTTON type="submit" name="'.$name30.'" id="'.$id30.'" align="center" class="css_button" value = "'.$value30.'">'.$title30.'</BUTTON>';	
			}

		echo '</DIV>';
		}
		
		static function buildSelectAllDevices($title,$name,$id,$mod,$foreignTable,$curVal,$foreignscheme="",$event="",$disabled="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
			if ($event != "") {
				$event = 'onchange="'.$event.'"';
			}
			echo '<SELECT '.$disabled.' name="'.$name.'" id="'.$id.'" '.$event.' >';
			$mod->fillForeignTableCombo($foreignTable,$curVal,$foreignscheme);
			echo '</SELECT>';
			echo '</LABEL>';
		}

		static function buildSelectAllDevicesActive($title,$name,$id,$mod,$foreignTable,$curVal,$foreignscheme="",$event="",$disabled="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
			if ($event != "") {
				$event = 'onchange="'.$event.'"';
			}
			echo '<SELECT '.$disabled.' name="'.$name.'" id="'.$id.'" '.$event.' >';
			$mod->fillForeignTableComboActive($foreignTable,$curVal,$foreignscheme);
			echo '</SELECT>';
			echo '</LABEL>';
		}
		
		static function buildSelect($title,$name,$id,$mod,$foreignTable,$curVal,$foreignscheme="",$event="",$disabled="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($event != "") {
				$event = 'onchange="'.$event.'"';
			}
			echo '<SELECT '.$disabled.' name="'.$name.'" id="'.$id.'" '.$event.' >';
			$mod->fillForeignTableCombo($foreignTable,$curVal,$foreignscheme);
			echo '</SELECT>';
			echo '</LABEL>';
		}

		static function buildSelectArr($title,$name,$id,$arr) {

			echo '<LABEL>';
        			echo '<SPAN>'.$title.' :</SPAN>';
			$nr = count($arr); 
			echo '<SELECT name="'.$name.'" id="'.$id.'" >';
			for ($i=0; $i < $nr; $i++) {
        				echo '<option value="'.$arr[$i].'">'.$arr[$i].'</option>';
	 		}
			echo '</SELECT>';
			echo '</LABEL>';

		}

		static function buildSelectWithRestriction($title,$name,$id,$mod,
				$foreignTable,$curVal,$restCol,$restVal,$foreignscheme="",$event="") {

			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($event != "") {
				if ($event == "submit") {
					$event = 'onchange="submit()"';
				}
				else {
					$event = 'onchange="'.$event.'"';
				}
			}
			echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' >';
			$mod->fillForeignTableComboWithRestriction($foreignTable,$curVal,$restCol,$restVal,$foreignscheme);
			
			echo '</SELECT>';
			echo '</LABEL>';

			
		}
	
		static function buildSelectWithComEvent($title,$name,$id,$mod,
				$com,$valCol,$showCol,$curVal,$event="") {

			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			$event = 'onchange="'.$event.'"';
			
			echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' >';
			$mod->fillComboCom($com,$valCol,$showCol,$curVal);
			
			echo '</SELECT>';
			echo '</LABEL>';

			
		}

		static function buildSelectWithCom($title,$name,$id,$mod,
				$com,$valCol,$showCol,$curVal,$event="") {

			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			if ($event != "") {
				$event = 'onchange="submit()"';
			}
			echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' >';
			$mod->fillComboCom($com,$valCol,$showCol,$curVal);
			
			echo '</SELECT>';
			echo '</LABEL>';

			
		}

            	static function buildSelectWithComsinpunto($title,$name,$id,$mod,
				$com,$valCol,$showCol,$curVal,$event="") {

			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
			if ($event != "submit()") {
			    $event = 'onchange="'.$event.'"';
			}
                        else{
                            if ($event != "") {
                               $event = 'onchange="submit()"';
                            }
                        }
			echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' >';
			$mod->fillComboCom($com,$valCol,$showCol,$curVal);
			
			echo '</SELECT>';
			echo '</LABEL>';

			
		}



		static function buildSelectWithComAllDevices($title,$name,$id,$mod,
				$com,$valCol,$showCol,$curVal,$event="") {

			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
			if ($event != "") {
				$event = 'onchange="submit()"';
			}
			echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' >';
			$mod->fillComboCom($com,$valCol,$showCol,$curVal);
			
			echo '</SELECT>';
			echo '</LABEL>';

			
		}


		 



		static function buildFooter($pl,$bl,$pn=0,$parname="",$parvalue="",$save="Y",$delete="Y",$print="Y",$clean="Y",$find="Y") {
			echo '<TABLE class="italsis">';  
			echo '<TR>';
			echo '<TD>'; 
			$pl->showButtons($save,$delete,$print,$clean,$find);
			echo '</TD>'; 
			echo '</TR>';
			echo '</TABLE>';
			$bl->fillGrid($pn,$parname,$parvalue);
			
		}

		static function buildFooterDef($title1,$name1,$id1,$value1,
					$title2="",$name2="",$id2="",$value2="",
					$title3="",$name3="",$id3="",$value3="",
					$title4="",$name4="",$id4="",$value4="",
					$title5="",$name5="",$id5="",$value5="") {
			echo '<DIV align="center">';
			echo '<TABLE bgcolor="#D2E9FF">';
			echo '<TR bgcolor="#D2E9FF">';
			echo '<TD bgcolor="#D2E9FF">'; 
			echo '<BUTTON type="submit" name="'.$name1.'" id="'.$id1.'" align="center" class="css_button" value = "'.$value1.'">'.$title1.'</BUTTON>';
			if ($title2 != "") 
				echo '<BUTTON type="submit" name="'.$name2.'" id="'.$id2.'" align="center" class="css_button" value = "'.$value2.'">'.$title2.'</BUTTON>';
			if ($title3 != "") 
				echo '<BUTTON type="submit" name="'.$name3.'" id="'.$id3.'" align="center" class="css_button" value = "'.$value3.'">'.$title3.'</BUTTON>';
			if ($title4 != "") 
				echo '<BUTTON type="submit" name="'.$name4.'" id="'.$id4.'" align="center" class="css_button" value = "'.$value4.'">'.$title4.'</BUTTON>';
			if ($title5 != "") 
				echo '<BUTTON type="submit" name="'.$name5.'" id="'.$id5.'" align="center" class="css_button" value = "'.$value5.'">'.$title5.'</BUTTON>';
			
			echo '</TD>';
			echo '</TR>';
			echo '</TABLE>';
			echo '</DIV>';

			
		}

		
		static function buildFooterDisplayMethod($pl,$bl,$method,$pn=0,$save="Y",$delete="Y",$print="Y",$clean="Y",$find="Y") {
			echo '<TABLE class="italsis"';  
			echo '<TR>';
			echo '<TD>'; 
			$pl->showButtons($save,$delete,$print,$clean,$find);
			echo '</TD>'; 
			echo '</TR>';
			echo '</TABLE>';
        		$bl->fillGridDisplayMethod($method,$pn);
			
			
		}
	
		static function buildFooterDisplay($pl,$bl,$pn=0,$parname="",$parvalue="",$save="Y",$delete="Y",$print="Y",$clean="Y",$find="Y") {
			echo '<TABLE class="italsis"';  
			echo '<TR>';
			echo '<TD>'; 
			$pl->showButtons($save,$delete,$print,$clean,$find);
			echo '</TD>'; 
			echo '</TR>';
			echo '</TABLE>';
        		$bl->fillGridDisplay($pn,$parname,$parvalue);
			
			
		}


		static function buildFooterDisplayParameter($pl,$bl,$pn=0,$parname="",$parvalue="",$save="Y",$delete="Y",$print="Y",$clean="Y",$find="Y") {
			echo '<TABLE class="italsis"';  
			echo '<TR>';
			echo '<TD>'; 
			$pl->showButtons($save,$delete,$print,$clean,$find);
			echo '</TD>'; 
			echo '</TR>';
			echo '</TABLE>';
        		$bl->fillGridDisplayParameter($pn,$parname,$parvalue);
			
			
		}
		// ADDED  
		static function buildFooterNoGrid($pl,$bl,$pn=0,$save="Y",$delete="Y",$print="Y",$clean="Y",$find="Y") {
		    echo '<TABLE class="italsis">';
		    echo '<TR>';
		    echo '<TD>';
		    $pl->showButtons($save,$delete,$print,$clean,$find);
		    echo '</TD>';
		    echo '</TR>';
		    echo '</TABLE>';
		    	
		}

		static function buildFooterNoButtons() {
		    echo '<TABLE class="italsis">';
		    echo '<TR>';
		    echo '<TD>   ';
		    echo '</TD>';
		    echo '</TR>';
		    echo '</TABLE>';
		    	
		}

		// ADDED DOLGRAM
		static function fillGridArrNotPaged($arr, $arrCol,$arrWidth="",
				$width="700",$pageNumber="0",$bgcolor="",$enl="",$check="") {
					

			$nr = count($arr);
			$nc = count($arrCol);
			echo '<table class="italsis" width="'.$width.'" >';
			echo "  <tr> ";
			if ($check != "") {
				echo "<th>Procesar</th>";
			}			

			for($i=0; $i < $nc; $i++) {
				$name = $arrCol[$i];
				if (isset($arrWidth[$i])) {
					echo "<th width='".$arrWidth[$i]."'>".$name."</th>";
				}
				else {
					echo "<th>".$name."</th>";
				}
				if (($i%10)==0) {
					flush();
				}
				
			}
			echo "</tr>";
			if (is_array($arr)) { // bring values
				for($i=0; $i < $nr; $i++) {
					if (($i%10)==0) {
						flush();
					}
					$color = "";
					if (isset($bgcolor[$i])) {
						$color = ' bgcolor="'.$bgcolor[$i].'"';
					}
					
					echo "  <tr > ";
					if ($check != "") {
						$name = "CH".$i;
						$idCH = "CH".$i;
						echo '<td><input type="checkbox" name ="'.$name.'"id = "'.$idCH.'"></td>';
					}
					
					$reg = $arr[$i];
					$j = 0; // assummes id, first column
					foreach ($reg as $col) {
						//echo "j =".$j."col = ".$col."<br>";
						// color status 06/02/2017
						$oldcolor = $color;
						if ($j == 14) {
							if (stripos($col,"ANUL",0) !== false) {
								$color = ' bgcolor="yellow"';
							}
						}
						if ($j == 0 && ($pageNumber != "0")) {
							echo "<td><a href='?urloper=find&pn=".$pageNumber.$enl."&id=".$col."'>".$col."</a></td>";
						}
						else {
							if (isset($arrWidth[$j])) {
					 			echo "<td".$color." width='".$arrWidth[$i]."'>".$col."</td>";
							}
							else {
								echo "<td".$color.">".$col."</td>";
							
							}
						}
						$j++;
						$color = $oldcolor;
						
					
					}
					echo '</tr>';
					
				
				}
			}
			else {
				$end=1;
			}		
			echo "</table>";

		}	

		static function fillGridArrNotPagedCheck($arr, $arrCol,$arrWidth="",
				$width="700",$pageNumber="0",$bgcolor="",$enl="") {
					

			$nr = count($arr);
			$nc = count($arrCol);
			echo '<table class="italsis" width="'.$width.'" >';
			echo "  <tr> ";
			echo '<th width = "30">Procesar</th>';
						

			for($i=0; $i < $nc; $i++) {
				$name = $arrCol[$i];
				if (isset($arrWidth[$i])) {
					echo "<th width='".$arrWidth[$i]."'>".$name."</th>";
				}
				else {
					echo "<th>".$name."</th>";
				}
				if (($i%10)==0) {
					flush();
				}
				
			}
			echo "</tr>";
			if (is_array($arr)) { // bring values
				for($i=0; $i < $nr; $i++) {
					if (($i%10)==0) {
						flush();
					}
					$color = "";
					if (isset($bgcolor[$i])) {
						$color = ' bgcolor="'.$bgcolor[$i].'"';
					}
					
					echo "  <tr > ";
					$name = "CH".$i;
					$idCH = "CH".$i;
					echo '<td width = "30"><input type="checkbox" name ="'.$name.'"id = "'.$idCH.'"></td>';
					
					
					$reg = $arr[$i];
					$j = 0; // assummes id, first column
					foreach ($reg as $col) {
						//echo "j =".$j."col = ".$col."<br>";
						// color status 06/02/2017
						$oldcolor = $color;
						if ($j == 14) {
							if (stripos($col,"ANUL",0) !== false) {
								$color = ' bgcolor="yellow"';
							}
						}
						if ($j == 0 && ($pageNumber != "0")) {
							echo "<td><a href='?urloper=find&pn=".$pageNumber.$enl."&id=".$col."'>".$col."</a></td>";
						}
						else {
							if (isset($arrWidth[$j])) {
					 			echo "<td".$color." width='".$arrWidth[$i]."'>".$col."</td>";
							}
							else {
								echo "<td".$color.">".$col."</td>";
							
							}
						}
						$j++;
						$color = $oldcolor;
						
					
					}
					echo '</tr>';
					
				
				}
			}
			else {
				$end=1;
			}		
			echo "</table>";

		}		
	

		static function fillGridArrPlain($arr, $arrCol,$arrWidth="",
				$width="700") {
					

			$nr = count($arr);
			$nc = count($arrCol);
			echo '<table class="italsis" width="'.$width.'" >';
			echo "  <tr> ";			

			for($i=0; $i < $nc; $i++) {
				$name = $arrCol[$i];
				if (isset($arrWidth[$i])) {
					echo "<th width='".$arrWidth[$i]."'>".$name."</th>";
				}
				else {
					echo "<th>".$name."</th>";
				}
				if (($i%10)==0) {
					flush();
				}
				
			}
			echo "</tr>";
			if (is_array($arr)) { // bring values
				for($i=0; $i < $nr; $i++) {
					if (($i%10)==0) {
						flush();
					}
					$color = "";
					if (isset($bgcolor[$i])) {
						$color = ' bgcolor="'.$bgcolor[$i].'"';
					}
					
					echo "  <tr > ";
					
					$reg = $arr[$i];
					$j = 0; // assummes id, first column
					foreach ($reg as $col) {
						if (isset($arrWidth[$j])) {
					 		echo "<td width='".$arrWidth[$i]."'>".$col."</td>";
						}
						else {
							echo "<td>".$col."</td>";
							
						}
	
					}
					echo '</tr>';
					
				
				}
			}
			
			echo "</table>";

		}		


		static function fillGridArrNotPagedId($arr, $arrCol,$arrWidth="",
				$width="700",$pageNumber="0",$bgcolor="",$enl="") {
					

			$nr = count($arr);
			$nc = count($arrCol);
			echo '<table class="italsis" width="'.$width.'" >';
			echo "  <tr> ";			

			for($i=0; $i < $nc; $i++) {
				$name = $arrCol[$i];
				if (isset($arrWidth[$i])) {
					echo "<th width='".$arrWidth[$i]."'>".$name."</th>";
				}
				else {
					echo "<th>".$name."</th>";
				}
				if (($i%10)==0) {
					flush();
				}
				
			}
			echo "</tr>";
			if (is_array($arr)) { // bring values
				for($i=0; $i < $nr; $i++) {
					if (($i%10)==0) {
						flush();
					}
					$color = "";
					if (isset($bgcolor[$i])) {
						$color = ' bgcolor="'.$bgcolor[$i].'"';
					}
					echo "  <tr > ";
					
					$reg = $arr[$i];
					$j = 0; // assummes id, first column
					foreach ($reg as $col) {
						if ($j == 0) {
							echo "<td><a href='?urloper=find&id=".$col."'>".$col."</a></td>";
						}
						else {
							if (isset($arrWidth[$j])) {
					 			echo "<td".$color." width='".$arrWidth[$i]."'>".$col."</td>";
							}
							else {
								echo "<td".$color.">".$col."</td>";
							
							}
						}
						$j++;
					
					}
					echo '</tr>';
					
				
				}
			}
			else {
				$end=1;
			}		
			echo "</table>";

		}		



		static function fillGridArrNotPagedNotCss($arr, $arrCol,$arrWidth="",
				$width="700",$pageNumber="0",$bgcolor="") {
					

			$nr = count($arr);
			$nc = count($arrCol);
			echo '<table width="'.$width.'" >';
			echo "  <tr> ";			

			for($i=0; $i < $nc; $i++) {
				$name = $arrCol[$i];
				if (isset($arrWidth[$i])) {
					echo "<th width='".$arrWidth[$i]."'>".$name."</th>";
				}
				else {
					echo "<th>".$name."</th>";
				}
				
			}
			echo "</tr>";
			if (is_array($arr)) { // bring values
				for($i=0; $i < $nr; $i++) {
					if (isset($bgcolor[$i])) {
						echo '<tr bgcolor="'.$bgcolor[$i].'"> ';
					}
					else {
						echo "  <tr > ";
					}
					$reg = $arr[$i];
					$j = 0; // assummes id, first column
					foreach ($reg as $col) {
						if ($j == 0 && ($pageNumber != "0")) {
							echo "<td><a href='?urloper=find&pn=".$pageNumber."&id=".$col."'>".$col."</a></td>";
						}
						else {
							if (isset($arrWidth[$j])) {
					 			echo "<td width='".$arrWidth[$i]."'>".$col."</td>";
							}
							else {
								echo "<td>".$col."</td>";
							
							}
						}
						$j++;
					
					}
					echo '</tr>';
					
				
				}
			}
			else {
				$end=1;
			}		
			echo "</table>";

		}		



		static function fillGridArr($arr, $arrCol,$par="",$pageSize=10,$pageNumber=0,$width=900,$check="0",$select="0") {

			
			

			$nr = count($arr);
			$nc = count($arrCol);
			echo '<table class="italsis" width="'.$width.'" >';
			echo "  <tr> ";

			$pnc = $pageNumber;
			 

			if ($check) {
				echo "<th>Procesar</th>";

			}	

			if ($select) {
				echo "<th>Seleccionar</th>";

			}	
		

			for($i=0; $i < $nc; $i++) {
				
				$name = $arrCol[$i];
				echo "<th>".$name."</th>";
				
			}
			$end = 0;
			echo "</tr>";
			//print_r($arr);
			if (is_array($arr)) { // bring values
				for($i=0; $i < $nr; $i++) {
					if (($i%10)==0) {
						flush();
					}
					echo "  <tr > ";
					
					$reg = $arr[$i];
					if ($check) {
						$name = "CH".$i;
						$id = "CH".$i;
						
						echo '<td><input type="checkbox" name ="'.$name.'"id = "'.$id.'"></td>';
					}

					if ($select) {
						$name = "CB".$i;
						$id = "CB".$i;
						
						echo '<td><input type="radio" onclick="submit()" name ="'.$name.'"id = "'.$id.'"></td>';
					}
					
					$j = 0; // assummes id, first column
					foreach ($reg as $col) {
						if ($j == 0) {
							echo "<td><a href='?urloper=find&pn=".$pageNumber."&id=".$col."'>".$col."</a></td>";
						}
						else {
					 		echo "<td>".$col."</td>";
						}
						$j++;
					
					}
					echo '</tr>';
				
				}
				if ($nr < $pageSize) { // added on 05/30/2015
					$end = 1;
				}
			}
			else {
				$end=1;
			}		
			echo "</table>";
			if (!$select) {
				echo '<table class="italsis">';
				echo "<tr>";
				echo "<td>";
				$pn = $pnc-1;
				if ($pn < 0)
					$pn = 0;
				$enl="pn=".$pn.$par;
				echo "<a href='"."?".$enl."'>&lt</a>";	
				echo "</td>";
				echo "<td>";
				if ($end)
					$pn = 0; // was $pnc
				else
					$pn = $pnc+1;
				$enl="pn=".$pn.$par;
				echo "<a href='"."?".$enl."'>&gt</a>";	
				echo "</td>";
				echo "</tr>";
			
				echo "</table>";
			}
		
		}

		static function fillGridArrToolTip($arr, $arrCol,$arrT, $colTT,$widthCol="",
				$par="",$pageSize=10,$pageNumber=0,$width=900,$check="0",$select="0") {

			
			

			$nr = count($arr);
			$nc = count($arrCol);
			echo '<table class="italsis" width="'.$width.'" >';
			echo "  <tr> ";

			$pnc = $pageNumber;
			 

			if ($check) {
				echo "<th width='40'>Procesar</th>";

			}	

			if ($select) {
				echo "<th width='40'>Seleccionar</th>";

			}	

				

			for($i=0; $i < $nc; $i++) {
				$name = $arrCol[$i];
				if (isset($widthCol[$i]) && $widthCol[$i] != "") { 
					echo "<th width='".$widthCol[$i]."'>".$name."</th>";
				}
				else {
					echo "<th>".$name."</th>";
				}
				
			}
			flush();
			$end = 0;
			echo "</tr>";
			//print_r($arr);
			if (is_array($arr)) { // bring values
				for($i=0; $i < $nr; $i++) {
					if (($i%10)==0) {
						flush();
					}
					echo "  <tr > ";
					
					$reg = $arr[$i];
					if ($check) {
						$name = "CH".$i;
						$id = "CH".$i;
						
						echo '<td width="30"><input type="checkbox" name ="'.$name.'"id = "'.$id.'"></td>';
					}

					if ($select) {
						$name = "CB".$i;
						$id = "CB".$i;
						
						echo '<td width="30"><input type="radio" onclick="submit()" name ="'.$name.'"id = "'.$id.'"></td>';
					}
					
					$j = 0; // assummes id, first column
					foreach ($reg as $col) {
						if ($j == 0) {
							echo "<td width='30'><a href='?urloper=find&pn=".$pageNumber."&id=".$col."'>".$col."</a></td>";
						}
						else {
					 		if (isset($widthCol[$j]) && $widthCol[$j] != "") {   
								echo "<td width='".$widthCol[$j]."' title='".$arrT[$i]."'>".$col."</td>";
							}
							else {
								echo "<td>".$col."</td>";
							}
						}
						$j++;
					
					}
					echo '</tr>';
				
				}
				if ($nr < $pageSize) { // added on 05/30/2015
					$end = 1;
				}
				flush();
			}
			else {
				$end=1;
			}		
			echo "</table>";
			if (!$select) {
				echo '<table class="italsis">';
				echo "<tr>";
				echo "<td>";
				$pn = $pnc-1;
				if ($pn < 0)
					$pn = 0;
				$enl="pn=".$pn.$par;
				echo "<a href='"."?".$enl."'>&lt</a>";	
				echo "</td>";
				echo "<td>";
				if ($end)
					$pn = 0; // was $pnc
				else
					$pn = $pnc+1;
				$enl="pn=".$pn.$par;
				echo "<a href='"."?".$enl."'>&gt</a>";	
				echo "</td>";
				echo "</tr>";
			
				echo "</table>";
			}
		
		}

        static function buildSelect2param($title,$name,$id,$mod,$foreignTable,$curVal,$foreignscheme="",$event="",$disabled="",$param = "", $param2 = "",$readonly="") {
                echo '<LABEL>';
                echo '<SPAN>'.$title.' :</SPAN>';
                if ($event != "")
                        $event = ' onBlur="'.$event.'" ';

                echo '<SELECT '.$disabled.' name="'.$name.'" id="'.$id.'" '.$event.' style="widht:10%" >';
                $mod->fillForeignTableComboParamBoth($foreignTable,$curVal,$foreignscheme, $param,$param2);
                echo '</SELECT>';
                echo $event;
                echo '</LABEL>';
        }



static function buildHeaderITALPORTAL($img="indexPortal",$alt="Organizacion Italcambio") {
			//<!-- Header -->
	
      echo '<HEADER id="mukam-header" class="mukam-header header mukam-header-large header-4 fadein scaleInv anim_1">';
  		echo '<center>';
      echo '<A href="#"><img class="logo" height="70px" src="'.PATH.'images/'.$img.'.png" alt="'.$alt.'" title="Organizacion Italcambio"></a>';
      echo '</HEADER>';
		}


static function buildImgITALPORTAL($pRegister,$pLogin, $pType) {
     
      //<!-- Header -->
      echo '<HEADER id="mukam-header" class="mukam-header mukam-header-large header-4 fadein scaleInv anim_1">';   
      //<!-- Main Menu -->
      echo '<NAV class="navbar header-4 wrapper" role="navigation">';    
      //<!-- Brand and toggle get grouped for better mobile display -->
      echo '<DIV class="navbar-header">';
      echo '<TABLE>';
      //if ($pRegister != ""){
      echo '<TR>';
      echo '<TD>';
      echo '<A href="'.$pRegister.'"><img class="logo" src="images/register.png" alt="Registrarse" title="Registrarse"></a>';
      //}
      echo '</TD>';
      echo '<TD>';
      echo '<DIV class="container login">';
      echo '<DIV class="card">';
      echo '<DIV class="face front">';
      echo '<img class="logo" src="images/login.png" alt="Iniciar Sesion" title="Iniciar Sesion">';	
      echo '</DIV>';
      echo '<DIV class="face back">';
      echo '<IMG class="logo" src="images/logintype.png" alt="Iniciar Sesion" title="Iniciar Sesion" usemap="#Map">';
      echo '<MAP name="Map">';
      echo '<AREA shape="circle" coords="72, 66, 62" href="'.$pLogin.'">';
      echo '<AREA shape="circle" coords="271, 66, 62" href="'.$pType.'">';
      echo '</MAP>';
      echo '</TD>';
      echo '</DIV>';
      echo '</DIV>';
      echo '</DIV>';
      echo '</TR>';
      echo '</TABLE>';
      echo '</DIV>';
      echo '</NAV>';
      echo '</HEADER>'; 
    }


    static function buildFooterBrands() {
       
		  chdir(dirname(__FILE__));
  		include_once 'brands.php';
      echo '<div class="bar_footer">';
      $year = date ( 'Y' );
	  echo 'Todos los derechos reservados &#169; Organizaci&oacute;n Italcambio. ' . $year ;
      echo '</div>';
    }

    static function buildHidden($name,$id,$val) {
	echo '<INPUT  name = "'.$name.'" type="hidden" id="'.$id.'" value = "'.$val.'" ';
	echo '</INPUT>';
    }



   

        static function buildInputsinpuntosh($title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="") {
			echo '<LABEL>';
        		echo '<SPAN>'.$title.'</SPAN>';
//                        if ($onblur != "")
//				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT '.$readonly.' style="display:inline" name = "'.$name.'" type="text" onkeydown="'.$onblur.';" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo ' maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';	
	}

                static function buildSelectWithComsinpuntoh($title,$name,$id,$mod,
				$com,$valCol,$showCol,$curVal,$event="") {

//			echo '<LABEL>';
//        		echo '<SPAN>'.$title.'</SPAN>';
                        if ($event != "") {
                               $event = 'onchange="'.$event.'"';
                        }
			echo '<SELECT style="display:none" name="'.$name.'" id="'.$id.'" '.$event.' >';
			$mod->fillComboCom($com,$valCol,$showCol,$curVal);
			
			echo '</SELECT>';
//			echo '</LABEL>';

			
		}

static function fillGridArrPaginator($arr, $arrCol,$par="",$pageSize=10,$pageNumber=0,$width=900,$check="0",$select="0") {
    
      //echo "cambiamos todo";
      $nr = count($arr);
      //echo $nr;
      //print $arr;
      $nc = count($arrCol);
      //$pnc = $pageNumber;
      //echo '<section>';
      echo '<table id="" class="display" width="100%">';
      //$pnc = $pageNumber;
      echo '<thead>';
      for($i=0; $i < $nc; $i++) {
        $name = $arrCol[$i];
        echo "<th>".$name."</th>";
          
      }
    //  echo '<button onclick="window.location.href=../../datatables/fpdf/reportes.php" >FPDF</button>';
      echo '  </thead>';
    
      echo '<tbody>';
      $end = 0;
      echo "</tr>";
      //print_r($arr);
      if (is_array($arr)) { // bring values
        for($i=0; $i < $nr; $i++) {
          echo "  <tr > ";
    
          $reg = $arr[$i];
    
    
          $j = 0; // assummes id, first column
          foreach ($reg as $col) {
            if ($j == 0) {
              echo "<td><a href='?urloper=find&pn=".$pageNumber."&id=".$col."'>".$col."</a></td>";
            }
            else {
              echo "<td>".$col."</td>";
            }
            $j++;
              
          }
          echo '</tr>';
    
        }
    
      }
      else {
        $end=1;
      }
          
      echo '</tbody>';
      echo '</table>';
      
      //echo '</section>'; 
    
    }


                static function buildSelectArrsinpuntosh($title,$name,$id,$arr,$curVal="",$event="") {

                        if ($event != "") {
			    $event = 'onchange="'.$event.'"';
			}
			$nr = count($arr); 
			echo '<SELECT style="display:none" name="'.$name.'" id="'.$id.'" '.$event.' >';
			for ($i=0; $i < $nr; $i++) {
					if (($curVal != "") && ($arr[$i] == $curVal)) {
						echo '<option value="'.$arr[$i].'" SELECTED>'.$arr[$i].'</option>';
					}
					else {
        					echo '<option value="'.$arr[$i].'">'.$arr[$i].'</option>';
					}
	 		}
			echo '</SELECT>';

		} 

                static function buildSelectInputCI($title,$name,$id,$mod,$foreignTable,$curVal,$foreignscheme="",$onblur="",$disabled="",$nameIP,$idIP,$val,$param = "", $param2 = "",$maxlength="50",$readonly="") {
			echo '<LABEL>';
			echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
		
			echo '<SELECT '.$disabled.' name="'.$name.'" id="'.$id.'" '.$onblur.' style="widht:10%" >';
			$mod->fillForeignTableComboParamBoth($foreignTable,$curVal,$foreignscheme, $param,$param2);
			echo '</SELECT>';
			echo '<INPUT '.$readonly.' name = "'.$nameIP.'" type="text" onkeypress="return isNumber(event)" id="'.$idIP.'" value = "'.$val.'" title = "Por favor, rellene este campo." style="widht:40%"  ';
			echo $onblur;
			echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';
	}

/*===============================================
buildInputCheckEmail
Descripcion    : Funcion que muestra tag input <INPUT> en HTML 
parametro      :
<-- $title     : Titulo de la etiqueta 
<-- $name      : Nombre de la variable de referencia en PHP 
<-- $id        : Nombre de la variable de referencia en javascript 		
<-- $val       : Valor inicial 
<-- $maxlength : Establece el maximo de caracteres por defecto 50
<-- $readonly  : Etiqueta de solo lectura por defecto "" se puede modificar "readonly"
<-- $onblur    : Hace referencia a un evento en javascript
Funcion        : validarEmail (value); required placeholder="name@example.com"
Detalles       : Muestra tag input <INPUT> en HTML y realiza validaci�n del correo
=================================================*/	
static function buildInputCheckEmail($title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="") {
      echo '<LABEL>';
      echo '<SPAN>'.$title.' :</SPAN>';
      if ($onblur != "")
        $onblur = ' onBlur="'.$onblur.'" ';
      echo '<INPUT '.$readonly.' name = "'.$name.'" type="text" id="'.$id.'"  value = "'.$val.'"   onblur="validarEmail (value)" ';
      echo $onblur;
      echo 'maxlength="'.$maxlength.'" required placeholder="name@example.com"></INPUT>';
      echo '</LABEL>';    
        
    }
// 2019-12-30 Revision con Argenis
static function buildSubmitSpace($title1,$name1,$id1,$value1,
                                                $title2,$name2,$id2,$value2,
                                                $title3="",$name3="",$id3="",$value3="",
                                                $title4="",$name4="",$id4="",$value4="",
                                                $title5="",$name5="",$id5="",$value5="",
                                                $title6="",$name6="",$id6="",$value6="",
                                                $title7="",$name7="",$id7="",$value7="",
                                                $title8="",$name8="",$id8="",$value8="",
                                                $title9="",$name9="",$id9="",$value9="",
                                                $title10="",$name10="",$id10="",$value10="",
                                                $title11="",$name11="",$id11="",$value11="",
                                                $title12="",$name12="",$id12="",$value12="",
                                                $title13="",$name13="",$id13="",$value13="",
                                                $title14="",$name14="",$id14="",$value14="",
                                                $title15="",$name15="",$id15="",$value15="",
                                                $title16="",$name16="",$id16="",$value16="",
                                                $title17="",$name17="",$id17="",$value17="",
                                                $title18="",$name18="",$id18="",$value18="",
                                                $title19="",$name19="",$id19="",$value19="",
                                                $title20="",$name20="",$id20="",$value20="") {

                        echo '<DIV align="center">';                        
                        echo '<BUTTON type="submit" name="'.$name1.'" id="'.$id1.'" align="center" class="css_button" value = "'.$value1.'" >'.$title1.'</BUTTON>';                        
                        echo '&nbsp; ';
                        echo '<BUTTON type="submit" name="'.$name2.'" id="'.$id2.'" align="center" class="css_button" value = "'.$value2.'" >'.$title2.'</BUTTON>'; 
                        if ($title3 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name3.'" id="'.$id3.'" align="center" class="css_button" value = "'.$value3.'" >'.$title3.'</BUTTON>'; 
                        }
                        if ($title4 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name4.'" id="'.$id4.'" align="center" class="css_button" value = "'.$value4.'" >'.$title4.'</BUTTON>'; 
                        }
                        if ($title5 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name5.'" id="'.$id5.'" align="center" class="css_button" value = "'.$value5.'" >'.$title5.'</BUTTON>'; 
                        }
                        if ($title6 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name6.'" id="'.$id6.'" align="center" class="css_button" value = "'.$value6.'" >'.$title6.'</BUTTON>'; 
                        }
                        if ($title7 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name7.'" id="'.$id7.'" align="center" class="css_button" value = "'.$value7.'" >'.$title7.'</BUTTON>'; 
                        } 
                        if ($title8 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name8.'" id="'.$id8.'" align="center" class="css_button" value = "'.$value8.'" >'.$title8.'</BUTTON>'; 
                        }
                        if ($title9 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name9.'" id="'.$id9.'" align="center" class="css_button" value = "'.$value9.'" >'.$title9.'</BUTTON>'; 
                        }
                        if ($title10 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name10.'" id="'.$id10.'" align="center" class="css_button" value = "'.$value10.'" >'.$title10.'</BUTTON>'; 
                        }
                        if ($title11 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name11.'" id="'.$id11.'" align="center" class="css_button" value = "'.$value11.'" >'.$title11.'</BUTTON>'; 
                        }
                        if ($title12 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name12.'" id="'.$id12.'" align="center" class="css_button" value = "'.$value12.'" >'.$title12.'</BUTTON>'; 
                        }
                        if ($title13 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name13.'" id="'.$id13.'" align="center" class="css_button" value = "'.$value13.'" >'.$title13.'</BUTTON>'; 
                        }
                        if ($title14 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name14.'" id="'.$id14.'" align="center" class="css_button" value = "'.$value14.'" >'.$title14.'</BUTTON>'; 
                        }
                        if ($title15 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name15.'" id="'.$id15.'" align="center" class="css_button" value = "'.$value15.'" >'.$title15.'</BUTTON>'; 
                        }
                        if ($title16 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name16.'" id="'.$id16.'" align="center" class="css_button" value = "'.$value16.'" >'.$title16.'</BUTTON>'; 
                        }
                        if ($title17 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name17.'" id="'.$id17.'" align="center" class="css_button" value = "'.$value17.'" >'.$title17.'</BUTTON>'; 
                        }
                        if ($title18 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name18.'" id="'.$id18.'" align="center" class="css_button" value = "'.$value18.'" >'.$title18.'</BUTTON>'; 
                        }
                        if ($title19 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name19.'" id="'.$id19.'" align="center" class="css_button" value = "'.$value19.'" >'.$title19.'</BUTTON>'; 
                        }
                        if ($title20 != "") {
                            echo '&nbsp; ';
                            echo '<BUTTON type="submit" name="'.$name20.'" id="'.$id20.'" align="center" class="css_button" value = "'.$value20.'" >'.$title20.'</BUTTON>'; 
                        }
                echo '</DIV>';
                }

static function buildHeaderSecurity($sesion) { 
    if ($sesion != ''){    
        //$cerrarSesion = basePL::buildexit();
        //$cerrarSesion= '<span><a style=" color:#428bca; font-size: 14px; float: right; " >Fecha actual : '.utilities::currentDateTitan().'</a><br></span>'                
        $cerrarSesion=  '<span><a style=" color:#428bca; font-size: 14px;float: right;     padding-top: 10px;"  href="'.PATH.'index.php" title="Cierra la sesion del usuario">&nbsp;Cerrar Sesi&oacute;n</a></span>'
                .'<span><a style=" color:#b94a48; font-size: 14px;float: right; padding-top: 7px;"  href="'.PATH.'index.php" title="Cierra la sesion del usuario"><img style="height:25px; width:25px; "  src="'.PATH.'images/apagar.jfif" /></a></span>';
    }    
      
    echo '<HEADER id="mukam-header" class="mukam-header header mukam-header-large header-4 fadein scaleInv anim_1">';
    echo '<center style="text-align: left;>';
    echo '<a href="#"  ><img style=" width: 7%; " background-size = "contain" class="logo"  src="'.PATH.'images/UnoBanco.jpg" alt="Uno Banco" title="Uno Banco"></a>';
    echo $cerrarSesion;
    echo '</HEADER>';
     
    
    
}

static function buildFooterLiberty() {
      
	echo '<div class=""bar_footer"" style = ""position:absolute; bottom: 0; width:100%; color: white;  "">';
      
	$year = date ( 'Y' );
   
	echo 'Todos los derechos reservados &#169; Organizaci&oacute;n Italcambio. ' . $year ;
      echo '</div>';
    
}

static function buildFooterSecurity() {
      
	echo '<div class=""bar_footer"" style = ""position:absolute; bottom: 0; width:100%; color: white;  "">';
      
	$year = date ( 'Y' );
   
	echo 'Todos los derechos reservados &#169; Organizaci&oacute;n Italcambio. ' . $year ;
      echo '</div>';
    
}

static function buildHeaderMenu($iduser) {
     		$iduser=$iduser;        
       		presentationLayer::buildHeaderSecurity($iduser);
            	chdir(dirname(__FILE__));
            	include_once '../modules/masters/menuPL.php';
		chdir(dirname(__FILE__));
	}  

// Funcion incluida por Arturo Marcano
                static function buildSelectWithComEventWithCheckAll($title,$name,$id,$mod,
				$com,$valCol,$showCol,$curVal,$event="",
                                $namecheck,$idcheck,$valcheck,$disabledcheck="",$eventcheck="") {
                        //echo '<table><tr><td>';        
			echo '<LABEL>';
        		echo '<SPAN>'.$title.' :</SPAN>';
			$event = 'onchange="'.$event.'"';
			
			echo '<SELECT name="'.$name.'" class="italsisv2" id="'.$id.'" '.$event.' >';
			$mod->fillComboCom($com,$valCol,$showCol,$curVal);
			
			echo '</SELECT>';
			
			echo '<INPUT '.$disabledcheck.' name = "'.$namecheck.'"  type = "checkbox" class="italsisv2" id="'.$idcheck.'"';
			if ($valcheck == "Y" || $valcheck == "on") { 
				echo ' checked';
			}
			if ($eventcheck != "") {
				echo ' onClick="'.$eventcheck.'"';
			}
			echo ' >'; 
       		echo ' </INPUT>';
			
			
			echo '</LABEL>';
                        //echo '</td></tr></table>';
			
		}

		// Funcion agregada por Arturo Marcano
                static function buildInputHidden($title,$name,$id,$val,$maxlength="50",$readonly="",$onblur="") {
			//echo '<LABEL>';
        		//echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
			echo '<INPUT '.$readonly.' name = "'.$name.'" type="hidden" id="'.$id.'" value = "'.$val.'" ';
			echo $onblur; 
                       	echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			//echo '</LABEL>';	
		}

/*Nuevo*/

//buildSelectJson
//Descripcion: funcion de mostrar arreglos
//parametro : 
//<-- $title   : Contiene el titulo del objeto		
//<-- $name    : Contiele el nombre del objeto html
//<-- $id      : Contiele el id del objeto html
//<-- $json    : Contiele los datos en formato json				
//<-- $showCol :Valor de la columna a mostrar de la BD
//<-- $placeholder : Define la mascara o titulo informativo del objeto cuando esta en blanco
//Detalles: Muestra un grid  basado en un arreglo 
//ubicaci�n: Traida de web                
            static function buildSelectJson($title,$name,$id,$json,$showCol="",$event="",$placeholder="") {
                echo '<LABEL>';
                echo '<SPAN>'.$title.' :</SPAN>';
                $event = 'onchange="'.$event.'"';                
                echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' >';
                echo '<option value="0" >--Seleccione--</option>';                
                array_walk($json, function(&$value, $key)use(&$showCol) {                        
                    if (trim($showCol) == trim($key)){
			echo '<option value="'.$key.'" selected>'.$value.' </option>';
                    }else{			
                        echo '<option value="'.$key.'">'.$value.'</option>';                    
                    }
                });
                echo '</SELECT>';
                echo '</LABEL>';			
            }     
/*hasta aqui*/ 

/*Nuevo 12-02-2020*/ 
/*===============================================
fillGridArrCheckSelect
Descripcion     : Inserta etiqueta de <TABLE> en HTML con un grid 
parametro       :
<-- $arr        : Contiene la informacion del resulset de una consulta a la BD ejemplo (executeReader)		
<-- $arrCol     : Contiele un arreglo con las columnas a mostrar en el fillGrid
<-- $par        : Parametro que depende de otra funcion para hacer referencia a otro campo 
<-- $pageSize   : Define la cantidad de registros a mostrar por pagina				
<-- $pageNumber : Define la cantidad de paginas
<-- $width      : Define el ancho del fillGrid			
<-- $check      : Define si se visualiza un cuadro check por registro
<-- $select     : Define si se visualiza la selecion por registro	 
Detalles        : Muestra un fillGrid donde se envia informacion especifica para ser mostrada, mediante arreglos definidos pero sin link   
Ubicaci�n: Traida de web
==================================================*/
            static function fillGridArrCheckSelect($arr, $arrCol,$par="",$pageSize=10,$pageNumber=0,$width=900,$check="0",$select="0",$idetiqueta="fillGridArrCheckSelect") {
                $nr = count($arr);
                $nc = count($arrCol);
                echo '<table class="italsis" width="'.$width.'" id="'.$idetiqueta.'">';                        
                echo "  <tr> ";
                $pnc = $pageNumber;			 
                if ($check) {
                    echo "<th>Procesar</th>";
                }	
                if ($select) {
                    echo "<th>Seleccionar</th>";
                }			
                for($i=0; $i < $nc; $i++) {
                    $name = $arrCol[$i];
                    echo "<th>".$name."</th>";				
                }
                $end = 0;
                echo "</tr>";                        
                //print_r($arr);
                if (is_array($arr)) { // bring values
                    for($i=0; $i < $nr; $i++) {
                        echo "  <tr > ";					
                        $reg = $arr[$i];
                        if ($check) {
                            $name = "CH".$i;
                            $id = "CH".$i;						
                            echo '<td><input type="checkbox" name ="'.$name.'" id = "'.$id.'" ></td>';
                        }
                        if ($select) {
                            $name = "CB".$i;
                            $id = "CB".$i;
                            echo '<td><input type="radio" onclick="submit()" name ="'.$name.'"id = "'.$id.'"></td>';
                        }					
                        $j = 0; // assummes id, first column
                        foreach ($reg as $col) {
                            echo "<td>".$col."</td>";						
                        }
                        echo '</tr>';				
                    }
                    if ($nr < $pageSize) { // added on 05/30/2015
                        $end = 1;
                    }
                }
                else {
                    $end=1;
                }                        
                echo "</table>";
            } 	

/*hasta aqui 12-02-2020*/         
	
	/* Argenis 2020/02/14 */

	 static function buildFormTitleSection($title,$subTitle="Please fill all the texts in the fields.",$marquee="") {            
            echo '<H1 style="display: flow-root;">'.$title; 
            echo '<SPAN>'.$subTitle.'</SPAN>';
            if ($marquee != "") 
                    echo '<MARQUEE SCROLLDELAY =100>'.$marquee.'</MARQUEE>';
            echo '</H1>';            
        }

        static function buildInitCol1() {
            echo '<DIV class="formcol1">';           
        }
        static function buildInitCol2() {
            echo '<DIV class="formcol2">';           
        }
        static function buildInitCol3() {
            echo '<DIV class="formcol3">';           
         }

/* Argenis 2020/02/21 */

//fillGridArrPaginatorfull
//Descripcion: funcion de mostrar arreglos
//parametro : 
//<-- $arr        : Contiene la informacion del resulset de una consulta a la BD ejemplo (executeReader)		
//<-- $arrCol     : Contiele un arreglo con las columnas a mostrar en el fillGrid
//<-- $par        : Parametro que depende de otra funcion para hacer referencia a otro campo 
//<-- $pageSize   : Define la cantidad de registros a mostrar por pagina				
//<-- $pageNumber : Define la cantidad de paginas
//<-- $width      : Define el ancho del fillGrid			
//<-- $check      : Define si se visualiza un cuadro check por registro
//<-- $eventcheck : Define si se invoca una funcion javascript por registro al hacer click en el check
//<-- $select     : Define si se visualiza la selecion por registro
//<-- $eventradio : Define si se invoca una funcion javascript por registro al hacer click en el radio
//<-- $id         : identificador del objeto html
//Detalles: Muestra un grid  basado en un arreglo 
//ubicaci�n: Traida de web
//==================================================*/			
static function fillGridArrPaginatorFull($arr, $arrCol,$par="",$pageSize=10,$pageNumber=0,$width=900,$check="0",$eventcheck,$select="0",$eventradio,$id = "",$idmodal="") {        
    $nr = count($arr);
    $nc = count($arrCol);
    echo '<table id='.$id.' class="display '.$clase.'" width="100%">';
    echo '<thead>';
    echo "<tr>";
    if ($check) {
        echo "<th>Selec.</th>";
    }	
    if ($select) {
        echo "<th>Selec.</th>";
    }	
    for($i=0; $i < $nc; $i++) {
        $name = $arrCol[$i];             
        $clase = "th".$i;
        echo "<th class = '".$clase."'>".$name."</th>";
    }    
     echo "</tr>";
    echo '</thead>';
   
    echo '<tbody>';
    $end = 0;
    
    //print_r($arr);
    if (is_array($arr)) { // bring values
        for($i=0; $i < $nr; $i++) {
            $clase = "td".$i;
            echo "  <tr> ";
            $reg = $arr[$i];
            if ($check) {
                $name = "CH".$i;
                $id = "CH".$i;						
                echo '<td><input type="checkbox" name ="'.$name.'" id = "'.$id.'" onclick="'.$eventcheck.'"></td>';
            }
            if ($select) {
                $name = "CB".$i;
                $id = "CB".$i;
                echo '<td><input data-toggle="modal" data-target="'.$idmodal.'" type="radio"  name ="seleccion" id = "'.$id.'"  onclick="'.$eventradio.'"></td>';
            }	
            $j = 0; // assummes id, first column
            foreach ($reg as $col) {
              if ($j == 0) {
                echo "<td><a href='?urloper=find&pn=".$pageNumber."&id=".$col."'>".$col."</a></td>";
              }
              else {
                echo "<td class = 'col".$j."'>".$col."</td>";
              }
              $j++;             
            }
            echo '</tr>';
        }
    }
    else {
      $end=1;
    }
    echo '</tbody>';
    echo '</table>';    
    } 

/* Argenis 2020/03/05 */

static function buildSelectJsonInput($title,$name,$id,$json,$showCol,$nameIP,$idIP,$val,$maxlength="50",$readonly="") {
			echo '<LABEL>';
			echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
		
                        echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' >';
                            echo '<option value="0" >Seleccione</option>';                
                            array_walk($json, function(&$value, $key)use(&$showCol) {                        
                                if (trim($showCol) == trim($key)){
                                    echo '<option value="'.$key.'" selected>'.$value.' </option>';
                                }else{			
                                    echo '<option value="'.$key.'">'.$value.'</option>';                    
                                }
                            });
                        echo '</SELECT>';
			echo '<INPUT '.$readonly.' name = "'.$nameIP.'" type="text"  id="'.$idIP.'" value = "'.$val.'" title = "Por favor, rellene este campo." style="widht:40%"  ';
			echo $onblur;
			echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
			echo '</LABEL>';
	}

/* Argenis 2020/04/15 */

static function buildmodalbootstrap($titulo="", $subtitulo="",$btnaceptar=0,$funcionaceptar="",$ancho){        
        echo "<div class='modal align-middle'  id='myModal'>";
            echo "<div class='modal-dialog modal-dialog-centered' style='width: $ancho;' >";
                echo "<div class='modal-content'>";      
                    //<!-- Modal Header -->
                    echo "<div class='modal-header' style ='background-color: #1B559B;'>";
                          echo "<span style ='color:white; font-size: 24px;' class='modal-title'> $titulo </span>  ";
                          echo "<br>";
                          echo "<span style ='color:white; font-size: 14px;' class='modal-title' id ='descripcion'>$subtitulo </span>  ";
                    echo "</div>";
                    //<!-- Modal body -->
                    echo "<div class='modal-body' id ='contenido'>";
                            //<!-- Aqui va el conenido dinamico por ajax -->
                    echo "</div>";
                    //<!-- Modal footer -->
                    
                    echo "<div class='modal-footer'>";
                        if ($btnaceptar == 1){
                            echo "<button type='button' class='btn btn-primary' id='aceptar' onclik='$funcionaceptar'>Aceptar</button>";
                        }
                        echo "<button type='button' class='btn btn-danger' data-dismiss='modal'>Cerrar</button>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        
    }

/* Argenis 2020/05/12 */
//fillGridArrEdit
//Descripcion: funcion de mostrar arreglos con la primera columna eliminar
//parametro : 
//<-- $arr        : Contiene la informacion del resulset de una consulta a la BD ejemplo (executeReader)		
//<-- $arrCol     : Contiele un arreglo con las columnas a mostrar en el fillGrid
//<-- $par        : Parametro que depende de otra funcion para hacer referencia a otro campo 
//<-- $pageSize   : Define la cantidad de registros a mostrar por pagina				
//<-- $pageNumber : Define la cantidad de paginas
//<-- $width      : Define el ancho del fillGrid			
//<-- $check      : Define si se visualiza un cuadro check por registro
//<-- $eventcheck : Define si se invoca una funcion javascript por registro al hacer click en el check
//<-- $select     : Define si se visualiza la selecion por registro
//<-- $eventradio : Define si se invoca una funcion javascript por registro al hacer click en el radio
//<-- $id         : identificador del objeto html
//Detalles: Muestra un grid  basado en un arreglo 
//ubicaci�n: Traida de web
//==================================================*/			
static function fillGridArrEdit($arr, $arrCol,$par="",$pageSize=10,$pageNumber=0,$width=900,$check="0",$eventcheck,$select="0",$eventradio,$id = "",$idmodal="") {        
    $nr = count($arr);
    $nc = count($arrCol);
    echo '<table id='.$id.' width="100%">';
    echo '<thead>';
    echo "<tr>";
    echo "<th class='col-sm-1'></th>";
    for($i=0; $i < $nc; $i++) {
        $name = $arrCol[$i];             
        $clase = "th".$i;
        echo "<th class = '".$clase."'>".$name."</th>";
    }    
     echo "</tr>";
    echo '</thead>';
    echo '<tbody>';
    $end = 0;
    
    if (is_array($arr)) { // bring values
        for($i=0; $i < $nr; $i++) {
            $clase = "td".$i;           
            $reg = $arr[$i];            
            $name = "btn".$i;
            $id = "btn".$i;						
            $j = 0; // assummes id, first column
            
            foreach ($reg as $col) {
                if ($j == 0) {
                    $id="campo".$j.$i;
                    echo "  <tr id = $col> ";
                    echo "<td style ='padding: 3px 4px;'><button type='button' class='btn btn-danger' style ='width:55px; height:20px;' onclick='eliminarItem($col);' >Eliminar</button></td>";
                    echo "<td style ='padding: 3px 4px;'><a href='?urloper=find&pn=".$pageNumber."&id=".$col."' id ='$id' >".$col."</a></td>";
                }
                else {
                    $id="campo".$j.$i;
                    echo "<td  style ='padding: 3px 4px;' class = 'col".$j." '> <input class ='form-control  col".$j." ' id ='$id'  value = '" . $col ."' style='width: 100%;height: 20px;'></input></td>";
                }
                $j++;             
            }
            echo '</tr>';
        }
    }
    else {
        $end=1;
    }
    echo '</tbody>';
    echo '</table>';    
    }

/* Argenis 2020/05/21 */
//buildSelectJsonButton
//Descripcion: funcion de mostrar arreglos con un combo y un boton al lado para ejecutar una accion(modal o funcion)
//parametro : 
//<-- $title   : Contiene el titulo del objeto		
//<-- $name    : Contiele el nombre del objeto html
//<-- $id      : Contiele el id del objeto html
//<-- $json    : Contiele los datos en formato json				
//<-- $showCol :Valor de la columna a mostrar de la BD
//<-- $placeholder : Define la mascara o titulo informativo del objeto cuando esta en blanco
//Detalles: Muestra un grid  basado en un arreglo 
//ubicaci�n: Traida de web                
            static function buildSelectJsonButton($title,$name,$id,$json,$showCol="",$event="",$placeholder="") {
                echo '<LABEL>';
                echo '<SPAN>'.$title.' :</SPAN>';
                $event = 'onchange="'.$event.'"';                
                echo '<SELECT name="'.$name.'" id="'.$id.'" '.$event.' >';
                echo '<option value="0" >Para buscar datos, click en Buscar</option>';                
                array_walk($json, function(&$value, $key)use(&$showCol) {                        
                    if (trim($showCol) == trim($key)){
			echo '<option value="'.$key.'" selected >'.$value.' </option>';
                    }else{			
                        echo '<option value="'.$key.'" >'.$value.'</option>';                    
                    }
                });
                echo '</SELECT>';
                echo '<input type="button" id = "btn'.$id.'" style="dorder=0px; font-size: 12px;" value="Buscar" class="btn btn-primary" data-toggle="modal" data-target="#myModal"></input>';
                echo '</LABEL>';			
            }

/* Argenis 2020/05/28 */
static function buildSelectInputCIUser($title,$name,$id,$mod,$foreignTable,$curVal,$foreignscheme="",$onblur="",$disabled="",$nameIP,$idIP,$val,$param = "", $param2 = "",$maxlength="50",$readonly="") {
			echo '<LABEL>';
			echo '<SPAN>'.$title.' :</SPAN>';
			if ($onblur != "")
				$onblur = ' onBlur="'.$onblur.'" ';
                       
			echo '<SELECT '.$disabled.' name="'.$name.'" id="'.$id.'"  style="widht:10%" >';
			$mod->fillForeignTableComboParamBoth($foreignTable,$curVal,$foreignscheme, $param,$param2);
			echo '</SELECT>';
			echo '<INPUT '.$readonly.' name = "'.$nameIP.'" type="text"  id="'.$idIP.'" value = "'.$val.'" title = "Por favor, rellene este campo." style="widht:40%"  ';
			echo $onblur;
			echo 'maxlength="'.$maxlength.'" placeholder="'.$title.'"></INPUT>';
                        echo '<input type="button" id = "btn'.$id.'" style="dorder=0px; font-size: 12px;border-radius: 5px;" value="Ver lista" class="btn btn-primary" data-toggle="modal" data-target="#myModal"></input>';
			echo '</LABEL>';
	}


	} //presentationLayer
?>