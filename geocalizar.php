<?php 
error_reporting(0);

$ipdouser = $_SERVER['REMOTE_ADDR'];

$ip = $_POST['inserir'];

$pega = json_decode(file_get_contents("http://ip-api.com/json/" . $ip));

$pais = $pega->country;
$estado = $pega->regionName;
$cidade = $pega->city;
$provedor = $pega->org;