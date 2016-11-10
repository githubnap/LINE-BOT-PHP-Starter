<?php
$access_token = 'bunEtABuosdTDuwUg/P/WlxL2pIDxEJnte1oxZbaC+W4JCuDnIZjC+J2LDUT16+Z1iGTB6wBT9jsi0LMAseTNbAhMIhaaxfPTvGZVMpOOM1VEtkpi/ptL8jAToS0RL4AK1tbiROMLLsqYunPHiR0FQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
