<?php
$access_token = '92xvCvZsFJbpnbneOdRAnKHz6alkP6bw/TTB5HuqdfED5AjdxxpzMihvRtuY4TYScpJ09m+WCdQ6vUmpM2Wt+Y99fTO5gIY8oUTYNFYOa0vhUDOof2YjCIHREOn5qsnTpLynxepY9Xj9F8PLPKZb2AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
