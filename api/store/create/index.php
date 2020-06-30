<?php

///// Crea una store /////

include_once '../../global/functions.php';
header('Content-type: application/json');
$url="https://api.mercadopago.com/users/$collector_id/stores?access_token=$access_token";
$json = $_POST["json"];
curl_call("post",$url,$json);

?>
