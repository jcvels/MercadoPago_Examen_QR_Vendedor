<?php

// Crear una orden
header('Content-type: application/json');
include_once '../../global/functions.php';

//global $access_token, $collector_id;

$json = $_GET["json"]; //file_get_contents('php://input'); //  
$external_id = $_GET["external_id"];

$url = "https://api.mercadopago.com/mpmobile/instore/qr/$collector_id/$external_id?access_token=$access_token";

curl_call("post", $url, $json);

// REVISA AQUÍ:
// Qué método y endpoint de la API de Mercado Pago deberías poner aquí para poder crear una orden
// en base al external_id, collector_id y Json recibidos
// Sustituye el método por su correspondiente: get, put, post, delete
// https://api.mercadopago.com/mpmobile/instore/qr/$USER_ID/$EXTERNAL_ID?access_token=PROD_ACCESS_TOKEN
 
?>