<?php
// Assuming you received the payment response via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract relevant parameters from the response
    $paymentStatus = $_POST['code'];
    $transactionId = $_POST['transactionId'];
    $amount = $_POST['amount'];
    $providerReferenceId = $_POST['providerReferenceId'];

    // Handle payment status
    if ($paymentStatus === 'PAYMENT_SUCCESS') {
        // Payment succeeded
        // Update your database, send confirmation emails, etc.
        // Example: log the successful transaction
        error_log("Successful payment for transaction ID: $transactionId, Amount: $amount");
        // Redirect to a success page or display a success message
        header('Location: success.php');
        exit;
    } else {
        // Payment failed or is pending
        // Handle accordingly (e.g., notify the user, log errors)
        // Example: log the failed transaction
        error_log("Failed payment for transaction ID: $transactionId, Amount: $amount");
        // Redirect to an error page or display an error message
        header('Location: error.php');
        exit;
    }
} else {
    // Invalid request method (not a POST request)
    // Handle this case appropriately (e.g., show an error page)
    header('HTTP/1.1 400 Bad Request');
    echo 'Invalid request.';
    exit;
}
?>
