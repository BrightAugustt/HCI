<?php
require ('../settings/core.php');
// require ('../controllers/product_controller.php');
require ('../controllers/cart_controller.php');

check_login();


if (isset($_POST['addcart'])) {
    $ip_address = $_SERVER["REMOTE_ADDR"];
    $prodId = $_POST['crop_id'];
    $custId = $_SESSION['customer_id'];
    $qty = $_POST['qty'];

    $addCart=add_to_cart_ctr($prodId, $ip_address, $custId, $qty);
    if($addCart == True){
        header('Location:../view/index.php');
    }
}

if (isset($_POST['addtocart'])) {
    $ip_address = $_SERVER["REMOTE_ADDR"];
    $prodId = $_POST['crop_id'];
    $custId = $_SESSION['customer_id'];
    $qty = $_POST['qty'];

    $addCart=add_to_cart_ctr($prodId, $ip_address, $custId, $qty);
    if($addCart == True){
        header('Location:../view/singleCrop.php');
    }
}



?>