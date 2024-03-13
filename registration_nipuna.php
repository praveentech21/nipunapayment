<?php

$conn = new mysqli('sql104.infinityfree.com', 'if0_34588106', 'wFhJlEqTy7wak', 'if0_34588106_nipuna');
// $conn = new mysqli('localhost', 'root', '', 'nipuna');

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
    $orderId = $_POST['orderId'];

    $sql = "INSERT INTO `registration`(`studentid`, `name`, `email`, `mobile`, `amount`, `college`, `Course`, `year`, `Location`, `selectedevent0`, `selectedevent1`, `orderid`) VALUES ('$regno','$name','$email','$mobile','$amount','$college','$branch','$year','$Location','$selectedevent0','$selectedevent1','$orderId')";
    if(mysqli_query($conn, $sql)){
        echo "registration successfull";
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

} 
elseif (isset($_POST['razorpay_payment_id'])) {
    require_once('vendor/razorpay/razorpay/Razorpay.php');

    $apiKey = 'rzp_test_bZFi6V3FyQ5lBT';
    $apiSecret = 'nEJCjWeTtdKUpifSKfyQV2oX';

    $api = new Razorpay\Api\Api($apiKey, $apiSecret);

    $paymentId = $_POST['razorpay_payment_id'];
    $orderId = $_POST['razorpay_order_id'];
    $signature = $_POST['razorpay_signature'];

    try {
        $attributes = array(
            'razorpay_payment_id' => $paymentId,
            'razorpay_order_id' => $orderId,
            'razorpay_signature' => $signature
        );

        $api->utility->verifyPaymentSignature($attributes);

        $sql1 = "UPDATE `registration` SET `Paymentid`='$paymentId', `signature`='$signature' WHERE `orderid`='$orderId'";

        if (mysqli_query($conn, $sql1)) {
            $response = array(
                "success" => true,
                "message" => "Registration successful. Your order ID is " . $orderId . ". Please keep this for future reference.",
                "orderId" => $orderId
            );
        } else {
            $response = array(
                "success" => false,
                "message" => "Error: " . mysqli_error($conn)
            );
        }
        echo json_encode($response);
        header('Location: index.html');

        http_response_code(200);
    } catch (Exception $e) {

        http_response_code(400);
        $response = array(
            "success" => false,
            "message" => "Error: " . $e->getMessage()
        );
    }
} else {
    echo "Invalid request";
}
