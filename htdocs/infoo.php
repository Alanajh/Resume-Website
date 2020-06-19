<?php

$url = 'https://kvstore.p.rapidapi.com/collections';
$collection_name = 'RapidAPI';
$request_url = 'http://newsapi.org/v2/top-headlines?country=us&apikey=8e78d3fb179c4f219bb0f4d4145bb303';

$curl = curl_init($request_url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'X-RapidAPI-Host:newsapi.org',
  'X-RapidAPI-Key: 8e78d3fb179c4f219bb0f4d4145bb303',
  'Content-Type: application/json'
]);

$responseNews = curl_exec($curl);
curl_close($curl);

 $results = json_decode($responseNews, true);

 $key = $results['articles'][0]['author'];

 echo "<table>";
  echo "<tr><td>Order ID:</td><td>$key</td></tr>";
  echo "<tr><td>Amount:</td><td>$result->title</td></tr>";
  echo "</table>";

?>
