<?php

$conn = new mysqli('localhost', 'root', '', 'nipuna');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['registration'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $regno = $_POST['regno'];
    $mobile = $_POST['mobileNumber'];
    $amount = $_POST['price'];
    $college = $_POST['College'];
    $year = $_POST['Year'];
    $branch = $_POST['Course'];
    $Location = $_POST['Location'];
    $selectedevent0 = $_POST['selectedevent0'];
    $selectedevent1 = $_POST['selectedevent1'];

    function generateRandomOrderId($con, $length = 10)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomOrderId = '';
        $maxTries = 10;
        for ($i = 0; $i < $length; $i++) {
            $randomOrderId .= $characters[rand(0, strlen($characters) - 1)];
        }

        for ($try = 0; $try < $maxTries; $try++) {
            if (!isOrderIdUnique($con, $randomOrderId)) {
                $randomOrderId = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomOrderId .= $characters[rand(0, strlen($characters) - 1)];
                }
            } else {
                break;
            }
        }

        return $randomOrderId;
    }
    function isOrderIdUnique($con, $orderId)
    {
        $query = "SELECT COUNT(*) AS count FROM `registration` WHERE orderid = ?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("s", $orderId);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $count = $row['count'];
        return $count === 0;
    }

    $orderId = generateRandomOrderId($conn);
    $paymentid = 'failed';
    $amount_topay = $amount * 100;

    $apiKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
    $merchantId = 'PGTESTPAYUAT';
    $saltIndex = '1';

    // Prepare the payment request data (you should customize this)
    $paymentData = array(
        'merchantId' => $merchantId,
        'merchantTransactionId' => $orderId,
        "merchantUserId" => $regno,
        'amount' => $amount_topay, // Amount in paisa (10 INR)
        'redirectUrl' => "http://saipraveen.free.nf/nipuna/paymentsucess.php",
        'redirectMode' => "POST",
        'callbackUrl' => "http://saipraveen.free.nf/nipuna/paymentsucess.php",
        "merchantOrderId" => $orderId,
        "mobileNumber" => $mobile,
        "message" => "Nipuna 2K24 Payment Gateway",
        "email" => $email,
        "shortName" => $name,
        "paymentInstrument" => array(
            "type" => "PAY_PAGE",
        )
    );


    $jsonencode = json_encode($paymentData);
    $payloadMain = base64_encode($jsonencode);

    $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
    $sha256 = hash("sha256", $payload);
    $final_x_header = $sha256 . '###' . $saltIndex;
    $request = json_encode(array('request' => $payloadMain));

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

        if (isset($res->success) && $res->success == '1') {
            $paymentCode = $res->code;
            $paymentMsg = $res->message;
            $payUrl = $res->data->instrumentResponse->redirectInfo->url;

            header('Location:' . $payUrl);
        }
    }



    $sql = "INSERT INTO `registration`(`studentid`, `name`, `email`, `mobile`, `amount`, `college`, `Course`, `year`, `Location`, `selectedevent0`, `selectedevent1`, `Paymentid`, `orderid`) VALUES ('$regno','$name','$email','$mobile','$amount','$college','$branch','$year','$Location','$selectedevent0','$selectedevent1','0','0')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
