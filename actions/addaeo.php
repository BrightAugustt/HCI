<?php
include_once '../controllers/contact_controller.php';

if (isset($_POST['insertBtn'])) {
    $fname = $_POST['customer_fname'];
    $lname = $_POST['customer_lname'];
    $number = $_POST['customer_contact'];
    $region = $_POST['customer_region'];
    $email = $_POST['customer_email'];
    $password = password_hash($_POST['customer_pass'], PASSWORD_DEFAULT); 
    $user_role = 2;

    //  var_dump($fname, $lname, $number, $country, $email, $password, $user_role);
    $result = add_record_ctr($fname, $lname, $number, $region, $email, $password, $user_role);
    if ($result == true) {
        header('Location: ../admin/customers.php');
    } else {
        echo 'error';
    }
}

?>
