<?php
//making action  aware of controller
include("../controllers/cart_controller.php");

//collect form data
if (isset($_POST['check'])) {

    $order_id=$_POST['order_id'];
    $fstatus=$_POST['check'];
    $status;
    // var_dump($crop_id,$fstatus);
    if($fstatus == 'Completed'){
        $status='Pending';
    }else{
        $status='Completed';
    }

    if(update_orderstatus_ctr($order_id,$status) == True){
        header('Location:../admin/report.php');
    }
}



?>