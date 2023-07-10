<?php
//ur mpesa Api Keys
$consumerKey= "6TX4AMkEbx9Y0ocAQmBJdDJs8u7yKZPV";
$comsumersecret= "D5yZOsBVEML0Ovjl";

//access Token UrL
$access_token_url ='https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
$headers = ['content-type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER,$headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($curl, CURLOPT_HEADER,FALSE);
curl_setopt($curl,CURLOPT_USERPWD, $consumerKey . ':' .$comsumersecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl,CURLINFO_HTTP_CODE);
$result = json_decode($result);
echo $access_token = $result->access_token;
curl_close($curl);
