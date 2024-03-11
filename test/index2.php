<?php

$apiKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
$merchantId = 'PGTESTPAYUAT';
$saltIndex = '1';

// Prepare the payment request data (you should customize this)
$paymentData = array(
    'merchantId' => $merchantId,
    'merchantTransactionId' => "NIP2K2400001",
    "merchantUserId"=>"21B91A6206",
    'amount' => 1000, // Amount in paisa (10 INR)
    'redirectUrl'=>"http://saipraveen.free.nf/nipuna/index.php",
    'redirectMode'=>"POST",
    'callbackUrl'=>"http://saipraveen.free.nf/nipuna/index.php",
    "merchantOrderId"=> "NIP2K2400001",
   "mobileNumber"=>"9052727402",
   "message"=>"Nipuna API Testing",
   "email"=>"ravikumar_csd@srkrec.edu.in",
   "shortName"=>"Sai Praveen",
   "paymentInstrument"=> array(    
    "type"=> "PAY_PAGE",
  )
);


$jsonencode = json_encode($paymentData);
 $payloadMain = base64_encode($jsonencode);


 $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
$sha256 = hash("sha256", $payload);
$final_x_header = $sha256 . '###' . $saltIndex;
$request = json_encode(array('request'=>$payloadMain));

$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
   CURLOPT_POSTFIELDS => $request,
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
     "X-VERIFY: " . $final_x_header,
     "accept: application/json"
  ],
]);
 
$response = curl_exec($curl);
$err = curl_error($curl);
 
curl_close($curl);
 
if ($err) {
  echo "cURL Error #:" . $err;
} else {
   $res = json_decode($response);

   echo "<pre>";
    print_r($res);
    echo "</pre>";
 
if(isset($res->success) && $res->success=='1'){
$paymentCode=$res->code;
$paymentMsg=$res->message;
$payUrl=$res->data->instrumentResponse->redirectInfo->url;
 
header('Location:'.$payUrl) ;
}
}

?>