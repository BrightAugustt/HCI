<?php

include('../controllers/cart_controller.php');

session_start();
if(isset($_POST['qty'])){
    $crop_id=$_POST['crop_id'];
    $qty=$_POST['qty'];
    $customer_id=$_POST['customer_id'];
    if(update_cart_qty_ctr($customer_id,$crop_id,$qty)==TRUE){
        $response=array('status'=> 'success', 'message'=>'Cart updated successfully');
        echo json_encode($response);
        header('Location:../view/shopping-cart.php');
    }else{
        $response=array('status'=> 'success', 'message'=>'Failed to update cart');
        echo json_encode($response);
    }
}




?>