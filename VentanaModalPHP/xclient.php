<?php 

	class xclient {
		
		private $client;

		private function init($url) {

			$this->client = curl_init($url);
			$h1 = "Cache-Control: no-cache";
			$h2 = "Content-Type: application/json";
			curl_setopt($this->client,CURLOPT_HTTPHEADER,array($h1,$h2));
			curl_setopt($this->client,CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($this->client,CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($this->client,CURLOPT_SSL_VERIFYHOST,0);    
			curl_setopt($this->client,CURLOPT_SSL_VERIFYPEER,0);
			
		} // init
		
		private function updateField(&$arr,$field,$val) {
			if ($val != "") {
				$arr[$field] = $val;
			}
			
		} // updateField

		private function updateFieldArr(&$arr,$field,$val) {
			if (is_array($val) != "") {
				$arr[$field] = $val;
			}
			
		} // updateFieldArr



		private function bgetproviderl($wsuser,$wspwd, $idcountry = "") {
			$this->updateField($getproviderl,"wsuser","WSITALCAMBIO");
			$this->updateField($getproviderl,"wspwd","1cc61eb7ae2187eb91f97d1ae5300919");
			$this->updateField($getproviderl,"idcountry",$idcountry);
			return $getproviderl;
		} // bgetproviderl



		function mgetproviderl($idcountry,
			$url="https://www.italcontroller.com/italsis/includes/rest/SERVER/XATOXI/services.php") {
			$this->init($url);	
			$getproviderl =  $this->bgetproviderl("WSITALCAMBIO","1cc61eb7ae2187eb91f97d1ae5300919",$idcountry);
			$data["getproviderl"]=$getproviderl;
			
			$data_string = json_encode($data); 
			curl_setopt($this->client,CURLOPT_POSTFIELDS, $data_string);                                                                              
                        $response = curl_exec($this->client);
			$result = json_decode($response);
			return ($result);
			
		} // mgetproviderl
	} // class xclient
?>

