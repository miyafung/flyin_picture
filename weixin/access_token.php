<?php

$APPID="wx6f120589da6d0294";
$APPSECRET="c936c2b77d41b73c50d963d47e8099d0";

$TOKEN_URL="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$APPID."&secret=".$APPSECRET;

$json=file_get_contents($TOKEN_URL);
$result=json_decode($json,true);
print_r($result);

?>
