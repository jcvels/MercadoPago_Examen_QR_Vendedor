<?php

// Obtiene la información de un pos existente en base a su external_id
header('Content-type: application/json');
include_once '../../global/functions.php';
$external_id = $_GET["external_id"];
$url="https://api.mercadopago.com/pos?external_id=$external_id&access_token=$access_token";
curl_call("get",$url,"");

?>
