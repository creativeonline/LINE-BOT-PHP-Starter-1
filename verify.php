<?php
$access_token = 'xgfISdr4pUcXWRCzOcjmTgbjjpDyhvl8Pnv9isjCnLr5IFjI3qYdlY0TcjNJ7wh8I75YTL+YwiyVw6i0qQffP2Vo8PRod4cAKedje3x17lB38wFSiRX33gsYazC2z/3M9vzuY6uHOzEmBX7eb3EAMwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
