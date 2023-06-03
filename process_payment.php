<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = $_POST['amount'];
    $gateway = $_POST['gateway'];
    
    // Process the payment based on the selected gateway
    if ($gateway === 'paytm') {
        // Process payment with Paytm Gateway
        // ...
        echo "Payment processed with Paytm Gateway for amount: " . $amount;
    } elseif ($gateway === 'rupay') {
        // Process payment with RuPay Gateway
        // ...
        echo "Payment processed with RuPay Gateway for amount: " . $amount;
    } else {
        echo "Invalid payment gateway selected.";
    }
} else {
    echo "Invalid request method.";
}
?>
