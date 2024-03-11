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
    $paymentid = $_POST['payment_id'];

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

    $sql = "INSERT INTO `registration`(`studentid`, `name`, `email`, `mobile`, `amount`, `college`, `Course`, `year`, `Location`, `selectedevent0`, `selectedevent1`, `Paymentid`, `orderid`) VALUES ('$regno','$name','$email','$mobile','$amount','$college','$branch','$year','$Location','$selectedevent0','$selectedevent1','$paymentid','$orderId')";

    if (mysqli_query($conn, $sql)) {
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
} else {
    echo "Invalid request";
}
