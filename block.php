<?php

function http_request($url){

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$output = curl_exec($ch);

curl_close($ch);

return $output;

}

$data = http_request("http://api1.vexjabar.org/v1/chain/get_info");

$data = json_decode($data, TRUE);

 echo "<h2>";
 print_r($data['head_block_num']);
 echo "</h2>";


?>
