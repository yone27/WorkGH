<?php

class xclient
{

	private $client;

	private function init($url)
	{
		$this->client = curl_init($url);
		$h1 = "Cache-Control: no-cache";
		$h2 = "Content-Type: application/json";
		curl_setopt($this->client, CURLOPT_HTTPHEADER, array($h1, $h2));
		curl_setopt($this->client, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->client, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($this->client, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($this->client, CURLOPT_SSL_VERIFYPEER, 0);
	} // init

	private function updateField(&$arr, $field, $val)
	{
		if ($val != "") {
			$arr[$field] = $val;
		}
	} // updateField

	private function updateFieldArr(&$arr, $field, $val)
	{
		if (is_array($val) != "") {
			$arr[$field] = $val;
		}
	} // updateFieldArr



	private function bgetproviderl($wsuser, $wspwd, $idcountry = "")
	{
		$this->updateField($getproviderl, "wsuser", "WSITALCAMBIO");
		$this->updateField($getproviderl, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($getproviderl, "idcountry", $idcountry);
		return $getproviderl;
	} // bgetproviderl



	function mgetproviderl(
		$idcountry,
		$url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php"
	) {
		$this->init($url);
		$getproviderl =  $this->bgetproviderl("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idcountry);
		$data["getproviderl"] = $getproviderl;

		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	}

	private function bgetcountryl($wsuser, $wspwd)
	{
		$this->updateField($getcountryl, "wsuser", "WSITALCAMBIO");
		$this->updateField($getcountryl, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $getcountryl;
	} // bgetcountryl

	function mgetcountryl($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getcountryl =  $this->bgetcountryl("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["getcountryl"] = $getcountryl;

		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetcountryl

	private function baddlead($wsuser, $wspwd, $code, $name, $idparty, $email, $imei, $phoneNumber, $observation, $pin, $date, $pinfirstTime, $active, $deleted)
	{
		$this->updateField($addlead, "wsuser", "WSITALCAMBIO");
		$this->updateField($addlead, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($addlead, "code", $code);
		$this->updateField($addlead, "name", $name);
		$this->updateField($addlead, "idparty", $idparty);
		$this->updateField($addlead, "email", $email);
		$this->updateField($addlead, "imei", $imei);
		$this->updateField($addlead, "phonenumber", $phoneNumber);
		$this->updateField($addlead, "observation", $observation);
		$this->updateField($addlead, "pin", $pin);
		$this->updateField($addlead, "date", $date);
		$this->updateField($addlead, "pinfirsttime", $pinfirstTime);
		$this->updateField($addlead, "active", $active);
		$this->updateField($addlead, "deleted", $deleted);
		return $addlead;
	} // baddlead

	function maddlead($code, $name, $idparty, $email, $imei, $phoneNumber, $observation, $pin, $date, $pinfirstTime, $active, $deleted, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$addlead =  $this->baddlead("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $code, $name, $idparty, $email, $imei, $phoneNumber, $observation, $pin, $date, $pinfirstTime, $active, $deleted);
		$data["addlead"] = $addlead;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // maddlead

	private function bgenpin($wsuser, $wspwd)
	{
		$this->updateField($genpin, "wsuser", "WSITALCAMBIO");
		$this->updateField($genpin, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $genpin;
	} // bgenpin

	function mgenpin($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$genpin =  $this->bgenpin("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["genpin"] = $genpin;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgenpin

	private function bupdpin($wsuser, $wspwd, $name, $phoneNumber, $pin)
	{
		$this->updateField($updpin, "wsuser", "WSITALCAMBIO");
		$this->updateField($updpin, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($updpin, "name", $name);
		$this->updateField($updpin, "phonenumber", $phoneNumber);
		$this->updateField($updpin, "pin", $pin);
		return $updpin;
	} // bupdpin

	function mupdpin($name, $phoneNumber, $pin, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$updpin =  $this->bupdpin("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $name, $phoneNumber, $pin);
		$data["updpin"] = $updpin;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mupdpin

	private function bauth($wsuser, $wspwd, $name, $phoneNumber, $pin)
	{
		$this->updateField($auth, "wsuser", "WSITALCAMBIO");
		$this->updateField($auth, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($auth, "name", $name);
		$this->updateField($auth, "phonenumber", $phoneNumber);
		$this->updateField($auth, "pin", $pin);
		return $auth;
	} // bauth

	function mauth($name, $phoneNumber, $pin, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$auth =  $this->bauth("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $name, $phoneNumber, $pin);
		$data["auth"] = $auth;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mauth

	private function bgeticccbankl($wsuser, $wspwd)
	{
		$this->updateField($geticccbankl, "wsuser", "WSITALCAMBIO");
		$this->updateField($geticccbankl, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $geticccbankl;
	} // bgeticccbankl

	function mgeticccbankl($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$geticccbankl =  $this->bgeticccbankl("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["geticccbankl"] = $geticccbankl;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgeticccbankl

	private function bcalcsend($wsuser, $wspwd, $idProvider, $idCountry, $amount)
	{
		$this->updateField($calcsend, "wsuser", "WSITALCAMBIO");
		$this->updateField($calcsend, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($calcsend, "idprovider", $idProvider);
		$this->updateField($calcsend, "idcountry", $idCountry);
		$this->updateField($calcsend, "amount", $amount);
		return $calcsend;
	} // bcalcsend

	function mcalcsend($idProvider, $idCountry, $amount, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$calcsend =  $this->bcalcsend("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idProvider, $idCountry, $amount);
		$data["calcsend"] = $calcsend;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mcalcsend
	
	private function bgetcurrencyl($wsuser, $wspwd)
	{
		$this->updateField($getcurrencyl, "wsuser", "WSITALCAMBIO");
		$this->updateField($getcurrencyl, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $getcurrencyl;
	} // bgetcurrencyl

	function mgetcurrencyl($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getcurrencyl =  $this->bgetcurrencyl("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["getcurrencyl"] = $getcurrencyl;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetcurrencyl

	private function bcalcsell($wsuser, $wspwd, $idCurrency, $amount)
	{
		$this->updateField($calcsell, "wsuser", "WSITALCAMBIO");
		$this->updateField($calcsell, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($calcsell, "idcurrency", $idCurrency);
		$this->updateField($calcsell, "amount", $amount);
		return $calcsell;
	} // bcalcsell

	function mcalcsell($idCurrency, $amount, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$calcsell =  $this->bcalcsell("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idCurrency, $amount);
		$data["calcsell"] = $calcsell;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mcalcsell

	private function bcalcbuy($wsuser, $wspwd, $idCurrency, $amount)
	{
		$this->updateField($calcbuy, "wsuser", "WSITALCAMBIO");
		$this->updateField($calcbuy, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($calcbuy, "idcurrency", $idCurrency);
		$this->updateField($calcbuy, "amount", $amount);
		return $calcbuy;
	} // bcalcbuy

	function mcalcbuy($idCurrency, $amount, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$calcbuy =  $this->bcalcbuy("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idCurrency, $amount);
		$data["calcbuy"] = $calcbuy;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mcalcbuy

	private function bgetallcountrydetaill($wsuser, $wspwd)
	{
		$this->updateField($getallcountrydetaill, "wsuser", "WSITALCAMBIO");
		$this->updateField($getallcountrydetaill, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $getallcountrydetaill;
	} // bgetallcountrydetaill

	function mgetallcountrydetaill($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getallcountrydetaill =  $this->bgetallcountrydetaill("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["getallcountrydetaill"] = $getallcountrydetaill;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetallcountrydetaill

	private function bgetcellphoneareacodel($wsuser, $wspwd, $countrycode)
	{
		$this->updateField($getcellphoneareacodel, "wsuser", "WSITALCAMBIO");
		$this->updateField($getcellphoneareacodel, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($getcellphoneareacodel, "countrycode", $countrycode);
		return $getcellphoneareacodel;
	} // bgetcellphoneareacodel

	function mgetcellphoneareacodel($countrycode, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getcellphoneareacodel =  $this->bgetcellphoneareacodel("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $countrycode);
		$data["getcellphoneareacodel"] = $getcellphoneareacodel;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetcellphoneareacodel

	private function bfindlead($wsuser, $wspwd, $key)
	{
		$this->updateField($findlead, "wsuser", "WSITALCAMBIO");
		$this->updateField($findlead, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($findlead, "key", $key);
		return $findlead;
	} // bfindlead

	function mfindlead($key, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$findlead =  $this->bfindlead("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $key);
		$data["findlead"] = $findlead;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mfindlead

	private function bsendemail($wsuser, $wspwd, $subject, $to, $header, $body, $footer)
	{
		$this->updateField($sendemail, "wsuser", "WSITALCAMBIO");
		$this->updateField($sendemail, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($sendemail, "subject", $subject);
		$this->updateField($sendemail, "to", $to);
		$this->updateField($sendemail, "header", $header);
		$this->updateField($sendemail, "body", $body);
		$this->updateField($sendemail, "footer", $footer);
		return $sendemail;
	} // bsendemail

	function msendemail($subject, $to, $header, $body, $footer, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$sendemail =  $this->bsendemail("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $subject, $to, $header, $body, $footer);
		$data["sendemail"] = $sendemail;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // msendemail

	private function bleadtoparty($wsuser, $wspwd, $idlead, $firstname, $middlename, $lastname, $secondlastname,$documentid , $phonecountrycode, $phoneareacode, $phonenumber, $email, $bankaccount, $birthdate, $fulladdress)
	{
		$this->updateField($leadtoparty, "wsuser", "WSITALCAMBIO");
		$this->updateField($leadtoparty, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($leadtoparty, "idlead", $idlead);
		$this->updateField($leadtoparty, "firstname", $firstname);
		$this->updateField($leadtoparty, "middlename", $middlename);
		$this->updateField($leadtoparty, "lastname", $lastname);
		$this->updateField($leadtoparty, "secondlastname", $secondlastname);
		$this->updateField($leadtoparty, "documentid", $documentid);
		$this->updateField($leadtoparty, "phonecountrycode", $phonecountrycode);
		$this->updateField($leadtoparty, "phoneareacode", $phoneareacode);
		$this->updateField($leadtoparty, "phonenumber", $phonenumber);
		$this->updateField($leadtoparty, "email", $email);
		$this->updateField($leadtoparty, "bankaccount", $bankaccount);
		$this->updateField($leadtoparty, "birthdate", $birthdate);
		$this->updateField($leadtoparty, "fulladdress", $fulladdress);
		return $leadtoparty;
	} // bleadtoparty

	function mleadtoparty($idlead, $firstname, $middlename, $lastname, $secondlastname,$documentid , $phonecountrycode, $phoneareacode, $phonenumber, $email, $bankaccount, $birthdate, $fulladdress, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$leadtoparty =  $this->bleadtoparty("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idlead, $firstname, $middlename, $lastname, $secondlastname, $documentid, $phonecountrycode, $phoneareacode, $phonenumber, $email, $bankaccount, $birthdate, $fulladdress);
		$data["leadtoparty"] = $leadtoparty;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mleadtoparty

	private function bisparty($wsuser, $wspwd, $idlead)
	{
		$this->updateField($isparty, "wsuser", "WSITALCAMBIO");
		$this->updateField($isparty, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($isparty, "idlead", $idlead);
		return $isparty;
	} // bisparty

	function misparty($idlead, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$isparty =  $this->bisparty("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idlead);
		$data["isparty"] = $isparty;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // misparty

	private function bgetparty($wsuser, $wspwd, $idlead, $idparty)
	{
		$this->updateField($getparty, "wsuser", "WSITALCAMBIO");
		$this->updateField($getparty, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($getparty, "idlead", $idlead);
		$this->updateField($getparty, "idlead", $idparty);
		return $getparty;
	} // bgetparty

	function mgetparty($idlead, $idparty, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getparty =  $this->bgetparty("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idlead, $idparty);
		$data["getparty"] = $getparty;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetparty

	private function brecv($wsuser, $wspwd, $idparty, $acc, $key, $addr, $bdate)
	{
		$this->updateField($recv, "wsuser", "WSITALCAMBIO");
		$this->updateField($recv, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($recv, "idparty", $idparty);
		$this->updateField($recv, "acc", $acc);
		$this->updateField($recv, "key", $key);
		$this->updateField($recv, "addr", $addr);
		$this->updateField($recv, "bdate", $bdate);
		return $recv;
	} // brecv

	function mrecv($idparty, $acc, $key, $addr, $bdate, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$recv =  $this->brecv("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idparty, $acc, $key, $addr, $bdate);
		$data["recv"] = $recv;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mrecv

	private function bgetclearencetypel($wsuser, $wspwd)
	{
		$this->updateField($getclearencetypel, "wsuser", "WSITALCAMBIO");
		$this->updateField($getclearencetypel, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $getclearencetypel;
	} // bgetclearencetypel

	function mgetclearencetypel($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getclearencetypel =  $this->bgetclearencetypel("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["getclearencetypel"] = $getclearencetypel;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetclearencetypel

	private function bgetremitancetypel($wsuser, $wspwd)
	{
		$this->updateField($getremitancetypel, "wsuser", "WSITALCAMBIO");
		$this->updateField($getremitancetypel, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $getremitancetypel;
	} // bgetremitancetypel

	function mgetremitancetypel($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getremitancetypel =  $this->bgetremitancetypel("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["getremitancetypel"] = $getremitancetypel;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetremitancetypel

	private function bgetcurrencyremitancel($wsuser, $wspwd)
	{
		$this->updateField($getcurrencyremitancel, "wsuser", "WSITALCAMBIO");
		$this->updateField($getcurrencyremitancel, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $getcurrencyremitancel;
	} // bgetcurrencyremitancel

	function mgetcurrencyremitancel($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getcurrencyremitancel =  $this->bgetcurrencyremitancel("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["getcurrencyremitancel"] = $getcurrencyremitancel;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetcurrencyremitancel

	private function bgetdebitinstrumentl($wsuser, $wspwd)
	{
		$this->updateField($getdebitinstrumentl, "wsuser", "WSITALCAMBIO");
		$this->updateField($getdebitinstrumentl, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $getdebitinstrumentl;
	} // bgetdebitinstrumentl

	function mgetdebitinstrumentl($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getdebitinstrumentl =  $this->bgetdebitinstrumentl("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["getdebitinstrumentl"] = $getdebitinstrumentl;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetdebitinstrumentl

	private function bgetlocationl($wsuser, $wspwd)
	{
		$this->updateField($getlocationl, "wsuser", "WSITALCAMBIO");
		$this->updateField($getlocationl, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $getlocationl;
	} // bgetlocationl

	function mgetlocationl($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getlocationl =  $this->bgetlocationl("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["getlocationl"] = $getlocationl;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetlocationl

	private function bgetiddocumenttypel($wsuser, $wspwd)
	{
		$this->updateField($getiddocumenttypel, "wsuser", "WSITALCAMBIO");
		$this->updateField($getiddocumenttypel, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $getiddocumenttypel;
	} // bgetiddocumenttypel

	function mgetiddocumenttypel($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getiddocumenttypel =  $this->bgetiddocumenttypel("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["getiddocumenttypel"] = $getiddocumenttypel;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetiddocumenttypel

	private function bendpoint($wsuser, $wspwd)
	{
		$this->updateField($endpoint, "wsuser", "WSITALCAMBIO");
		$this->updateField($endpoint, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $endpoint;
	} // bendpoint

	function mendpoint($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$endpoint =  $this->bendpoint("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["endpoint"] = $endpoint;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mendpoint

	private function bresetpin($wsuser, $wspwd, $imei)
	{
		$this->updateField($resetpin, "wsuser", "WSITALCAMBIO");
		$this->updateField($resetpin, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($resetpin, "imei", $imei);
		return $resetpin;
	} // bresetpin

	function mresetpin($imei, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$resetpin =  $this->bresetpin("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $imei);
		$data["resetpin"] = $resetpin;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mresetpin

	private function bgetinstrumentsrcl($wspwd, $imei)
	{
		$this->updateField($getinstrumentsrcl, "wsuser", "WSITALCAMBIO");
		$this->updateField($getinstrumentsrcl, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		return $getinstrumentsrcl;
	} // bgetinstrumentsrcl

	function mgetinstrumentsrcl($url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getinstrumentsrcl =  $this->bgetinstrumentsrcl("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919");
		$data["getinstrumentsrcl"] = $getinstrumentsrcl;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetinstrumentsrcl

	private function bgetcurrencysrcl($wsuser, $wspwd, $idinstrumentsrc)
	{
		$this->updateField($getcurrencysrcl, "wsuser", "WSITALCAMBIO");
		$this->updateField($getcurrencysrcl, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($getcurrencysrcl, "idinstrumentsrc", $idinstrumentsrc);
		return $getcurrencysrcl;
	} // bgetcurrencysrcl

	function mgetcurrencysrcl($idinstrumentsrc, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getcurrencysrcl =  $this->bgetcurrencysrcl("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idinstrumentsrc);
		$data["getcurrencysrcl"] = $getcurrencysrcl;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetcurrencysrcl

	private function bgetinstrumentdstl($wsuser, $wspwd, $idinstrumentsrc, $idcurrencysrc)
	{
		$this->updateField($getinstrumentdstl, "wsuser", "WSITALCAMBIO");
		$this->updateField($getinstrumentdstl, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($getinstrumentdstl, "idinstrumentsrc", $idinstrumentsrc);
		$this->updateField($getinstrumentdstl, "idcurrencysrc", $idcurrencysrc);
		return $getinstrumentdstl;
	} // bgetinstrumentdstl

	function mgetinstrumentdstl($idinstrumentsrc, $idcurrencysrc, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getinstrumentdstl =  $this->bgetinstrumentdstl("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idinstrumentsrc, $idcurrencysrc);
		$data["getinstrumentdstl"] = $getinstrumentdstl;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetinstrumentdstl

	private function bgetcurrencydstl($wsuser, $wspwd, $idinstrumentsrc, $idcurrencysrc, $idinstrumentdst)
	{
		$this->updateField($getcurrencydstl, "wsuser", "WSITALCAMBIO");
		$this->updateField($getcurrencydstl, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($getcurrencydstl, "idinstrumentsrc", $idinstrumentsrc);
		$this->updateField($getcurrencydstl, "idcurrencysrc", $idcurrencysrc);
		$this->updateField($getcurrencydstl, "idinstrumentdst", $idinstrumentdst);
		return $getcurrencydstl;
	} // bgetcurrencydstl

	function mgetcurrencydstl($idinstrumentsrc, $idcurrencysrc, $idinstrumentdst, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getcurrencydstl =  $this->bgetcurrencydstl("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idinstrumentsrc, $idcurrencysrc, $idinstrumentdst);
		$data["getcurrencydstl"] = $getcurrencydstl;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetcurrencydstl

	private function bcalcexchange($wsuser, $wspwd, $idlead, $idinstrumentsrc, $idinstrumentdst, $idcurrencysrc, $idcurrencydst, $amount, $bank, $numref, $routing)
	{
		$this->updateField($calcexchange, "wsuser", "WSITALCAMBIO");
		$this->updateField($calcexchange, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($calcexchange, "idlead", $idlead);
		$this->updateField($calcexchange, "idinstrumentsrc", $idinstrumentsrc);
		$this->updateField($calcexchange, "idinstrumentdst", $idinstrumentdst);
		$this->updateField($calcexchange, "idcurrencysrc", $idcurrencysrc);
		$this->updateField($calcexchange, "idcurrencydst", $idcurrencydst);
		$this->updateField($calcexchange, "amount", $amount);
		$this->updateField($calcexchange, "bank", $bank);
		$this->updateField($calcexchange, "numref", $numref);
		$this->updateField($calcexchange, "routing", $routing);
		return $calcexchange;
	} // bcalcexchange

	function mcalcexchange($idlead, $idinstrumentsrc, $idinstrumentdst, $idcurrencysrc, $idcurrencydst, $amount, $bank, $numref, $routing, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$calcexchange =  $this->bcalcexchange("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idlead, $idinstrumentsrc, $idinstrumentdst, $idcurrencysrc, $idcurrencydst, $amount, $bank, $numref, $routing);
		$data["calcexchange"] = $calcexchange;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mcalcexchange




	private function bgetcountrystatel($wsuser, $wspwd, $idcountry)
	{
		$this->updateField($getcountrystatel, "wsuser", "WSITALCAMBIO");
		$this->updateField($getcountrystatel, "wspwd", "1cc61eb7ae2187eb91f97d1ae5300919");
		$this->updateField($getcountrystatel, "idcountry", $idcountry);
		return $getcountrystatel;
	} // bgetcountrystatel

	function mgetcountrystatel($idcountry, $url = "https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php")
	{
		$this->init($url);
		$getcountrystatel =  $this->bgetcountrystatel("WSITALCAMBIO", "1cc61eb7ae2187eb91f97d1ae5300919", $idcountry);
		$data["getcountrystatel"] = $getcountrystatel;
		$data_string = json_encode($data);
		curl_setopt($this->client, CURLOPT_POSTFIELDS, $data_string);
		$response = curl_exec($this->client);
		$result = json_decode($response);
		return ($result);
	} // mgetcountrystatel

} // class xclient
