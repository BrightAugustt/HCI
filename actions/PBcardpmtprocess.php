<?php
require("../settings/core.php");
include_once '../controllers/cart_controller.php';

if (isset($_POST['paybox_cardSubmit'])) {
	
	// $order_id = $_POST['order_id'];
	$cropName = $_POST['crop_name'];
	$custId = get_id();
	$qty = $_POST['total_qty'];
    $first_name =  $_POST['cust_fname'];
    $last_name =  $_POST['cust_lname'];
    $selected_month = $_POST['Month'];
    $selected_year = $_POST['Year'];
    $cardNum = $_POST['card_num'];
    $cardExpiry = [$selected_month, $selected_year];
    $cardCvc = $_POST['card_cvc'];
	$email = $_POST['customer_email'];
	$order_amount = $_POST['order_amount'];
    
    
	$order_date = date('Y-m-d');
	$payMode = "Test";
	$location = $_POST["location"];

	// var_dump($email,$number,$network,$custId ,$order_amount);

	$curl = curl_init();

	curl_setopt_array($curl, array(
		CURLOPT_URL => 'https://paybox.com.co/pay',
		CURLOPT_HTTPHEADER => array('Authorization: Bearer e476bf07-dffb-43bc-a8ae-a42be8be9c02'),
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS =>
		array(
			// 'order_id' => $order_id,
			'currency' => 'GHS',
			'amount' => $order_amount,
			'mode' => $payMode,
            'card_first_name' => $first_name,
            'card_last_name' => $last_name,
            'card_number' => $cardNum,
            'card_expiry' => $cardExpiry,
            'card_cvc' => $cardCvc,
			'payload' => '{"key":"data"}',
			'card_email' => $email,
			'customer_id' => $custId,
            'card_address' => $location,
			'callback_url' => ''
		),
	));

	$response = curl_exec($curl);

	curl_close($curl);

	// Process the payment response
	$result = json_decode($response, true);
	echo $result['status'];

	if ($result['status'] == 'Success') {
		$order = insert_order_ctr($custId, $cropName, $order_date, $qty, $email, $order_amount, $location);
		$payment = insert_payment_ctr($order_amount, $custId, $order_date,$payMode);

		if ($order) {
            del_cart_ctr($custId);

            // Payment successful
			// Redirect the user to the success URL
			header('Location: ../view/success.php');
		} else {
			echo "Order insert failed";
		}
	} else {
		// Payment failed
		// Redirect the user to the failure URL
		// header('Location: ' . $params['pg_failure_url']);
		echo "API call failed";
	}
}
