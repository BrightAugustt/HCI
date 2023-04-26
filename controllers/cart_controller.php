<?php

//connect to the user account class
require_once(dirname(__FILE__)) . '/../classes/cart_class.php';

//--INSERT--//
// add to cart
function add_to_cart_ctr($prodId, $ip_address, $custId, $qty){
    $insert= new cart_class();
    return $insert->add_to_cart_cls($prodId, $ip_address, $custId, $qty);
}

function insert_order_ctr($custId, $cropName, $date, $qty, $customerEmail, $amount, $location){
  $select= new cart_class();
  return $select->insert_order_cls($custId, $cropName, $date, $qty, $customerEmail, $amount, $location);
}

function view_order_ctr(){
  $select= new cart_class();
  return $select->view_order_cls();
}

function view_custorder_ctr($custId){
  $select= new cart_class();
  return $select->view_custorder_cls($custId);
}

function view_recentOrder_ctr(){
  $select= new cart_class();
  return $select->view_recentOrder_cls();
}


function orderid_ctr(){
  $select= new cart_class();
  return $select->orderid_cls();
}

function orderdate_ctr(){
  $select= new cart_class();
  return $select->orderdate_cls();
}

function insert_payment_ctr($order_amount, $custId, $order_date,$payMode){
  $select= new cart_class();
  return $select->insert_payment_cls($order_amount, $custId, $order_date,$payMode);
}

//--SELECT--//
//view cart
function select_all_cart_ctr($ip_address,$custId){
  $select= new cart_class();
  return $select->select_all_cart_cls($ip_address,$custId);
}

// function to check for duplicate
function dup_cart_qty_ctr($crpId, $custId){
  $duplicate= new cart_class();
  return $duplicate->dup_cart_qty_cls($crpId, $custId);
}

// function to check for duplicate
function view_cart_ctr($custId){
  $duplicate= new cart_class();
  return $duplicate->view_cart_cls($custId);
}

function get_products_by_id_ctr($order_id, $custId){
  $select= new cart_class();
  return $select-> get_products_by_id_cls($order_id, $custId);
}

function get_all_paymentrecords_ctr()
{
    //create an instance of the class
    $item_object = new cart_class();

    //run the method
    $item_records = $item_object->get_all_paymentrecords_cls();

    //check if the method worked
    if ($item_records) {
        //return all the data
        return $item_object->db_fetch_all();
    } else {
        //no data found
        return false;
    }
}

function getUserDetailsById_ctr($id){

  $details = new cart_class();

  return $details->getUserDetailsById_cls($id);
}


//--UPDATE--//
function update_cart_qty_ctr($customer_id,$crpId, $qty){
  $update= new cart_class();
  return $update->update_cart_qty_cls($customer_id,$crpId, $qty);
}

function update_orderstatus_ctr($order_id,$status)
{
    $updatestatus = new cart_class();
    return $updatestatus-> updateorderStatus($order_id, $status);
}

// //--DELETE--//
function delete_cart_record_ctr($crpId,$custId)
{
    // create an instance of the Product class
    $class_instance = new cart_class();
    // call the method from the class
    return $class_instance->delete_from_cart_cls($crpId,$custId);
}

function totalPrice_ctr($custId) {
  $cartModel = new cart_class();
  $totalsum = $cartModel->multiplyPrice($custId);
  return $totalsum;
}

// function totalPrice_ctr($custId)
// {
//     // create an instance of the Product class
//     $class_instance = new cart_class();
//     // call the method from the class
//     return $class_instance->multiplyPrice($custId);
// }

function cart_details_ctr($custId){
  $select= new cart_class();
  return $select->cart_details_cls($custId);
}

function insert_order_details_ctr($orderid,$crpid,$qty){
  $select= new cart_class();
  return $select->insert_order_details_cls($orderid,$crpid,$qty);
}

//--DELETE--//
function del_cart_ctr($custId){
  $select= new cart_class();
  return $select->del_cart_cls($custId);
}


// count cart
function count_cart_ctr($cid,$ip){
  $select= new cart_class();
  return $select->count_cart($cid,$ip);
}

function get_from_cart_ctr($a){

  // Create an instance of the product class. 
  $increasecart= new cart_class();

   return $increasecart->getfrom_cart($a);

}



?>