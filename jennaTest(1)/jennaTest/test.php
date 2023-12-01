<?php
$imagesArray= [];

// $imagesArray[]="https://hybrid.concordia.ca/srosenbe/jennaTest/blendables/Adapter.jpg";

// $postParameter = array(
//     'urls' => json_encode($imagesArray)
// );


$apiKey='eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjI4NSwiZW1haWwiOiJqZW5uYW1pbHlicm93bkBnbWFpbC5jb20iLCJ1c2VybmFtZSI6Implbm5hbWlseWJyb3duQGdtYWlsLmNvbSIsImlhdCI6MTY5OTM5MjUzMX0.9-5e0l-NJZgiFEtQ5d-cmuyH5zqJI-4VLWRa4bAZtfc';

$url = 'https://api.mymidjourney.ai/api/v1/midjourney/blend';

$curl = curl_init();

$fields = array('urls' =>array("blendables/Adapter.jpg","blendables/Ev-1.jpg"));


$json_string = json_encode($fields);

curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_POST, TRUE);

curl_setopt($curl, CURLOPT_POSTFIELDS, $json_string);

//curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MjI4NSwiZW1haWwiOiJqZW5uYW1pbHlicm93bkBnbWFpbC5jb20iLCJ1c2VybmFtZSI6Implbm5hbWlseWJyb3duQGdtYWlsLmNvbSIsImlhdCI6MTY5OTM5MjUzMX0.9-5e0l-NJZgiFEtQ5d-cmuyH5zqJI-4VLWRa4bAZtfc'));
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization:Bearer '. $apiKey));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );

$data = curl_exec($curl);
echo($data);

curl_close($curl);





// $url = 'https://api.mymidjourney.ai/api/v1/midjourney/blend';

// $curl = curl_init();

// $fields = array(

//     'data' => $postParameter

// );

// $fields_string = http_build_query($postParameter);

// curl_setopt($curl, CURLOPT_URL, $url);

// curl_setopt($curl, CURLOPT_POST, TRUE);

// curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
// curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization:Bearer '. $apiKey));


// $data = curl_exec($curl);

// curl_close($curl);


?>


