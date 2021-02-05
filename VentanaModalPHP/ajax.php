<?php
include_once("xclient.php");
$client = new xclient("");

//Se llama al servicio para llenar el select hijo
if (isset($_GET["cond"])) {
    if ($_GET["cond"] == "CountryProvider") {
        $data_json = $client->mgetproviderl($_GET["valor"]);
    }

    if ($_GET["cond"] == "CodeCountrycodeArea") {

        $data_json = $client->mgetcellphoneareacodel($_GET["valor"]);
    }
}

if (isset($_POST["cond"])) {
    if (isset($_POST["newRegister"])) {
        $user = $_POST["User"];
        $email = $_POST["Email"];
        $phone = $_POST["CodeCountry"] . $_POST["codeArea"] . $_POST["Phone"];


        $data_json = $client->maddlead("", $user, "", $email, "", $phone, "", "", "", "", "", "");
        print_r(json_encode($data_json));
    }



    if ($_POST["cond"] == "AuthPin") {
        $pin = $_POST["pin"];
        $tag = $_POST["tag"];
        $data_json = $client->mauth("lenovi", "04242337645", $pin);

        // echo gettype($data_json);
        print_r(json_encode($data_json));

        //print_r($data_json);
    }
}
