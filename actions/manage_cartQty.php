<?php
include '../controllers/cart_controller.php';

if (isset($_POST['updateQty'])) {
    $ip_add = $_POST['ip_address'];
    $crpId = $_POST['crop_id'];
    $custId = $_POST['customer_id'];
    $qty = $_POST["qty"];

    $result = update_cart_qty_ctr($crpId, $custId, $qty);
    if($result){
        header("location: ../Ecom/cart.php");
    } else {
        echo "Update Failed";
    }
}
?>