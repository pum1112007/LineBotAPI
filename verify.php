<?php
$access_token = 'Pgt6uW3cEMCBBQJN15QnnLfNpQCzOkXC+KS8+pSoC5YNzfE0udqfFO/WTMX90IBnTMIhAK0iiWLIf5gGhIdFQE7N6LFPOYcTeVBvBCkka0D/bppSp5SYElP+0rAE/TcU6kC1K+D8mExHVjF84mh3oQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;