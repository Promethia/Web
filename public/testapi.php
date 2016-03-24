<?php

include('MinecraftServerStatus.php');
$mcquery = new MinecraftServerStatus();
$ip = "play.promethiamc.net";

$mcstatus = $mcquery->getStatus($ip);
if($mcstatus) {
	$server = 'green';
	$players = $mcstatus['players'];
} else {
	$server = 'red';
	$players = 0;
}

$apiUrl = "https://status.mojang.com/check";
$apiFile = @file_get_contents($apiUrl);
if($apiFile) {
	$apiData = json_decode($apiFile, true);
	$mojang_api = $apiData[7]['api.mojang.com'];
	$mojang_login = $apiData[5]['authserver.mojang.com'];
	$mojang_session = $apiData[6]['sessionserver.mojang.com'];
	$mojang_skin = $apiData[8]['textures.minecraft.net'];
} else {
	$mojang_api = 'red';
	$mojang_login = 'red';
	$mojang_session = 'red';
	$mojang_skin = 'red';
}