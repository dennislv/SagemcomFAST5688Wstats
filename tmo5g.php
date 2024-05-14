<?php
$password = 'from.the.back.sticker';
$reboot = false;

//----------------------------------------------------
$ch = curl_init();
//--
curl_setopt($ch, CURLOPT_URL,"http://192.168.12.1/TMI/v1/gateway/?get=all");
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$aGateway = json_decode(curl_exec($ch), true);
//--
$aLogin   = json_encode(array('username' => 'admin', 'password' => $password));
curl_setopt($ch, CURLOPT_URL,"http://192.168.12.1/TMI/v1/auth/login");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $aLogin);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$aAuth = json_decode(curl_exec($ch), true);
//--
$header = "Authorization: Bearer " . $aAuth['auth']['token'];
curl_setopt($ch, CURLOPT_URL,"http://192.168.12.1/TMI/v1/network/telemetry/?get=all");
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array($header));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$aTelemetry = json_decode(curl_exec($ch), true);
//--
curl_setopt($ch, CURLOPT_URL,"http://192.168.12.1/TMI/v1/network/configuration/v2?get=ap");
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array($header));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$aWifi = json_decode(curl_exec($ch), true);
//--
//----------------------------------------------------
if ($reboot) {
  curl_setopt($ch, CURLOPT_URL,"http://192.168.12.1/TMI/v1/gateway/reset?set=reboot");
  curl_setopt($ch, CURLOPT_POST, 0);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array($header));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $aReboot = json_decode(curl_exec($ch), true);
}
curl_close($ch);

