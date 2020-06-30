<?php

// Consulta estado de la Merchant_order
header('Content-type: application/json');
include_once '../../global/functions.php';
global $access_token,$collector_id;

$external_reference = $_REQUEST["external_reference"];
$url = "https://api.mercadopago.com/merchant_orders/search?external_reference=$external_reference&access_token=$access_token";

// REVISA AQUÍ:
 // Qué método y endpoint de la API de Mercado Pago deberías poner aquí para poder hacer un get 
 // de una merchant_order en base al external_reference recibido?
 // Pista... revísalo bien...
 // Sustituye el método por su correspondiente: get, put, post, delete
 // https://api.mercadopago.com/merchant_orders/search?external_reference=ref31048898007&access_token=APP_USR-7026946692817220-061822-8b7c9e20631faac22d9e4cfa92a37265-586728271

curl_call( "get",$url, " " );

?>
