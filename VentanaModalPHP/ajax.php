<?php
include_once("xclient.php");
$client = new xclient("");

//Se llama al servicio para llenar el select hijo
if ($_GET["cond"] == "CountryProvider") {
    $data_json = $client->mgetproviderl($_GET["valor"]);
    echo json_encode($data_json);
}

//Se llama al servicio para llenar el select hijo
if (isset($_POST["newRegister"])) {
    $test = $_POST["User"];
    $test2 = $_POST["Email"];
    $test3 = $_POST["Phone"];
    // $data_json = $client->mgetproviderl($_GET["valor"]);
    // echo json_encode($data_json);
    print_r($test2);
}
